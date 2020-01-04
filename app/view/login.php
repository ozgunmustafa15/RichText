<?php require view('static/header')?>
<div class="">
    <div class="row bg" style="min-height: 700px">
        <div class="col-md-7 flex-auto d-none d-lg-block">

        </div>
        <div class="col-md-5 " >
            <form class="form-login" method="post">
                <div class="card shadow border-0  opa mt-3">
                    <div class="card-body mt-4">
                        <h3 class="">Giriş Yap</h3><br>
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
                            <input type="text" name="user_name" id="inputEmail" class="form-control" placeholder=" " required autocomplete="off">
                        </div>

                        <div class="form-label-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="user_password" id="inputPassword" class="form-control" placeholder="" required>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <input type="hidden" name="submit" value="1">
                        <button class="btn btn-primary btn-block mt-2" type="submit">Login</button>
                        <div class="text-center mt-3">
                            <i>For create an account</i> <a class="dark-a" href="<?=site_url('signup')?>">Register</a>
                        </div>
                    </div>

                </div>

            </form>
        </div>

    </div>

</div>
<?php require view('static/footer')?>


