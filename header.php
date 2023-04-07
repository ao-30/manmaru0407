<!DOCTYPE html>
<html>
  
  <!-- 見えないところ始まり -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <!-- 見えないところ終わり -->

  <!-- 見えるところ始まり -->
  <body>

    <!-- ヘッダー始まり -->
    <header>
      <div class="header-container">

        <h1><a href="<?php echo esc_url(home_url()); ?>">まんまる保育園</a></h1>

        <nav>
          <!-- モバイル用ナビゲーション始まり -->
          <div class="navbtn">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- モバイル用ナビゲーション終わり -->

          <!-- ヘッダー項目 -->
          <div class="nav-menu">
          <?php $args =array(
                    'theme_location' => 'header_nav',
                    'container' => 'nav',
                );
                wp_nav_menu($args);
                ?>
          </div>
          <!-- ヘッダー項目 -->
        </nav>
      
      </div>
    </header>
    <!-- ヘッダー終わり -->