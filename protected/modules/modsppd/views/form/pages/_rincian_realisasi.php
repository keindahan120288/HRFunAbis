<div class="span12">
	<?php
	$this->beginWidget('bootstrap.widgets.TbBox', array(
	    'title' => 'Daftar Realisasi Non Dinas',
	    // 'headerIcon' => 'icon-home',
	  //   'headerButtons' => array(
			// array(
			// 	'class' => 'bootstrap.widgets.TbButtonGroup',
			// 	'buttons'=>array(
			// 		array('label'=>'Tambah Realisasi Non Dinas', 'url'=>array('/modsppd/realNondinas/create')),
			// 	),
			// ),
	  //   ),
	));		
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'real-nondinas-grid',
	'dataProvider'=>$data,
	// 'filter'=>$model,
	'columns'=>array(
		// 'id',
		// 'sppd_id',
		'employee_id',
		'name',
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'amount',
			'editable' => array( //editable section
				'url' => $this->createUrl('realNondinas/ajaxupdate'),
				'placement' => 'left',
			),
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'explanation',
			'editable' => array( //editable section
				'url' => $this->createUrl('realNondinas/ajaxupdate'),
				'placement' => 'left',
			),
		),
		// 'created_by',
		// 'created_date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php $this->endWidget(); ?>

</div>