<?php

/**
 * This is the model class for table "peluqueria".
 *
 * The followings are the available columns in table 'peluqueria':
 * @property integer $pelu_id
 * @property string $clie_rut
 * @property integer $masc_id
 * @property string $pelu_fecha
 * @property string $pelu_hora
 * @property double $pelu_valor
 */
class Peluqueria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'peluqueria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pelu_fecha, pelu_hora, pelu_valor', 'required'),
			array('masc_id', 'numerical', 'integerOnly'=>true),
			array('pelu_valor', 'numerical'),
			array('clie_rut', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pelu_id, clie_rut, masc_id, pelu_fecha, pelu_hora, pelu_valor', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pelu_id' => 'Pelu',
			'clie_rut' => 'Clie Rut',
			'masc_id' => 'Masc',
			'pelu_fecha' => 'Pelu Fecha',
			'pelu_hora' => 'Pelu Hora',
			'pelu_valor' => 'Pelu Valor',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pelu_id',$this->pelu_id);
		$criteria->compare('clie_rut',$this->clie_rut,true);
		$criteria->compare('masc_id',$this->masc_id);
		$criteria->compare('pelu_fecha',$this->pelu_fecha,true);
		$criteria->compare('pelu_hora',$this->pelu_hora,true);
		$criteria->compare('pelu_valor',$this->pelu_valor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Peluqueria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
