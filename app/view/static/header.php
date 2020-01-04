<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $meta['title'] ?></title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/blog/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <?php if (isset($meta['description'])): ?>
        <meta name="description" content="<?= $meta['description'] ?>">
    <?php endif; ?>
    <?php if (isset($meta['keywords'])): ?>
        <meta name="keywords" content="<?= $meta['keywords'] ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?= public_url('blog.css') ?>" rel="stylesheet" >
    <script src="<?= public_url('js/api.js') ?>" ></script>
    <script>
        var api_url = '<?=site_url('api')?>';
    </script>

</head>

<body>
<div class="container">

    <header class="blog-header mx-0 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <!--
            <div class="col-4 ">

                <?php require view('static/signup') ?>
                <button type="button" class="btn btn-sm btn-light " data-toggle="modal" data-target="#exampleModalSign">
                    Sing Up
                </button>
                <button type="button" class="btn btn-sm btn-light " data-toggle="modal" data-target="#exampleModalLog">
                    Login
                </button>
                <?php require view('static/login') ?>

            </div>
            -->


            <div class="col-8">
                 <a class="blog-header-logo text-danger" style="color: #b52b65!important; font-size: 20px!important; " href="<?=site_url() ?>"><?= setting('logo') ?></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <?php if (session('user_id')):  ?>
                    <a href="<?=site_url('profil')?>" class="mr-2"><?= $_SESSION['user_name']?></a>
                    <a href="<?=site_url('logout')?>" class="btn btn-sm btn-light mr-2">Logout</a>
                <?php else: ?>
                <a href="<?=site_url('login')?>" class="btn btn-sm btn-light mr-2">Login</a>
                <a href="<?=site_url('signup')?>" class="btn btn-sm btn-light mr-2">Sign In</a>
                <?php endif;?>

                <button type="button" class="btn btn-sm btn-light " data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-search"></i>
                </button>
                <form class="form-inline mt-2 mt-md-0">
                    <!-- Modal -->
                    <div class="modal fade border-0 bd-example-modal-lg" style="background-color: #1d2e55"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content border-0 ">

                                <div class="modal-body" style="background-color: #1d2e55" >

                                    <div class="input-group input-group-lg p-0 m-0 ">

                                        <input type="text" name="aranan" style="font-size:13px;" class="form-control border-light bg-light"
                                               placeholder="<?=setting('search_input_placeholder')?>" aria-label="Recipient's username"
                                               aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <!--  -->
                                            <button type="submit" style="font-size:13px; background-color: black;border:6px solid black" class="btn btn-dark px-4" id="button-addon2">Ara</button>
                                        </div>
                                    </div>
                                    <br>
                                    <small class="text-muted"><?=setting('close_search_modal')?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <style>
        .dark-a{
            text-decoration: none!important;
            font-weight: normal;
            transition: font-weight .1s;

        }
        a:hover{
            color: #1d2e55!important;
            font-weight: bold;
            transition: font-weight .1s;


        }
        p{
            font-size: 14px;
        }
        small{
            font-size: 12px;
        }

        .bg{
            background-image: url("https://images.unsplash.com/photo-1519120944692-1a8d8cfc107f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=676&q=80");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .opa{
            background-color: rgba(255,255,255,.5);

        }



    </style>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <?php foreach (menu('header_menu')as $key => $menu):?>
                <a class="mx-2 text-muted dark-a" href="<?=$menu['url']?>"><?=$menu['title']?></a>
            <?php endforeach;?>

        </nav>
    </div>
