<?php

/**
 * This is the MongoDB Document model class based on table "IdeiasVotos".
 */
class IdeiasVotos extends EMongoDocument
{
	public $id;
	public $usuarios_id;
	public $ideias_id;
	public $voto;
	public $data;

	/**
	 * Returns the static model of the specified AR class.
	 * @return IdeiasVotos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * returns the primary key field for this model
	 */
	public function primaryKey()
	{
		return 'id';
	}

	/**
	 * @return string the associated collection name
	 */
	public function getCollectionName()
	{
		return 'ideiasvotos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuarios_id, ideias_id, voto, data', 'required'),
			array('usuarios_id, ideias_id', 'numerical', 'integerOnly'=>true),
			array('voto', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usuarios_id, ideias_id, voto, data', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usuarios_id' => 'Usuarios',
			'ideias_id' => 'Ideias',
			'voto' => 'Voto',
			'data' => 'Data',
		);
	}
}