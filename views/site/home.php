<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Home';
?>

<div class="site-index">
    <div class="jumbotron">
        <h2>All Users</h2>
    </div>

    <div class="body-content">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Gender</th>
                        <th scope="col">created_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(count($users) > 0):  ?>
                    <?php foreach($users as $user): ?>
                    <tr class="table-active">
                         <td><?php echo $user->id; ?></td>
                         <td><?php echo $user->name; ?></td>
                         <td><?php echo $user->username; ?></td>
                         <td><?php echo $user->email; ?></td>
                         <td><?php echo $user->mobile; ?></td>
                         <td><?php echo ($user->gender == 1 ? 'male' : 'female'); ?></td>
                         <td><?php echo $user->created_at; ?></td>
                         <td>
                             <span>
                                <?= Html::a('View',['view','id'=>$user->id]) ?>
                                <?= Html::a('Update',['update','id'=>$user->id]) ?>
                                <?= Html::a('Delete',['delete','id'=>$user->id]) ?>
                             </span>
                         </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                <tr class="table-active">
                <th scope="row">No records</th>
                <tr>
                <?php endif; ?>
                </tbody>
            </table>
            <span>
                <?= Html::a ('create new user', ['site/create'] , ['class' =>'btn btn-primary']) ?>
                <?php if(yii::$app->session->hasFlash('message')):?>
                <?php echo yii::$app->session->getFlash('message') ?>
                <?php endif;?>
            </span>
        </div>

    </div>
</div>
