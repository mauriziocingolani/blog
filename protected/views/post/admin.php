<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
?>
<h1>Manage Posts</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'title',
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)'
		),
		array(
			'name'=>'status',
			'value'=>'Lookup::item("PostStatus",$data->status)',
			'filter'=>Lookup::items('PostStatus'),
		),
		array(
			'name'=>'tags',
		),
		array(
			'class'=>'CButtonColumn',
			'buttons'=>array(
				'delete'=>array(
				'label'=>'Delete',
				'url'=>'Yii::app()->createUrl("post/delete",array("id"=>$data->id,"title"=>$data->title))',
				'imageUrl'=>'https://linearicons.com/free/icon/lnr-trash.svg')),
				'deleteConfirmation'=>"Sei sicuro di cancellare il post ?",
		),
	),
)); ?>
