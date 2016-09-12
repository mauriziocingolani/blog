<?php

/**
 * This is the model class for table "{{ruolo}}".
 *
 * The followings are the available columns in table '{{ruolo}}':
 * @property integer $id_ruolo
 * @property string $descrizione
 *
 * The followings are the available model relations:
 * @property User[] $users
 */
class Ruolo extends CActiveRecord
{
        
        private static $arrayRuoli=array();
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{ruolo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descrizione', 'required'),
			array('descrizione', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ruolo, descrizione', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'User', 'ruolo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ruolo' => 'Id Ruolo',
			'descrizione' => 'Descrizione',
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

		$criteria->compare('id_ruolo',$this->id_ruolo);
		$criteria->compare('descrizione',$this->descrizione,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ruolo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
        public static function listaRuoli() {
            
            $ruoli = self::model()->findAll();
            
            foreach($ruoli as $ruolo){
                self::$arrayRuoli[$ruolo->id_ruolo] = $ruolo->descrizione;
            }
            
            return self::$arrayRuoli;
            
        }
}
