<? php
 class UserController extends Controller
 {
     public $layout='column2';

     public function accessRules()
     {
         return array(
             array('allow',  // allow all users to access 'index' and 'view' actions.
                 'actions'=>array('lista'),
                 'users'=>array('@'),
             ),
             array('deny',  // deny all users
                 'users'=>array('*'),
             ),
         );
     }

     public function actionLista()
     {
         $criteri = new CDbCriteria(array());
         $listaUtenti = new CActiveDataProvider('User');
         $this->render('listaUtenti',array('listaUtenti'=>$listaUtenti));
     }
 }
?>