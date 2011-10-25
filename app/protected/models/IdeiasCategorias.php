<?php

/**
 * This is the MongoDB Document model class based on table "IdeiasCategorias".
 */
class IdeiasCategorias extends EMongoDocument
{
	public $id;
	public $ideias_id;
	public $categorias_id;

	/**
	 * Returns the static model of the specified AR class.
	 * @return IdeiasCategorias the static model class
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
		return 'ideiascategorias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, ideias_id, categorias_id', 'required'),
			array('id, ideias_id, categorias_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ideias_id, categorias_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ideias_id' => 'Ideias',
			'categorias_id' => 'Categorias',
		);
	}
}