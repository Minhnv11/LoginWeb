<?php
    get_header();
?>
<div class="heading"><h1>Home</h1></div>
<div id="main">
   <div id="content">
       <?php
            if(isset($list_post)){
                ?>
                <ul  class="list_post">
                <?php
                    foreach($list_post as $item){
                        ?>
                        <li  class="post_item">
                        <div class="post_img"> <?php print_r($item['post_img']); ?> </div>
                         <div class="post_content">
                             <div class="post_title">
                                 <a href=""><?php echo $item['post_title']; ?></a>
                             </div>
                             <div class="post_desc"> <?php echo $item['post_content']; ?></div>
                         </div>
                        </li>
                        <?php
                    }
                   
                ?>
       
    </ul>
    <?php
            }
       ?>
   
   </div>
   <div id="sidebar">
       <h5>速報ニュース </h5>
       <?php
            if(isset($list_news)){
                ?>
                <ul>
                    <?php 
                        foreach($list_news as $item){
                            ?>
                            <li class="news">
                            <div class="time"> <?php echo $item['news_time']; ?></div>
                            <div class="news_content"> <?php echo $item['news_desc']; ?></div>
                         </li>
                         <?php
                        }
                    ?>
               
                </ul>
                <?php
            }
       ?>
     
   </div>
    </div>
</div>
<!-- END CONTENT  -->
<?php
    get_footer();
?>