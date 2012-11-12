<?php $this->pageTitle=Yii::app()->name . ' - Forgot Password'; ?>

<h1>Forgot Password</h1>

<?php 

if($form->emailed == "Sent")
{
    ?>
    <p>Your Password was succesfully changed.<br/>
    An e-mail was sent to <?php echo($form->email); ?> with updated account details.
    </p>
    <?php
}
else if($form->emailed == "Not Sent")
{
    ?>
    <p>We weren't able to send you the confirmation e-mail.<br/>
    Please contact the Website Administration.
    </p>
    <?php 
}

    if($form->stage == "Username Not Found")
{
    ?>
    <p>The Email you provided was not found in our database, please try again.</p>
    <?php 
}
    if($form->stage == "Forgot Key Created")
    {
        ?>
    <p>URL:</p>
    <?php
       echo $url;
    }


 ?>
    
<?php 


if($form->stage == "Reset Password")
{
    ?>
    <div class="yiiForm">
    <?php echo CHtml::beginForm(); ?>
    
    <?php echo CHtml::errorSummary($form); ?>
    
    <div class="simple">
    <p class="hint" style="margin-left:0px;">
    Enter a new password for your account:
    </p>
    <div class="row">
    <?php echo CHtml::activeLabel($form,'password', array('style'=>'width:150px;')); ?>
    <?php echo CHtml::activePasswordField($form,'password') ?>
    <?php echo CHtml::error($form, 'password'); ?>
    </div>
    <div class="row">
    <?php echo CHtml::activeLabel($form,'password_repeat', array('style'=>'width:150px;')); ?>
    <?php echo CHtml::activePasswordField($form,'password_repeat') ?>
    <?php echo CHtml::error($form, 'password_repeat'); ?>
    </div>
    <br/>
    <div class="action">
    <?php echo CHtml::submitButton('Change Password'); ?>
    </div>
    <?php echo CHtml::endForm(); ?>
    </div><!-- yiiForm -->
    <?php 
}

if($form->stage == "Find User")
{
?>
<div class="yiiForm">
<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($form); ?>

<div class="simple">
<p class="hint" style="margin-left:0px;">
Enter your email address to reset your password:
</p>
</div>
<div class="row">
<?php echo CHtml::ActiveLabelEx($form,'username', array('style'=>'width:150px;')); ?>
<?php echo CHtml::activeTextField($form,'username') ?>
</div>
<br/>
<div class="action">
<?php echo CHtml::submitButton('Submit'); ?>
</div>
<?php echo CHtml::endForm(); ?>
</div><!-- yiiForm -->
<?php 
} // close statement