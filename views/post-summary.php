<?php
/**
 * Display a post with medium image and summary.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <a href="<?php the_permalink(); ?>" class="entry-link" title="<?php printf(esc_attr__('Permanent link to “%s”', 'onemozilla'), the_title_attribute('echo=0')); ?>" rel="bookmark">
    <?php if (has_post_thumbnail()) :
      the_post_thumbnail('post-large');
    else : ?>
      <img class="wp-post-image" width="600" height="330" src="<?php echo get_template_directory_uri(); ?>/img/fallback-large.png">
    <?php endif; ?>
      <h2 class="entry-title"><?php the_title(); ?></h2>
    </a>

    <div class="entry-info">
    <?php if ( get_option('onemozilla_hide_authors') != 1 ) : ?>
      <address class="vcard">
      <?php if (function_exists('coauthors_posts_links')) :
        coauthors_posts_links();
      else :
        the_author_posts_link();
      endif; ?>
      </address>
    <?php endif; ?>

      <time class="date" title="<?php the_time('Y-m-d\TH:i:sP'); ?>" datetime="<?php the_time('Y-m-d\TH:i:sP'); ?>"><?php the_date(); ?></time>
    </div>
  </header>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

</article>