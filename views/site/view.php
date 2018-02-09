<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'View User';
?>
  <fieldset>
    <legend>View user </legend>
    <div class="form-group">
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>User ID: </strong> <?php echo $user->id; ?> 
    </div>
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Name: </strong> <?php echo $user->name; ?> 
    </div>
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Username: </strong> <?php echo $user->username; ?> 
    </div>
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Email: </strong> <?php echo $user->email; ?> 
    </div>
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Mobile: </strong> <?php echo $user->mobile; ?> 
    </div>
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Gender: </strong> <?php echo ($user->gender == 1 ? 'male' : 'female'); ?> 
    </div>
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Created At : </strong> <?php echo $user->created_at;?> 
    </div>
    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Last Updated At: </strong> <?php echo $user->updated_at; ?> 
    </div>
    </div>
    <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Home Page</a>
