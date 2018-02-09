<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Create User';
?>
<?php 
    $form=ActiveForm::begin()?>
  <fieldset>
    <legend>Create new user </legend>
    <div class="form-group">
      <?= $form->field($user,'name');?>      
    </div>
    <div class="form-group">
      <?= $form->field($user,'username');?>      
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group">
      <?= $form->field($user,'email');?>      
    </div>
    <div class="form-group">
    <?= $form->field($user,'password')->passwordInput()?>      
    </div>
    <div class="form-group">
    <?= $form->field($user,'mobile');?>      
    </div>
    <div class="form-group">
    <?php
    $list = [0 => 'Female', 1 => 'Male'];
    echo $form->field($user, 'gender')->radioList($list);  
    ?>   
    </div>
    <?= html::submitButton('Create User',['class'=>'btn btn-primary']);?>
    <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Home Page</a>
    <?php ActiveForm::end() ?>
</form>