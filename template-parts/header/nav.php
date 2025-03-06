<?php
    /**
     * Header Navigation Template
     *
     * @package shimu
     */

    $menu_class      = SHIMU_THEME\Inc\Menus::get_instance();
    $hearder_menu_id = $menu_class->get_menu_id('shimu-header-menu');

    $hearder_menus = wp_get_nav_menu_items($hearder_menu_id);
    // echo '<pre>';
    // print_r($hearder_menus);
    // wp_die();
?>


  <?php
      if (function_exists('the_custom_logo')) {
          the_custom_logo();
      }
      // var_dump(the_custom_logo());
  ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <?php
        if (! empty($hearder_menus) && is_array($hearder_menus)) {
            //   echo '<pre>';
            //     var_dump($hearder_menus);
            //     wp_die();
        ?>
    <ul class="navbar-nav">

    <?php
        foreach ($hearder_menus as $menu_item) {
                if (! $menu_item->menu_item_parent) {
                    $child_menu_items = $menu_class->get_child_menu_items($hearder_menus, $menu_item->ID);
                    $has_children     = ! empty($child_menu_items) && is_array($child_menu_items);
                if (! $has_children) {?>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>"><?php echo esc_html($menu_item->title); ?></a>
                      </li>
                      <?php } else {?>
                        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo esc_html($menu_item->title); ?>
          </a>
          <ul class="dropdown-menu">
          <?php foreach ($child_menu_items as $child_menu_item) {?>
            <li><a class="dropdown-item" href="<?php echo esc_url($child_menu_item->url); ?>"><?php echo esc_html($child_menu_item->title); ?></a></li>
            <li><hr class="dropdown-divider"></li>


                            <?php }?>
          </ul>
        </li>
                        <?php }?>


<?php
    }
        }
    ?>
    </ul>
      <?php
          }
      ?>
  </div>
</nav>