<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedigree;

/**
 * PedigreeSearch represents the model behind the search form of `app\models\Pedigree`.
 */
class PedigreeSearch extends Pedigree
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PedigreeId', 'SireId', 'DamId'], 'integer'],
            [['Name', 'Sex', 'DOB', 'Coiall', 'Hd', 'RegNo', 'Coi10gen', 'Hyperlink', 'Photo', 'AdRegNo', 'Ed', 'Eye', 'Lpn1', 'DET', 'Lpn1ID', 'Lpnnw', 'Lpn2', 'Lpn2ID', 'Dna', 'CountryBorn', 'CountryStay', 'TatooMicro', 'KennelName', 'Thyroid', 'DThyroid', 'WebOwner'], 'safe'],
        ];
    }

}
