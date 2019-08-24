<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pedigree */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Pedigrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pedigree-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PedigreeId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PedigreeId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'PedigreeId',
            'Name',
            'SireId',
            'DamId',
            'Sex',
            'DOB',
            'Coiall',
            'Hd',
            'RegNo',
            'Coi10gen',
            'Hyperlink',
            'Photo',
            'AdRegNo',
            'Ed',
            'Eye',
            'Lpn1',
            'DET',
            'Lpn1ID',
            'Lpnnw',
            'Lpn2',
            'Lpn2ID',
            'Dna',
            'CountryBorn',
            'CountryStay',
            'TatooMicro',
            'KennelName',
            'Thyroid',
            'DThyroid',
            'WebOwner',
        ],
    ]) ?>

</div>
