<?php
$table= 'App\Models\new_service\hhassignment';
$id = '745505';
$model = new $table();
$model = $model->find($id); // this line important, need to reassign variable name
