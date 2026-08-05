
            
            <?php
            //global $post;

            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations['footer-menu-1']);
            $menu_id = $menu->term_id;
            $menu_items = wp_get_nav_menu_items($menu_id);

            // Agrupamos los items por su padre
            $menu_items_by_parent = [];
            foreach ($menu_items as $item) {
                $menu_items_by_parent[$item->menu_item_parent][] = $item;
            }

            // Función para saber si un item o alguno de sus hijos está activo
            function is_menu_item_active4($item, $menu_items_by_parent, $post_id)
            {
                // Activo si la página actual es el objeto del menú
                if ((int)$item->object_id === (int)$post_id) {
                    return true;
                }

                // Activo si alguno de sus hijos está activo
                if (!empty($menu_items_by_parent[$item->ID])) {
                    foreach ($menu_items_by_parent[$item->ID] as $child) {
                        if (is_menu_item_active4($child, $menu_items_by_parent, $post_id)) {
                            return true;
                        }
                    }
                }
                return false;
            }

            // Función recursiva para imprimir el menú
            function render_menu_items4($parent_id, $menu_items_by_parent, $post_id)
            {
                if (empty($menu_items_by_parent[$parent_id])) {
                    return;
                }

                echo '<ul>';
                foreach ($menu_items_by_parent[$parent_id] as $item) {
                    $title = $item->title;
                    $url   = $item->url;
                    $has_children = !empty($menu_items_by_parent[$item->ID]);

                    // Determinamos si está activo
                    $is_active = is_menu_item_active4($item, $menu_items_by_parent, $post_id);
                    $active_class = $is_active ? ' active' : '';

                    // Si tiene hijos agregamos también una clase "has-children"
                    $li_class = $has_children ? 'has-children' : '';
                    if ($active_class) {
                        $li_class .= ' active';
                    }

                    echo '<li class="item ' . esc_attr(trim($li_class)) . '">';
                    echo '<a href="' . esc_url($url) . '" class="main_link' . $active_class . '">';
                    echo esc_html($title);

                    if ($has_children) {
                        //echo ' <i class="fa-solid fa-chevron-down"></i>';
                    }

                    echo '</a>';

                    // Renderizamos hijos si los tiene
                    if ($has_children) {
                        render_menu_items4($item->ID, $menu_items_by_parent, $post_id);
                    }

                    echo '</li>';
                }
                echo '</ul>';
            }
            ?>

            <?php render_menu_items4(0, $menu_items_by_parent, $post->ID); ?>

       