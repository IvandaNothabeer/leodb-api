<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedigree".
 *
 * @property int $PedigreeId
 * @property string $Name
 * @property int $SireId
 * @property int $DamId
 * @property string $Sex
 * @property string $DOB
 * @property string $Coiall
 * @property string $Hd
 * @property string $RegNo
 * @property string $Coi10gen
 * @property string $Hyperlink
 * @property string $Photo
 * @property string $AdRegNo
 * @property string $Ed
 * @property string $Eye
 * @property string $Lpn1
 * @property string $DET
 * @property string $Lpn1ID
 * @property string $Lpnnw
 * @property string $Lpn2
 * @property string $Lpn2ID
 * @property string $Dna
 * @property string $CountryBorn
 * @property string $CountryStay
 * @property string $TatooMicro
 * @property string $KennelName
 * @property string $Thyroid
 * @property string $DThyroid
 * @property string $WebOwner
 */
class Pedigree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedigree';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SireId', 'DamId'], 'integer'],
            [['DOB', 'DET', 'DThyroid'], 'safe'],
            [['Name', 'RegNo', 'Coi10gen', 'AdRegNo', 'Lpn1', 'CountryBorn', 'CountryStay', 'KennelName', 'Thyroid'], 'string', 'max' => 64],
            [['Sex'], 'string', 'max' => 10],
            [['Coiall', 'Hd', 'Ed', 'Lpn1ID', 'Lpnnw', 'Lpn2', 'Lpn2ID', 'Dna', 'TatooMicro'], 'string', 'max' => 32],
            [['Hyperlink', 'WebOwner'], 'string', 'max' => 256],
            [['Photo', 'Eye'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PedigreeId' => 'Pedigree ID',
            'Name' => 'Name',
            'SireId' => 'Sire ID',
            'DamId' => 'Dam ID',
            'Sex' => 'Sex',
            'DOB' => 'Dob',
            'Coiall' => 'Coiall',
            'Hd' => 'Hd',
            'RegNo' => 'Reg No',
            'Coi10gen' => 'Coi10gen',
            'Hyperlink' => 'Hyperlink',
            'Photo' => 'Photo',
            'AdRegNo' => 'Ad Reg No',
            'Ed' => 'Ed',
            'Eye' => 'Eye',
            'Lpn1' => 'Lpn1',
            'DET' => 'Det',
            'Lpn1ID' => 'Lpn1 ID',
            'Lpnnw' => 'Lpnnw',
            'Lpn2' => 'Lpn2',
            'Lpn2ID' => 'Lpn2 ID',
            'Dna' => 'Dna',
            'CountryBorn' => 'Country Born',
            'CountryStay' => 'Country Stay',
            'TatooMicro' => 'Tatoo Micro',
            'KennelName' => 'Kennel Name',
            'Thyroid' => 'Thyroid',
            'DThyroid' => 'D Thyroid',
            'WebOwner' => 'Web Owner',
        ];
    }
}
