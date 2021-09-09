<?php
 use yii\widgets\ActiveForm;
 use yii\helpers\Html;


	?>
<?php 
$form=ActiveForm::begin([
'method'=>'post',
'action'=>'/fcp/get-data'

])

?>
 <div class="form-group">
  <?=$form->field($model,'fullname')->textInput(['class'=>'form-control'])->label('full name');?>
  <?=$form->field($model,'yob')->textInput(['class'=>'form-control'])->label('date of birth');?>
  <?=$form->field($model,'chancenumber')->textInput(['class'=>'form-control'])->label('chance nummber');?>

  <?=Html::submitButton('send Request',['class'=>'btn btn-primary']);?>

 </div>
<?php
 ActiveForm::end();
?>