<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
 *
 */

/* Template variables */
$template = array(
    'name'              => 'AppUI',
    'version'           => '2.4',
    'author'            => 'pixelcave',
    'robots'            => 'noindex, nofollow',
    'title'             => 'AppUI - Web App Bootstrap Admin Template',
    'description'       => 'AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest',
    // true                         enable page preloader
    // false                        disable page preloader
    'page_preloader'    => true,
    // 'navbar-default'             for a light header
    // 'navbar-inverse'             for a dark header
    'header_navbar'     => 'navbar-inverse',
    // ''                           empty for a static header/main sidebar
    // 'navbar-fixed-top'           for a top fixed header/sidebars
    // 'navbar-fixed-bottom'        for a bottom fixed header/sidebars
    'header'            => 'navbar-fixed-top',
    // ''                           empty for the default full width layout
    // 'fixed-width'                for a fixed width layout (can only be used with a static header/main sidebar)
    'layout'            => '',
    // 'sidebar-visible-lg-mini'    main sidebar condensed - Mini Navigation (> 991px)
    // 'sidebar-visible-lg-full'    main sidebar full - Full Navigation (> 991px)
    // 'sidebar-alt-visible-lg'     alternative sidebar visible by default (> 991px) (You can add it along with another class - leaving a space between)
    // 'sidebar-light'              for a light main sidebar (You can add it along with another class - leaving a space between)
    'sidebar'           => 'sidebar-visible-lg-full',
    // ''                           Disable cookies (best for setting an active color theme from the next variable)
    // 'enable-cookies'             Enables cookies for remembering active color theme when changed from the sidebar links (the next color theme variable will be ignored)
    'cookies'           => '',
    // '', 'classy', 'social', 'flat', 'amethyst', 'creme', 'passion'
    'theme'             => '',
    // Used as the text for the header link - You can set a value in each page if you like to enable it in the header
    'header_link'       => '',
    // The name of the files in the inc/ folder to be included in page_head.php - Can be changed per page if you
    // would like to have a different file included (eg a different alternative sidebar)
    'inc_sidebar'       => 'page_sidebar',
    'inc_sidebar_alt'   => 'page_sidebar_alt',
    'inc_header'        => 'page_header',
    // The following variable is used for setting the active link in the sidebar menu
    'active_page'       => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array, up to 3 levels deep) */
