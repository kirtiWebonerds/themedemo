  <?php
  use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
   <div class="container">
     <div class="header-main">
       <div class="logo wow bounceInLeft" data-wow-delay="0.3s">
         <a href="index.html"><img src="web/images/logo.png"  alt=""></a>
       </div>
       <div class="top-navg">
              <ul class="res">
              <?php
                echo Nav::widget([
                        'options' => ['class' => 'res1'],
                        'items' => [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Shortcodes', 'url' => ['/site/shortcodes']],
                        ['label' => 'Gallery', 'url' => ['/site/gallery']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],

                        ]]);
                ?>                                   

           </ul>

       </div>
        <div class="clearfix"> </div>
      </div>
    </div>

