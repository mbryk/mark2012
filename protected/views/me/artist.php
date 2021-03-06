<h1 class="title">My Artwork</h1>
<hr class="style-one"> 
<div class="tabbable tabs-right">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#SK" data-toggle="tab">Sketches</a></li>
                <li class=""><a href="#SP" data-toggle="tab">Spray Paint</a></li>
              </ul>
    
              <div class="tab-content">
                  <div class="tab-pane active" id="SK">
                      
                      <p style="padding: 10px 0 20px 0; text-align: center; font-size: 18px; font-family: Impact, Charcoal, sans-serif;">Was bored during class, last week. Started sketching a picture that was on my computer. Decided I enjoyed it. Now, I guess I'm an "artist"</p>
                      <ul class="thumbnails">
                          <li class="span2">
                              <a class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/barney.JPG" rel="shadowbox[Sketches]" title="Barney">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/barney.JPG" alt="">
                              </a>
                          </li>
                          <li class="span2">
                              <a class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/elvis.JPG" rel="shadowbox[Sketches]" title="Elvis?">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/elvis.JPG" alt="">
                              </a>
                          </li>
                          <li class="span3">
                              <a class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/mom1.JPG" rel="shadowbox[Sketches]" title="Mom and Me">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/mom1.JPG" alt="">
                              </a>
                          </li>
                          <li class="span3">
                              <a style="position:relative" class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/mom2.JPG" rel="shadowbox[Sketches]" title="Mom and Me">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/mom2.JPG" alt="" />
                              </a>
                          </li>
                      </ul>
                      <ul class="thumbnails">
                          <li class="span3">
                              <a style="position:relative" class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/brykachu.JPG" rel="shadowbox[Sketches]" title="Brykachu">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/brykachu.JPG" alt="" />
                              </a>
                          </li>
                          <li class="span3">
                              <a style="position:relative" class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/bart.JPG" rel="shadowbox[Sketches]" title="Bart Simpson-off">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/bart.JPG" alt="" />
                              </a>
                          </li>
                          <li class="span4">
                              <a style="position:relative" class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/zach.JPG" rel="shadowbox[Sketches]" title="Professor Berman">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/zach.JPG" alt="" />
                              </a>
                          </li>
                      </ul>
                </div>
                  <div class="tab-pane" id="SP">
                      <p style="padding: 10px 0 20px 0; text-align: center; font-size: 18px; font-family: Impact, Charcoal, sans-serif;">Winter Break 2012-2013!<br/> Party!!!</p>
                    <ul class="thumbnails">
                          <li class="span3">
                              <a style="position:relative" class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/spray1.JPG" rel="shadowbox[SprayPaint]" title="From Earth">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/spray1.JPG" alt="" />
                              </a>
                          </li>
                          <li class="span3">
                              <a style="position:relative" class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/spray2.JPG" rel="shadowbox[SprayPaint]" title="In Space">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/spray2.JPG" alt="" />
                              </a>
                          </li>
                          <!--<li class="span4">
                              <a style="position:relative" class="thumbnail" href="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/spray3.JPG" rel="shadowbox[SprayPaint]" title="Professor Berman">
                                  <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/spray3.JPG" alt="" />
                              </a>
                          </li>-->
                      </ul>
                </div>
              </div>
<?php
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/shadowbox.js',CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/shadowbox.css',CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScript('startGallery', '
            Shadowbox.init({displayNav:true, continuous:true});', CClientScript::POS_HEAD)?>