$primary_nav = array(
    array(
        'name'  => 'Dashboard',
        'url'   => 'index.php',
        'icon'  => 'gi gi-compass'
    ),
    array(
        'url'   => 'separator',
    ),
    array(
        'name'  => 'User Interface',
        'icon'  => 'fa fa-rocket',
        'sub'   => array(
            array(
                'name'  => 'Widgets',
                'url'   => 'page_ui_widgets.php',
            ),
            array(
                'name'  => 'Elements',
                'sub'   => array(
                    array(
                        'name'  => 'Blocks &amp; Grid',
                        'url'   => 'page_ui_blocks_grid.php'
                    ),
                    array(
                        'name'  => 'Typography',
                        'url'   => 'page_ui_typography.php'
                    ),
                    array(
                        'name'  => 'Buttons &amp; Dropdowns',
                        'url'   => 'page_ui_buttons_dropdowns.php'
                    ),
                    array(
                        'name'  => 'Navigation &amp; More',
                        'url'   => 'page_ui_navigation_more.php'
                    ),
                    array(
                        'name'  => 'Progress &amp; Loading',
                        'url'   => 'page_ui_progress_loading.php'
                    ),
                    array(
                        'name'  => 'Tables',
                        'url'   => 'page_ui_tables.php'
                    )
                )
            ),
            array(
                'name'  => 'Forms',
                'sub'   => array(
                    array(
                        'name'  => 'Components',
                        'url'   => 'page_forms_components.php'
                    ),
                    array(
                        'name'  => 'Wizard',
                        'url'   => 'page_forms_wizard.php'
                    ),
                    array(
                        'name'  => 'Validation',
                        'url'   => 'page_forms_validation.php'
                    )
                )
            ),
            array(
                'name'  => 'Icon Packs',
                'sub'   => array(
                    array(
                        'name'  => 'Font Awesome',
                        'url'   => 'page_ui_icons_fontawesome.php'
                    ),
                    array(
                        'name'  => 'Glyphicons Pro',
                        'url'   => 'page_ui_icons_glyphicons_pro.php'
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'Components',
        'icon'  => 'gi gi-airplane',
        'sub'   => array(
            array(
                'name'  => 'To-do List',
                'url'   => 'page_comp_todo.php',
            ),
            array(
                'name'  => 'Gallery',
                'url'   => 'page_comp_gallery.php',
            ),
            array(
                'name'  => 'Google Maps',
                'url'   => 'page_comp_maps.php',
            ),
            array(
                'name'  => 'Calendar',
                'url'   => 'page_comp_calendar.php',
            ),
            array(
                'name'  => 'Charts',
                'url'   => 'page_comp_charts.php',
            ),
            array(
                'name'  => 'CSS3 Animations',
                'url'   => 'page_comp_animations.php',
            ),
            array(
                'name'  => 'Tree View Lists',
                'url'   => 'page_comp_tree.php',
            ),
            array(
                'name'  => 'Nestable &amp; Sortable Lists',
                'url'   => 'page_comp_nestable.php',
            )
        )
    ),
    array(
        'name'  => 'UI Layouts',
        'icon'  => 'gi gi-more_items',
        'sub'   => array(
            array(
                'name'  => 'Static',
                'url'   => 'page_layout_static.php'
            ),
            array(
                'name'  => 'Static Fixed Width',
                'url'   => 'page_layout_static_fixed_width.php'
            ),
            array(
                'name'  => 'Top Header (Fixed)',
                'url'   => 'page_layout_fixed_top.php'
            ),
            array(
                'name'  => 'Bottom Header (Fixed)',
                'url'   => 'page_layout_fixed_bottom.php'
            ),
            array(
                'name'  => 'Sidebar Mini (Static)',
                'url'   => 'page_layout_static_sidebar_mini.php'
            ),
            array(
                'name'  => 'Sidebar Mini (Fixed)',
                'url'   => 'page_layout_fixed_sidebar_mini.php'
            ),
            array(
                'name'  => 'Visible Alternative Sidebar',
                'url'   => 'page_layout_alternative_sidebar_visible.php'
            )
        )
    ),
    array(
        'name'  => 'Extra Pages',
        'icon'  => 'fa fa-gift',
        'sub'   => array(
            array(
                'name'  => 'Base',
                'sub'   => array(
                    array(
                        'name'  => 'Blank',
                        'url'   => 'page_ready_blank.php'
                    ),
                    array(
                        'name'  => 'Error',
                        'url'   => 'page_ready_error.php'
                    ),
                    array(
                        'name'  => 'Search Results (5)',
                        'url'   => 'page_ready_search_results.php'
                    ),
                    array(
                        'name'  => 'FAQ',
                        'url'   => 'page_ready_faq.php'
                    ),
                    array(
                        'name'  => 'Invoice',
                        'url'   => 'page_ready_invoice.php'
                    )
                )
            ),
            array(
                'name'  => 'Web Application',
                'sub'   => array(
                    array(
                        'name'  => 'User Profile',
                        'url'   => 'page_ready_profile.php'
                    ),
                    array(
                        'name'  => 'Forum (3)',
                        'url'   => 'page_ready_forum.php'
                    ),
                    array(
                        'name'  => 'Pricing Tables',
                        'url'   => 'page_ready_pricing_tables.php'
                    ),
                    array(
                        'name'  => 'Article',
                        'url'   => 'page_ready_article.php'
                    ),
                    array(
                        'name'  => 'Timeline',
                        'url'   => 'page_ready_timeline.php'
                    ),
                    array(
                        'name'  => 'Contacts',
                        'url'   => 'page_ready_contacts.php'
                    ),
                    array(
                        'name'  => 'Tickets',
                        'url'   => 'page_ready_tickets.php'
                    )
                )
            ),
            array(
                'name'  => 'Login, Register &amp; Lock',
                'sub'   => array(
                    array(
                        'name'  => 'Login',
                        'url'   => 'page_ready_login.php'
                    ),
                    array(
                        'name'  => 'Login 2',
                        'url'   => 'page_ready_login2.php'
                    ),
                    array(
                        'name'  => 'Password Reminder',
                        'url'   => 'page_ready_reminder.php'
                    ),
                    array(
                        'name'  => 'Register',
                        'url'   => 'page_ready_register.php'
                    ),
                    array(
                        'name'  => 'Lock Screen',
                        'url'   => 'page_ready_lock_screen.php'
                    )
                )
            )
        )
    ),
    array(
        'url'   => 'separator',
    ),
    array(
        'name'  => 'Email Center',
        'icon'  => 'gi gi-inbox',
        'url'   => 'page_app_email.php'
    ),
    array(
        'name'  => 'Social Net',
        'icon'  => 'fa fa-share-alt',
        'url'   => 'page_app_social.php'
    ),
    array(
        'name'  => 'Media Box',
        'icon'  => 'gi gi-picture',
        'url'   => 'page_app_media.php'
    ),
    array(
        'name'  => 'eStore',
        'icon'  => 'gi gi-shopping_cart',
        'url'   => 'page_app_estore.php'
    )
);