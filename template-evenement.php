<?php
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<main class="site__main">
     <h1>---- page.php ------</h1>
     <?php if (have_posts()): the_post(); ?>
     <?php the_post_thumbnail() ?>
     <?php the_title() ?>
     <?php the_field("titre"); ?>
     <?php the_field("resume"); ?>
     <?php the_field("date"); ?>
          <?php 
          $image = get_field('image');
          if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>

     <?php endif ?>
</main>
<?php get_footer() ?>



