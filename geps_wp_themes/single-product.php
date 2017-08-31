<?php get_header(); ?>
<div id="content">
  <section class="product_wrapper">
    <div class="container_wrapper">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
          bcn_display();
        }?>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'blocks/product/content', get_post_type() ); ?>
      <?php endwhile; ?>
    </div>
  </section>
</div>
<?php get_footer(); ?>