<?php if(!empty($_POST['tag'])): ?>
<h1 style="position:absolute">Posts Tagged with <i><?php echo CHtml::encode($_POST['tag']); ?></i></h1>
<?php endif; ?>


 <div class="row-fluid" id="main_wrapper"> 
         <h1 class="txt_centerd supertitle">Our inspiration board</h1> 
         <p class="intro"> Guideposts to a reimagined education</p>
        
   <?php $tags = Tag::model()->findAll(array('order'=>'frequency DESC')); if($tags): ?>
    <ul id="myTag"><!--<li style="display:inline"> Tags: </li>-->
    <li style="display:inline"><?php echo CHtml::link(CHtml::encode('all'), array('inspire/index')); foreach($tags as $tag){ ?></li>
    <li style="display:inline"> <?php echo CHtml::link(CHtml::encode($tag->name), array('inspire/index','tag'=>$tag->name));}?></li>
    </ul>
   <?php endif; ?>         
         
         <div class="tab-content"> 
      
  <div class="tab-pane active"  id="all">    

<?$this->widget('zii.widgets.CListView', array(
    'id' => 'list-identifier',
    'dataProvider' => $dataProvider,
    'template'=>'{items}{pager}',
    'itemView' => '_view',
    'pager'=>array(
        'class'=>'ext.yiinfinite-scroll.YiinfiniteScroller',
        'contentSelector' => '#list-identifier div.items',
        'itemSelector' => 'div.view',
        'loadingText' => 'Loading...',
        'donetext' => ' ',
        
    )
));?>      
</div>
         </div>

 </div>


 
