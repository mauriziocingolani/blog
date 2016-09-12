<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserController extends Controller{
    
    public $layout='column2';
    private $_model;
    
    public function accessRules()
	{
		return array(
			array('allow',  // allow all users to access 'index' and 'view' actions.
				'actions'=>array('lista','dettaglio','update'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
    
    public function actionLista()
    {
        $criteria=new CDbCriteria(array(
        'condition'=>'ruolo='.User::RULES_USER,
     
    ));
        $listaUtenti = new CActiveDataProvider('User',array('criteria'=>$criteria));
        
        
        $this->render('listaUtenti',array('listaUtenti' => $listaUtenti));
    }

    public function actionDettaglio()
    {   
       $utente=$this->loadModel();
       
        if (isset($_POST['User']))
        {
            $_POST['User']['password'] = User::hashPassword($_POST['User']['password']);
            $utente->attributes = $_POST['User'];
            $utente->save();
                
       }
        $this->render('dettaglio',array('utente' => $utente));
    }

    public function loadModel()
    {
      if($this->_model===null)
      {
        if(isset($_GET['id']))
          $this->_model=User::model()->findbyPk($_GET['id']);
        if($this->_model===null)
          throw new CHttpException(404,'The requested page does not exist.');
      }
      return $this->_model;
    }
    
}