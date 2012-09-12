<div class="view">
         <div class="course_blogpost_wrapper">
         
         <div class="course_post">
        <!-- <h3 class="brd_btm"><?php echo CHtml::link(CHtml::encode($data->title), $data->website); ?></h3> -->
             
             <?php if(($data->tags == "students") or ($data->tags=="teachers")): ?>    

             <blockquote class="special_quote">
                 <?php echo $data->content ?>
             </blockquote>
             <cite>
                 <?php echo $data->title ?>
             </cite>         
         
         <?php else: ?>
         <h3 class="brd_btm"><?php echo CHtml::link(CHtml::encode($data->title), $data->website); ?></h3>
         
         		<p> <?php if($data->image_source): ?>
                            <img src="<?php echo $data->image_source ?>" alt="tree" class="blog"> 
                                <?php endif; ?>
                            <?php echo $data->content;?>
         		
         		</p>
<?php endif; ?>
         		          </div>
             
        <div class="course_shadow"></div>
       </div>       		
</div>