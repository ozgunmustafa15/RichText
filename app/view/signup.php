<?php require view('static/header')?>
<style>

</style>
<div class="">
    <div class="row bg" style="height: 700px">
        <div class="col-lg-7 flex-auto d-none d-lg-block">

        </div>
        <div class="col-lg-5 " >
                <form class="form-signin" action="" method="post">
                    <div class="card shadow border-0  opa mt-3 shadow">
                        <div class="card-body mt-4">

                            <h3 class="">Kayıt Ol</h3><br>
                            <?php if ($success=success()):?>

                            <div class="alert alert-success" role="alert">
                                <?=$success?>
                            </div>
                            <?php endif;?>

                            <?php if ($err=error()):?>
                            <div class="alert alert-danger" role="alert">
                                <?=$err?>
                            </div>
                            <?php endif;?>
                            <div class="form-label-group">
                                <label for="inputEmail">Kullanıcı Adı</label>
                                <input type="text" id="inputEmail" value="<?=post('user_name') ?>" name="user_name" class="form-control" placeholder="" >
                            </div>
                            <div class="form-label-group">
                                <label for="inputEmail">Email address</label>
                                <input type="email" id="inputEmail" value="<?=post('user_mail') ?>" name="user_mail" class="form-control" placeholder="" >
                            </div>

                            <div class="form-label-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" id="inputPassword" name="user_password" class="form-control" placeholder="" >
                            </div>
                            <div class="form-label-group">
                                <label for="inputPassword">Password Again</label>
                                <input type="password" id="inputPassword" name="user_password_correct" class="form-control" placeholder="" >
                            </div>

                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <input type="hidden" name="submit" value="1">
                            <button class="btn btn-primary btn-block" type="submit">Register</button>
                            <div class="text-center mt-3">
                                <i>Have you an account?</i> <a class="dark-a" href="<?=site_url('login')?>">Login</a>
                            </div>
                        </div>
                    </div>

                </form>
        </div>

    </div>


    <?php require view('static/footer')?>


