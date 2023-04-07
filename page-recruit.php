<?php get_header(); ?>

  <main>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article class="recruit-container">

      <div class="recruit">
        <time><?php echo get_the_date(); ?></time><span class="new"><?php echo '更新' ?></span>
        <h1><?php the_title(); ?></h1>
      </div>
      <hr>
      <div class="recruit-content">
        <?php the_content(); ?>
          <dl>
            <dt><p>募集職種</p></dt>
            <dd><p>保育士</P></dd>
            <dt><p>雇用形態</p></dt>
            <dd><p>正規職員</P></dd>
            <dt><p>必要資格</p></dt>
            <dd><p>保育士資格</P></dd>
            <dt><p>給与及び手当</p></dt>
            <dd><p>月給240,000円～<br>
              賞与年2回（6月・12月）<br>
              昇給あり<br>
              処遇改善手当、時間外手当、通勤手当（全額支給）、住居手当、扶養手当等あり</P></dd>
            <dt><p>休日</p></dt>
            <dd><p>日曜日・祝日（完全週休2日制）<br>
              夏季休暇・年末年始休暇・有給休暇・その他</P></dd>
          </dl>
      </div>

    </article>

    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>

  </main>

<?php get_footer(); ?>