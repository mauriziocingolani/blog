<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserController extends Controller{
    
    public $layout='column2';
    
    public function accessRules()
	{
		return array(
			array('allow',  // allow all users to access 'index' and 'view' actions.
				'actions'=>array('lista','dettaglio'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
    
    public function actionLista(){
        
        $listaUtenti = new CActiveDataProvider('User');
        
        
        $this->render('listaUtenti',array('listaUtenti' => $listaUtenti));
    }
    
    
    public function actionDettaglio() {
        
        if(isset($_GET['id'])){
                $utente = User::model()->findByPk($_GET['id']);
        }
        
        $this->render('dettaglio',array('utente' => $utente));
    }
    
    
}