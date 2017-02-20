<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

// $this->title = 'Contact';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="container">
            <div class="contact-head wow fadeInRightBig" data-wow-delay="0.3s">
                  <h1>Contact</h1>
                  <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
             </div>
        
            <div class="contact-form wow fadeInLeftBig" data-wow-delay="0.3s">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

        <div class="contact-bottom">
            <div class="col-md-6 contact-left wow fadeInLeftBig" data-wow-delay="0.3s">                   
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39679.49603713131!2d-1.827324470736588!3d51.56881093989803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871444f3ddbe4e5%3A0xa556bf37e9c5949a!2sSwindon%2C+UK!5e0!3m2!1sen!2sin!4v1459929254915"> </iframe>
            </div>
            <div class="col-md-6 contact-right wow fadeInRightBig" data-wow-delay="0.3s">                     
                  <h2>Contact info</h2>      
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum</p>
                 <h5>Address</h5>
                  <p>Richard McClintock</p>
                  <p>a Latin professor</p>
                  <p>Tele:+5854 454 587</p>
            </div>
            <div class="clearfix"> </div>
        </div>

    <?php endif; ?>
</div>
