<?php get_header(); ?>

  <main>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article class="school-container">

      <div class="school">
        <h1><?php the_title(); ?></h1>
      </div>

      <hr>

      <div class="school-content">
        <div class="school-box">
          <h2>保育理念</h2>
          <ul class="school-item">
            <li>ダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキスト</li>
          </ul>
        </div>
        <div class="school-box">
          <h2>園の特徴</h2>
          <ul class="school-item">
            <li>ダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキスト</li>
          </ul>
        </div>
      </div>
      
      <div class="line">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mizutama.png">
      </div>

      <div class="school-content2">
        <h2>給食について</h2>

        <div class="school-meal">
          <h3>◎給食のこと</h3>
          <p>栄養士による献立作成、自園調理</p>
          <p>季節の食材を取り入れたメニューを提供</p>
          <p>月に1回、特別食を提供</p>
          <p>エントランスに献立と給食を展示</p>
          <p>食育活動は定期的に行っています</p>
        </div>

        <div class="school-meal">
          <h3>◎離乳食のこと</h3>
          <p>各期に応じて、調乳・離乳食を提供</p>
          <p>保護者の方、保育士、栄養士が連携し、発達に応じて提供</p>
        </div>

        <div class="school-meal">
          <h3>◎アレルギー対応</h3>
          <p>除去食にて個別対応</p>
          <p>園長、保育士、栄養士で確認後に提供</p>
          <p>食器はアレルギー対応専用で色分け</p>
        </div>

        <!-- <div class="school-meal1">
          <img src="<?php echo get_template_directory_uri(); ?>/images/meal.jpg" alt="給食1">
        </div> -->

      </div>
    </article>

    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>

  </main>

<?php get_footer(); ?>