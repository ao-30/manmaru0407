<?php get_header(); ?>

  <main>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <!-- 保育園での生活 -->
    <article class="nursery-life-container">

      <div class="life">
        <h1><?php the_title(); ?></h1>
      </div>

      <hr>

      <!-- 年間行事、園の１日、食事についての箱 -->
      <div class="life-content">
        
        <h2>年間行事</h2>

        <!-- 春夏秋冬の箱 -->
        <div class="season-container">

          <!-- 春のこと -->
          <div class="season-content1">
            <div class="season1">
              <p>春</p>
            </div>
            <ul>
              <li>入園式・進級おめでとう会</li>
              <li>こどもの日</li>
            </ul>
          </div>

          <!-- 夏のこと -->
          <div class="season-content2">
            <div class="season2">
              <p>夏</p>
            </div>
            <ul>
              <li>プール（水遊び）</li>
              <li>七夕</li>
              <li>夏まつり</li>
            </ul>
          </div>

          <!-- 秋のこと -->
          <div class="season-content3">
            <div class="season3">
              <p>秋</p>
            </div>
            <ul>
              <li>秋の遠足</li>
              <li>保育参加・発表会</li>
            </ul>
          </div>

          <!-- 冬のこと -->
          <div class="season-content4">
            <div class="season4">
              <p>冬</p>
            </div>
            <ul>
              <li>クリスマス会</li>
              <li>節分</li>
              <li>お別れ会</li>
            </ul>
          </div>
        </div>
        <!-- 春夏秋冬の箱のこと終わり -->

        <div class="line">
          <img src="<?php echo get_template_directory_uri(); ?>/images/maru2.png">
        </div>

        <h2>園の１日</h2>

        <!-- 園の１日のこと -->
        <p class="center">順次登園</p>
        
        <div class="day-container">
          <dl>
            <dt>8:30</dt>
            <dd>自由遊び</dd>
            <dt>9:00</dt>
            <dd>午前のおやつ</dd>
            <dt>9:30</dt>
            <dd>主活動</dd>
            <dt>11:00</dt>
            <dd>お昼ご飯</dd>
            <dt>12:00</dt>
            <dd>午睡</dd>
            <dt>14:30</dt>
            <dd>着替えなど</dd>
            <dt>15:00</dt>
            <dd>午後のおやつ</dd>
          </dl>
        </div>

        <p class="center">順次お迎え

    </article>

    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>

  </main>

<?php get_footer(); ?>