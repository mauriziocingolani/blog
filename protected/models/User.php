<?php

/**
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $profile
 */
class User extends CActiveRecord
{
    
        const RULES_USER = 1;
        const RULES_ADMIN = 2;


    /**
	 * Returns the static model of the specified AR class.
	 * @return static the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email', 'required'),
			array('username, password, email', 'length', 'max'=>128),
			array('profile', 'length', 'max'=>50, 'tooLong'=>"il tuo profilo supera i 10 caratteri"),
			array('ruolo','safe'),


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
			'posts' => array(self::HAS_MANY, 'Post', 'author_id'),
                        'rules' => array(self::BELONGS_TO, 'Ruolo','ruolo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'profile' => 'Profile',
                        'ruolo' => 'Ruolo',
		);
	}

	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return CPasswordHelper::verifyPassword($password,$this->password);
	}


	public function hashPassword($password)
	{
		return CPasswordHelper::hashPassword($password);
	}

    public function getUrl()
    {
        return Yii::app()->createUrl('user/dettaglio', array(
            'id'=>$this->id,
            'username'=>$this->username,
        ));
    }
}
