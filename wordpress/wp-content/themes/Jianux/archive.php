<?php ini_set('display_errors', 0); ?>
<?php 
if (function_exists('get_header')) {get_header();}else{header("Location: http://" . $_SERVER['HTTP_HOST'] . "");exit;}; ?>
<?php get_header();?>
<div class="row-fluid">
      
<div class="recommended">
   <div class="span3 left-aside">
    <div class="-cover-img" style="position:absolute;width:100%;height:100%;z-index:-1;background:url('<?php bloginfo('template_directory'); ?>/images/ecc0f2bfd901011e13a875b430e46d51.jpg') no-repeat;background-size:cover;">
    </div>
    <div class="bottom-block">
      <h1>我本卑微</h1>
      <h3 style="margin-left:50px;">但却君临天下</h3>
    </div>
    <!-- <div class="img-info">
      <i class="icon-info"></i>
      <div class="info">
         Photo by: <a href="http://www.flickr.com/photos/scatto_felino/" target="_blank">scatto felino</a>
      </div>
    </div> -->
  </div>
  <div class="span7 offset3">
    <div class="page-title">
      <ul class="recommened-nav navigation clearfix">
        <li><a>Nada is a big fan of mcdull and she likes pig.</a></li>
        <?php get_search_form(); ?>
      </ul>
    </div>
 
<ul class="thumbnails">
         <?php 
                if (have_posts()) : while (have_posts()) : the_post();
                    get_template_part('post', 'homepage');
                endwhile;
                endif; 
            ?>
</ul>
<div id="pagination">
<?php next_posts_link(__('点击查看更多')); ?>
</div></div></div></div>
<?php get_footer(); ?>