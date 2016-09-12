<?php

Yii::import('zii.widgets.CPortlet');

class UserManage extends CPortlet
{
	public function init()
	{
		$this->title=CHtml::encode('Gestione Utenti');
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('userManage');
	}
}