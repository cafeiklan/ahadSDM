<?php

Yii::import('zii.widgets.grid.CButtonColumn');

class BButtonColumn extends CButtonColumn {

	//public $header = 'Aksi';
	public $headerHtmlOptions = ['style' => 'text-align:center'];
	public $htmlOptions = ['style' => 'text-align:center'];
	//public $template = '{update} {delete}';
	public $template = '{delete}';
	public $updateButtonUrl = 'Yii::app()->controller->createUrl("ubah", array("id"=>$data->primaryKey))';
	public $updateButtonImageUrl = false;
	public $updateButtonLabel = '<i class="fa fa-edit"></i>';
	public $updateButtonOptions = ['title' => 'Ubah'];
	public $deleteButtonUrl = 'Yii::app()->controller->createUrl("hapus", array("id"=>$data->primaryKey))';
	public $deleteButtonImageUrl = false;
	public $deleteButtonLabel = '<i class="fa fa-times"></i>';
	public $deleteButtonOptions = ['title' => 'Hapus', 'class' => 'text-red'];
	public $deleteConfirmation = 'Anda yakin?';

}
