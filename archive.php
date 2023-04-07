<?php get_header(); ?>

  <main>
  <div class="archive-container">

    <div class="archive-title">
        <h1><?php single_cat_title(); ?></h1>
    </div>

    <hr>

    <div class="archive">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article>
      <div class="archive-content">
        <time><?php echo get_the_date(); ?></time><br>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>
    </article>

    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>

  </div>
  <?php the_posts_pagination(); ?>
  </main>

<?php get_footer(); ?>