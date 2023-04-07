<?php get_header(); ?>

  <main>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article class="single-container">

      <div class="single">
        <time><?php echo get_the_date(); ?></time>&emsp;&emsp;<span class="category-name"><?php echo get_the_category()[0]->name; ?></span>
        <h1><?php the_title(); ?></h1>
      </div>
      <hr>
      <div class="single-content">
        <?php the_content(); ?>
      </div>

    </article>
    
    <div class="content-btn">
      <a href="<?php echo esc_url(home_url('/news')); ?>">一覧へ戻る</a>
    </div>

    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>
    <div class="pagination">
            <div class="prev-sec"><?php previous_post_link(); ?></div>
            <div class="next-sec"><?php next_post_link(); ?></div>
    </div>
  
  </main>

<?php get_footer(); ?>