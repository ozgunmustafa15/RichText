<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8">
    <title>Admin | Anasayfa</title>
    <!--styles-->
    <link rel="stylesheet" href="<?=admin_public_url('styles/main.css') ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--scripts-->
    <script src="<?=admin_public_url('scripts/jquery-1.12.2.min.js')?>"></script>

    <!--<script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script> -->
    <script src="<?=admin_public_url('scripts/admin.js')?>"></script>
    <script src="<?=admin_public_url('scripts/api.js')?>"></script>
    <script>
        var api_url='<?=admin_url('api') ?>';
    </script>
</head>
<body style="background-color: #e9eaeb">
<!--navbar-->
<?php if(session('user_rank')&& session('user_rak')!=3): ?>


<div class="navbar">
    <ul dropdown>
        <li>
            <a href="#">
                <span class="fa fa-home"></span>
                <span class="title">
                    <?= setting('title') ?>
                </span>
            </a>
        </li>
        <li>
            <a href="<?=admin_url('logout') ?>">Çıkış yap

            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-comment"></span>
                1
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-plus"></span>
                <span class="title">New</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        New Post
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Page
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Category
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-->
<div class="sidebar">
    <ul>
        <?php foreach ($menus as $mainUrl=>$menu):?>
        <?php if (permission($mainUrl,'view')):?>
        <li class="<?=route(1)==$mainUrl||isset($menu['submenu'][route(1)])?'active':''?>">
            <a href="<?=admin_url($mainUrl)?>">
                <span class="fa fa-<?= $menu['icon'] ?>"></span>
                <span class="title">
                    <?= $menu['title'] ?>
                </span>
            </a>
            <?php if (isset($menu['submenu'])):?>

            <ul class="sub-menu">
                <?php foreach ($menu['submenu'] as $url=>$title):?>
                <li>
                    <a href="<?=admin_url($url)?>">
                        <?= $title ?>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>
            <?php endif;?>

        </li>
        <?php endif;?>
        <?php endforeach;?>

    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Collapse menu
        </span>
    </a>
</div>
<div class="content">

    <?php if(isset($error)):?>
    <div class="message error box-">
        <?=$error?>
    </div>
    <?php endif;?>
<!--content-->

<?php endif;?>