<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\AccessControl;
use yii\data\ActiveDataFilter;
use yii\data\ActiveDataProvider;
use app\models\Pedigree;
use app\models\PedigreeSearch;
use Yii;

class PedigreeController extends ActiveController
{
	public $modelClass = 'app\models\Pedigree';

	// Force a New Session for every request
	public function init()
	{
		parent::init();
		\Yii::$app->user->enableSession = false;
	}

	// Configure behaviours for Authentication and Access Control
	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['authenticator'] = [
			'class' => HttpBasicAuth::className(),
			'auth' => 'app\models\User::getUserIdentity',
		];
		$behaviors['access'] = [
			'class' => AccessControl::className(),
			'rules' => [
				[
					'actions' => ['index','view','options'],
					'allow' => true,
					'roles' => ['@'],
				],
			],
		];
		return $behaviors;
	}

	public function actions()
	{
		$actions = parent::actions();
		$actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
		return $actions;
	}

	public function prepareDataProvider()
	{
		$filter = new ActiveDataFilter([
			'searchModel' => 'app\models\PedigreeSearch'
		]);

		$filterCondition = null;

		// You may load filters from any source. For example,
		// if you prefer JSON in request body,
		// use Yii::$app->request->getBodyParams() below:
		if ($filter->load(\Yii::$app->request->get())) { 
			$filterCondition = $filter->build();
			if ($filterCondition === false) {
				// Serializer would get errors out of it
				return $filter;
			}
		}

		$query = Pedigree::find();
		if ($filterCondition !== null) {
			$query->andWhere($filterCondition);
		}

		return new ActiveDataProvider([
			'query' => $query,
		]);
	}
}
