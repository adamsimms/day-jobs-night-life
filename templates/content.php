<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        <span>/ <em><?php the_field('tag-line'); ?></em></span>
      </a>
    </h2>
    <p><?php the_excerpt(); ?></p>
</article>
