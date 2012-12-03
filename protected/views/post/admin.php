<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
?>
<h1>Manage Posts</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'afterAjaxUpdate'=>"function() { 
            jQuery('.rating-block input').rating({'readOnly':true}); 
        }",
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
			'name'=>'create_time',
			'type'=>'datetime',
			'filter'=>false,
		),
                array(  
                    'name' => 'rating',  
                    'type' => 'raw',  
                    'value'=>'$this->grid->controller->widget("CStarRating", array("name" => $data->id, "id" => $data->id, "value" => $data->rating, "readOnly" => true,),true)',  
                    'headerHtmlOptions' => array('style' => 'width:85px;'),  
                    'htmlOptions' => array('class' => 'rating-block'),  
                    'filter' => false,  
                    'sortable' => false,  
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
