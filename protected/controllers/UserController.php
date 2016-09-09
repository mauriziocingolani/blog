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
        
        $listaUtenti = new CActiveDataProvider('User');
        
        
        $this->render('listaUtenti',array('listaUtenti' => $listaUtenti));
    }

    public function actionDettaglio()
    {
       if (isset($_GET['id']))
       {
           $utente = User::model()->findByPk($_GET['id']);
           $this->_model=User::model()->findByPk($_GET['id']);}

           else if (isset($_POST['User']))
        {
            $model = $this->_model;
            var_dump($model);
            $model->attributes = $_POST['User'];
            if($model->save())
                $this->redirect(array('listaUtenti'));
       }
        $this->render('dettaglio',array('utente' => $utente));
    }

    public function actionUpdate()
    {
//        $test = $_POST['User'];
//        $this->render('test',array('test'=>$test));
    }
    
    
}