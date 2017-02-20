<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
    <div class="header head-top">
        <?php echo Yii::$app->controller->renderPartial("/site/header");?>
  </div>



<!--banner end here-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<?php echo Yii::$app->controller->renderPartial("/site/footer");?>
<!--copy right end here-->

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
