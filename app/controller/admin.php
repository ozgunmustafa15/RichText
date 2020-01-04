<?php
if (!route(1)){
    $route[1]='index';
}
if (!file_exists(admin_controller(route(1)))){
    $route[1]='index';
}
if (!session('user_rank')||session('user_rank')==3){
    $route[1]='login';
}

$menus=[
    'index' =>[
        'title' =>'Anasayfa',
        'icon'  =>'tachometer',
        'permissions'=>[
            'view'=>'Görüntüleme'
        ]
    ],
    'users' =>[
        'title' =>'Üyeler',
        'icon'  =>'user',
        'submenu'=>[
            'users'=>'Üye Listesi'
        ],
        'permissions'=>[
            'view'=>'Görüntüleme',
            'edit'=>'Düzenleme',
            'delete'=>'Silme'
        ]
    ],
    'menu' =>[
        'title' =>'Menü Yönetimi',
        'icon'  =>'bars',
        'permissions'=>[
            'view'=>'Görüntüleme',
            'add'=>'Ekleme',
            'edit'=>'Düzenleme',
            'delete'=>'Silme'
        ]
    ],
    'contact' =>[
        'title' =>'İletişim',
        'icon'  =>'envelope',
        'permissions'=>[
            'view'=>'Görüntüleme',
            'send'=>'Mesaj Gönderme',
            'edit'=>'Düzenleme',
            'delete'=>'Silme'
        ]
    ],
    'settings' =>[
        'title' =>'Ayarlar',
        'icon'  =>'cog',
        'permissions'=>[
            'view'=>'Görüntüleme',
            'edit'=>'Düzenleme'
        ]
    ],

];

require admin_controller(route(1));