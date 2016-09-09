<?php

/**
 * UserIdentity represents the data needed to identity a user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Autenticazione user.
	 * @return boolean quando autenticazione ha successo.
	 */
	public function authenticate()
	{
		$user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
                
                
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->id;
			$this->username=$user->username;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	/**
	 * @return ID dell'utente trovato.
	 */
	public function getId()
	{
		return $this->_id;
	}
}