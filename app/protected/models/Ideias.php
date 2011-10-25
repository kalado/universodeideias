<?php

/**
 * This is the MongoDB Document model class based on table "Ideias".
 */
class Ideias extends EMongoDocument
{
	public $id;
	public $nome;
	public $dtinicial;

	/**
	 * Returns the static model of the specified AR class.
	 * @return Ideias the static model class
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
		return 'ideias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, dtinicial', 'required'),
			array('nome', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, dtinicial', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'dtinicial' => 'Dtinicial',
		);
	}
}