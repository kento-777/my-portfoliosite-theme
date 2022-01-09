<?php get_header(); ?>
   </div>
  </div>
</header>
<main>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
  <div class="active-img--pc">
   <?php if(has_post_thumbnail()) : ?><?php the_post_thumbnail(); ?><?php endif; ?>
  </div>
  <div class="works-active">
    <div class="active-item">
    <?php if(has_post_thumbnail()) : ?>
    <div class="active-img"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
      <div class="active-description">
        <h2 class="description-title"><?php the_title(); ?></h2>
        <p class="description-contents">
        <?php the_content(); ?>
        </p>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>