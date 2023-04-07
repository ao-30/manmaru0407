<?php get_header(); ?>

  <main>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <!-- 保育園での生活 -->
    <article class="nursery-guide-container">

      <div class="guide">
        <h1><?php the_title(); ?></h1>
      </div>

      <hr>

      <!-- 保育料についての箱 -->
      <div class="guide-content">
        
        <h2>保育料について</h2>

        <div class="guide-box">
        <dl>
          <dt>0歳児</dt><br>
          <dd>入園料&emsp;&emsp;0円</dd>
          <dd>保育料&emsp;&emsp;35,000円 / 月</dd>
        </dl>
        <dl>
          <dt>1.2歳児</dt><br>
          <dd>入園料&emsp;&emsp;0円</dd>
          <dd>保育料&emsp;&emsp;30,000円 / 月</dd>
        </dl>
        </div>

        <hr>

        <div class="guide-p">
          <p>生後57日（生後2か月）から3歳児までお預かりします</p>
          <p>給食費は保育料に含まれています</p>
        </div>

      </div>
    </article>

    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>

  </main>

<?php get_footer(); ?>