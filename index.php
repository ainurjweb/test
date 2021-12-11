<?php get_header(); ?>
<?php if((of_get_option('slider_act') == '1')) { get_template_part( 'slider' ); } ?>
<div class="container">
	<div class="grid-9 pull-right">
      <div class="nest">
          <?php if((is_home())&& ($paged < 1)) { ?>
          <div class="grid-12 post"><?php echo wpautop(of_get_option('welcome_text')); ?></div>
          <?php } ?>
          
        <?php if($paged > 1) { ?>
        <div class="grid-12">
        <h1><?php bloginfo('name'); ?> <?php if ( get_query_var('paged') ) { echo ' - Halaman ' . get_query_var('paged'); } ?></h1>
        
        <?php get_template_part( 'loop' ); ?></div>
        <?php } ?>
          
          <div class="grid-12">
              <div class="vtr-title"><h2>Mobil Terbaru</h2></div>
               <?php virtarich_index_mobil(); ?>
          </div>
          
         
      </div>
    </div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
