<?php get_header() ?>
<main class="site__main" style="font-family:<?= get_theme_mod("font")?>">
     <h1>---- page.php ------</h1>
     <?php if (have_posts()): while(have_posts()): the_post(); ?>
     <?php the_title() ?>
     <?php the_content() ?>
     <?php endwhile ?>
     <?php endif ?>
</main>
<?php get_footer() ?>