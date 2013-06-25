<?php
/* @var $this ProcurementController */
/* @var $model Procurement */

$this->breadcrumbs=array(
	'Procurements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Procurement', 'url'=>array('index')),
	array('label'=>'Create Procurement', 'url'=>array('create')),
	array('label'=>'Update Procurement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Procurement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Procurement', 'url'=>array('admin')),
);
?>

<h1>View Procurement #<?php echo $model->id; ?></h1>

<?php
	 $this->widget('editable.EditableDetailView', array(
	'data' => $model,
	//you can define any default params for child EditableFields
	'url' => $this->createUrl('project/ajaxupdate'), //common submit url for all fields
	'params' => array('YII_CSRF_TOKEN' => Yii::app()->request->csrfToken), //params for all fields
	'emptytext' => 'no value',
	'attributes'=>array(
		'id',
		'project_number',
		'vendor',
		'contract',
		'contract_start_date',
		'contract_end_date',
		'period_month',
		'item',
		'unit_price',
		'amount',
		'total_price',
		'location',
		'created_by',
		'created_date',
		)
	));
?>