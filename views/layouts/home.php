<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HomeAssets;

HomeAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
<!--banner start here-->
<div class="banner">
  <div class="header">

<?php echo Yii::$app->controller->renderPartial("/site/header");?>
</div>

<div class="banner-bottom wow fadeInRightBig" data-wow-delay="0.3s">
    <div class="container">
        <div class="banner-text">
            <h2>Webonerds Team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
</div>
<!--banner end here-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<?php echo Yii::$app->controller->renderPartial("/site/footer");?>
<?php $this->endBody() ?>
 <!-- script-for-menu -->
                 <script>
                   $( "span.menu" ).click(function() {
                     $( "ul.res" ).slideToggle( 300, function() {
                     // Animation complete.
                      });
                     });
                </script>
                <script>
         new WOW().init();
        </script>  
</body>
</html>
<?php $this->endPage() ?>
