<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\AccessControl;

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


}
