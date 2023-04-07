<?php get_header(); ?>

    <!-- メインの写真 -->
    <div class="main-visual-container">
      <div class="main-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top.jpg" alt="メイン写真">
      </div>
    </div>
    <!-- メインの写真 -->

    <!-- メイン始まり -->
    <main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
      <!-- お知らせとブログ -->
      <div class="news-blog-container">

        <!-- お知らせの箱 -->
        <div class="news-container">

          <h2>お知らせ</h2>
          <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'news',
                    'posts_per_page' => 2,
                    );
                    $new_query = new WP_Query($args);

          if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post();
                    ?>

          <!-- 記事 -->
          <ul class="news-content">
            <li><time><?php echo get_the_date(); ?></time><br>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          </ul>
          
          <?php endwhile; wp_reset_postdata(); else: ?>
          <?php endif; ?>
          
          <!-- 一覧へ行くボタンのこと -->
          <div class="content-btn">
            <a href="<?php echo esc_url(home_url('/news/')); ?>">＝〉一覧を見る</a>
          </div>

        </div>
        <!-- お知らせの箱終わり -->

        <!-- ブログの箱 -->
        <div class="blog-container">

          <h2>園の様子</h2>
          <?php
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'blog',
                    'posts_per_page' => 2,
                    );
                    $new_query = new WP_Query($args);

          if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post();
                    ?>

          <!-- 記事 -->
          <ul class="blog-content">
            <li><time><?php echo get_the_date(); ?></time><br>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          </ul>
          
          <?php endwhile; wp_reset_postdata(); else: ?>
          <?php endif; ?>

          <!-- 一覧へ行くボタンのこと -->
          <div class="content-btn">
            <a href="<?php echo esc_url(home_url('/blog/')); ?>">＝〉一覧を見る</a>
          </div>

        </div>
        <!-- ブログの箱終わり -->

      </div>
      <!-- お知らせとブログ終わり -->

      <div class="line">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sozai2.png">
      </div>

      <!-- こんな保育園です -->
      <div class="about-container">

        <h2>こんな保育園です！</h2>

        <!-- 写真と文字が入っている大きい箱 -->
        <div class="about-box">

          <!-- 写真と文字の箱 -->
          <div class="about-item">
          <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/smile5.jpg" alt="保育園1">
            <p>保育園での生活を通して、子どもたちの笑顔を大切にしています。</p>
          </div>
          <div class="about-item">
            <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/shokuji3.jpg" alt="保育園2">
            <p>自園調理の給食、おやつを提供しています。食育活動も実施しています。</p>
          </div>
          <div class="about-item">
            <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/free2.jpg" alt="保育園3">
            <p>子どもたちの個性や成長を大切にして、保育を行っています。</p>
          </div>
          <!-- 写真と文字の箱終わり -->

        </div>
        <!-- 写真と文字が入っている大きい箱終わり -->

        <!-- 詳しく見るボタンのこと -->
        <div class="content-btn">
          <a href="<?php echo esc_url(home_url('/nursery-school')); ?>">＝〉詳しく見る</a>
        </div>

      </div>
      <!-- こんな保育園です終わり -->

      <div class="line">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sozai3.png">
      </div>

      <!-- 保育園での生活 -->
      <div class="life-container">

        <h2>保育園での生活</h2>

        <!-- 写真と文字が入る大きい箱 -->
        <div class="life-box">

          <!-- 写真と文字の箱 -->
          <div class="life-item">
            <img class="life-img" src="<?php echo get_template_directory_uri(); ?>/images/walk.jpg" alt="生活1">
            <p>お散歩</p>
          </div>
          <div class="life-item">
            <img class="life-img" src="<?php echo get_template_directory_uri(); ?>/images/summer2.jpg" alt="生活2">
            <p>プール（水遊び）</p>
          </div>
          <div class="life-item">
            <img class="life-img" src="<?php echo get_template_directory_uri(); ?>/images/autumn.jpg" alt="生活3">
            <p>秋の遠足</p>
          </div>
          <div class="life-item">
            <img class="life-img" src="<?php echo get_template_directory_uri(); ?>/images/christmas.jpg" alt="生活4">
            <p>クリスマス会</p>
          </div>
          <!-- 写真と文字の箱終わり -->
          
        </div>
        <!-- 写真と文字が入る大きい箱終わり -->

        <!-- 詳しく見るボタンのこと -->
        <div class="content-btn">
          <a href="<?php echo esc_url(home_url('/nursery-life')); ?>">＝〉詳しく見る</a>
        </div>

      </div>
      <!-- 保育園での生活終わり -->

    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>

    </main>
    <!-- メイン終わり -->

<?php get_footer(); ?>