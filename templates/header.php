<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav class="collapse navbar-collapse pull-right" role="navigation">
      <?php
      if (is_front_page()) {
        if (has_nav_menu('frontpage_navigation')) {
          wp_nav_menu(['theme_location' => 'frontpage_navigation', 'menu_class' => 'nav navbar-nav navbar-rigth', 'items_wrap' => '<ul id="%1$s" class="%2$s" data-toggle="collapse" data-target=".navbar-collapse">%3$s</ul>']);
      }
    } else {
        if (has_nav_menu('otherpage_navigation')) {
          wp_nav_menu(['theme_location' => 'otherpage_navigation', 'menu_class' => 'nav navbar-nav navbar-rigth', 'items_wrap' => '<ul id="%1$s" class="%2$s" data-toggle="collapse" data-target=".navbar-collapse">%3$s</ul>']);
      }
    }
      ?>
    </nav>
  </div>
</header>
