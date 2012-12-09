<?php if(Yii::app()->user->hasFlash('quiz')):?>
<div class="alert alert-success" style="width:100%;position:absolute; top: -15px">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <p style="text-align:center"><strong>Thanks</strong> for answering!!! I'm flattered!</p>
</div>
    <?php endif; ?>
<?php
Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".alert").animate({opacity: 1.0}, 3000).fadeOut("slow");',
   CClientScript::POS_READY
);
?>

<h1 class="title">Engineer</h1>
<hr class="style-five">
<div class="tabbable tabs-right">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#CU" data-toggle="tab">The Cooper Union</a></li>
                <li class=""><a href="#SW" data-toggle="tab">SolidWorks</a></li>
                <li class=""><a href="#PBR" data-toggle="tab">Pete's Beats Revolutionized</a></li>
                <li class=""><a href="#GNG" data-toggle="tab">Give n' Grow</a></li>
                <li class=""><a href="#DLD" data-toggle="tab">Digital Logic Design - Elevator</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="CU">
                    <p>Here's my mouthful: </p>
                    <p>I am currently a Sophomore in the school of Engineering of <a href="http://www.cooper.edu">The Cooper Union</a> studying Computer Engineering within the Electrical Engineering department. </p>
                    <p>Got it? Go <a href="/quiz/engineer">take the quiz</a>!</p>
                </div>
                <div class="tab-pane" id="SW">
                    <ul class="thumbnails">
                        <li><a class="thumbnail" href="#">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/piano1.png" alt="">
                            </a></li>
                        <li><a class="thumbnail" href="#">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/piano2.png" alt="">
                            </a></li>
                        <li><a class="thumbnail" href="#">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/piano3.png" alt="">
                            </a></li>
                        <li><a class="thumbnail" href="#">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/piano4.png" alt="">
                            </a></li>
                        <li><a class="thumbnail" href="#">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/piano5.png" alt="">
                            </a></li>
                        <li><a class="thumbnail" href="#">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/sketches/piano6.png" alt="">
                            </a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="PBR">
                    <a href="http://www.markbryk.in/stuff/PBR.docx">
                        <div class="link-card link-card-left">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/my/pbr.jpg" />
                        </div>
                        <div class="link-card link-card-right">
                            <h3>Pete's Beats Revolutionized</h3>
                            <p>Pete’s Beats Revolutionized is an exercise gaming system I developed with a team during Freshman year. It combines music and movement, transforming exercise into a more engaging and creative experience. With its innovative software and hardware designs, it improves upon the original system by making it more accessible, portable, and enjoyable.</p>
                            <p>We wrote the computer program in C++.</p>
                            <p>Click to download the final report.</p>
                        </div>
                      </a>
                </div>
                <div class="tab-pane" id="GNG">
                      <a href="http://dap.cooper.edu/doku.php?id=start:classes:principlesofdesign:giving_tree:start">
                        <div class="link-card link-card-left">
                            <img src="http://dap.cooper.edu/lib/exe/fetch.php?media=start:classes:principlesofdesign:giving_tree:wikimainimage05.png" />
                        </div>
                        <div class="link-card link-card-right">
                            <h3>Give and Grow Android App</h3>
                            <p>Used augmented reality on smart phones to create an interactive giving experience to incentivize and interest potential donors while creating a network of givers and helping the Cooper Union climb out of debt.</p>
                            <p>All of the code is on my Github page.</p>
                        </div>
                      </a>
                </div>
                <div class="tab-pane" id="DLD">
                  <p>I made an elevator? WHOA!!</p>
                </div>
              </div>
</div>