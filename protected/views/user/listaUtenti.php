<h1>Lista Utenti</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$listaUtenti,
    'itemView'=>'_utente',

)); ?>