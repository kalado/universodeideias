<?php

/**
 * This is the MongoDB Document model class based on table "IdeiasUpdates".
 */
class IdeiasUpdates extends EMongoDocument
{
	public $id;
	public $usuarios_id;
	public $ideias_id;
	public $descricao;
	public $dtinicial;

	/**
	 * Returns the static model of the specified AR class.
	 * @return IdeiasUpdates the static model class
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
		return 'ideiasupdates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuarios_id, ideias_id, descricao, dtinicial', 'required'),
			array('usuarios_id, ideias_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usuarios_id, ideias_id, descricao, dtinicial', 'safe', 'on'=>'search'),
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
			'descricao' => 'Descricao',
			'dtinicial' => 'Dtinicial',
		);
	}
}