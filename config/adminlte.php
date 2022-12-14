<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Ini Lho ITS! 2022',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Ini Lho ITS! 2022</b>',
    'logo_img' => 'ilits22.ico',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'ILITS 22',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Sidebar items:
        [
            'text'  => 'Dashboard Admin',
            'url'   => 'admin/',
            'can'   => ['admin-dashboard']
        ],
        [
            'text'    => 'Tools',
            'icon'    => 'fas fa-pencil-ruler',
            'submenu' => [
                [
                    'text' => 'Shorten Link',
                    'url'  => 'admin/shortener/',
                    'active' => ['admin/shortener/', 'regex:@^admin/shortener/update/[0-9]@', 'regex:@^admin/shortener/delete/[0-9]@']
                ],
            ],
            'can' => ['admin-dashboard'],
        ],
        [
            'text'    => 'Main Events',
            'icon'    => 'fas fa-calendar-alt',
            'submenu' => [
                [
                    'text' => 'Welcome Per Forda',
                    'url'  => 'admin/main-event/welcome',
                    'active' => ['admin/main-event/welcome', 'regex:@^admin/main-event/welcome/[0-9]@']
                ],
                [
                    'text' => 'Semua Peserta Welcome',
                    'url'  => 'admin/main-event/welcome/all',
                    'active' => ['admin/main-event/welcome/all']
                ],
                [
                    'text' => 'Peserta ITS Fair',
                    'url'  => 'admin/main-event/its-fair',
                    'active' => ['admin/main-event/its-fair']
                ],
                [
                    'text' => 'Peserta FnD',
                    'url'  => 'admin/main-event/fnd',
                    'active' => ['admin/main-event/fnd']
                ],
                [
                    'text' => 'Peserta ODL',
                    'url'  => 'admin/main-event/odl',
                    'active' => ['admin/main-event/odl']
                ],
            ],
            'can' => ['admin-dashboard'],
        ],
        [
            'text'      => 'Welcome',
            'icon'      => 'fas fa-pencil-ruler',
            'submenu'   => [
                [
                    'text'  => 'Dashboard Welcome',
                    'icon'  => 'fas fa-tachometer-alt',
                    'url'   => 'peserta/welcome/',
                    'can'   => ['peserta-tryout']
                ],
                // [
                //     'text'  => 'Absensi',
                //     'icon'  => 'fas fa-pager',
                //     'url'   => 'peserta/welcome/absensi/',
                //     'can'   => ['peserta-tryout']
                // ],
                [
                    'text'  => 'Upload Bukti Bayar',
                    'icon'  => 'fas fa-money-check-alt',
                    'url'   => 'peserta/welcome/upload',
                    'can'   => ['peserta-tryout']
                ],
                [
                    'text'  => 'Tanya Jawab',
                    'icon'  => 'fas fa-question',
                    'url'   => 'peserta/welcome/tanya-jawab',
                    'can'   => ['peserta-tryout', 'admin-dashboard']
                ],
                [
                    'text'  => 'Video Pembahasan',
                    'icon'  => 'fab fa-youtube',
                    'url'   => 'peserta/welcome/pembahasan',
                    'can'   => ['peserta-tryout']
                ],
                [
                    'text'  => 'Daftar Welcome',
                    'icon'  => 'fas fa-edit',
                    'url'   => 'peserta/welcome/daftar',
                    'can'   => ['bukan-peserta-tryout']
                ],
                [
                    'text'  => 'Dashboard Welcome',
                    'icon'  => 'fas fa-tachometer-alt',
                    'url'   => 'forda',
                    'can'   => ['forda-dashboard']
                ],
                [
                    'text'  => 'Absensi Peserta',
                    'icon'  => 'fas fa-pager',
                    'url'   => 'forda/absensi',
                    'can'   => ['forda-dashboard']
                ],
                [
                    'text'  => 'Contact Person',
                    'icon'  => 'fas fa-user',
                    'url'   => 'forda/edit-pj',
                    'can'   => ['forda-dashboard']
                ],
                [
                    'text'  => 'Edit Biaya',
                    'icon'  => 'fas fa-edit',
                    'url'   => 'forda/edit-biaya',
                    'can'   => ['forda-dashboard']
                ],
                [
                    'text'  => 'Edit Link Meet',
                    'icon'  => 'fas fa-video',
                    'url'   => 'forda/link-meet',
                    'can'   => ['forda-dashboard']
                ],
                [
                    'text'  => 'Edit Grup Koordinasi',
                    'icon'  => 'fas fa-user-friends',
                    'url'   => 'forda/edit-grup',
                    'can'   => ['forda-dashboard']
                ],
                [
                    'text'  => 'Edit Waktu Pelaksanaan',
                    'icon'  => 'fas fa-clock',
                    'url'   => 'forda/edit-sesi',
                    'can'   => ['forda-dashboard']
                ],
                [
                    'text'  => 'Verifikasi Biaya',
                    'icon'  => 'fas fa-money-check-alt',
                    'url'   => 'forda/verif-bayar',
                    'can'   => ['forda-dashboard']
                ],
            ],
            'can' => ['peserta-dashboard', 'forda-dashboard'],
        ],
        [
            'text'      => 'Open Campus',
            'icon'      => 'fas fa-building',
            'submenu'   => [
                [
                    'text'  => 'Dashboard FND',
                    'icon'  => 'far fa-eye',
                    'url'   => 'peserta/fnd',
                    'can'   => ['peserta-fnd']
                ],
                [
                    'text'  => 'Dashboard ODL',
                    'icon'  => 'fas fa-graduation-cap',
                    'url'   => 'peserta/odl',
                    'can'   => ['peserta-odl']
                ],
                [
                    'text'  => 'Dashboard ITS Fair',
                    'icon'  => 'fas fa-chalkboard',
                    'url'   => 'peserta/its-fair',
                    'can'   => ['peserta-its-fair']
                ],
            ],
            'can' => ['peserta-odl', 'peserta-fnd', 'peserta-its-fair']
        ]

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/responsive/js/dataTables.responsive.min.js'
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/responsive/js/responsive.bootstrap4.min.js'
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/dataTables.buttons.min.js'
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.bootstrap4.min.js'
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.colVis.min.js'
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.html5.min.js'
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/js/buttons.print.min.js'
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/jszip/jszip.min.js'
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/pdfmake.min.js'
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/pdfmake/vfs_fonts.js'
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables/css/dataTables.bootstrap4.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/responsive/css/responsive.bootstrap4.min.css'
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/datatables-plugins/buttons/css/buttons.bootstrap4.min.css'
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
