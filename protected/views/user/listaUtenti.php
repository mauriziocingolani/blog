<h1>Lista Utenti</h1>
<br>
<table class="table">
    <thead class="thead-inverse">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Ruolo</th>
    </tr>
    </thead>

    <?php $this->widget('zii.widgets.CListView', array(
        'summaryText' => '', 
        'dataProvider'=>$listaUtenti,
        'itemView'=>'_utente',
    )); ?>

</table>
