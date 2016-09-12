<?php

Yii::import('zii.widgets.CPortlet');

class UserManage extends CPortlet
{
	public function init()
	{
		$this->title=CHtml::encode('Gestione Utente');
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('userManage');
	}
}