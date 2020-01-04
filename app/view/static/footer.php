<?php ?>

<style>
    .dark-a{
        text-decoration: none!important;
    }
    .dark-a:hover{
        color: #1f1a1d!important;
    }
    .footer{
        height: 100px;
        padding-left: 30px;
        padding-right: 30px;

    }
    .btn-light{
        background-color: white!important;
    }

    h5,h4,h3,h2,h1{
        color: #1d2e55;
    }
    .btn-danger{
        color: white;
        background-color: #d41868;
    }
    .btn-primary{
        color: white;
        background-color: #1d2e55;
        border: 2px solid #1d2e55 ;
    }
    .btn-primary:hover{
        color: white;
        border: 2px solid #274476 ;
        background-color: #274476;
    }
    .text-primary{
        color : #1d2e55!important;
    }
    .text-success{
        color: #11EF45!important;
    }
    .text-danger{
        color: #FF0545!important;
    }
    a{
        text-decoration: none;
    }
    .border-left{
        border-left:4px solid #FF0545!important;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 8px;
        padding-bottom: 8px;
        border-radius: 3px;

    }
    .shadow{
        box-shadow: 0px 2px 5px #dfdfe2;
    }

</style>
<footer class="blog-footer border-0 " style="z-index: 999;margin-left: -15px">
    <div class="container">
        <div class="row text-left">
            <div class="col-6 col-lg mb-3 footer">
              <h4 style="margin-left: -2px"><?=setting('logo')?></h4>
            </div>
            <div class="col-6 col-lg mb-3 footer">
                <h5 style="margin-left: -2px">Kategoriler</h5>
                <div>
                    Kategori
                </div>

            </div>
            <div class="col-6 col-lg footer">
                <h5 style="margin-left: -2px">Menus</h5>
                <div>
                    <ol class="list-unstyled">
                        <?php foreach (menu('footer_menu')as $key => $menu):?>
                            <li><a class="text-muted dark-a" href="<?=$menu['url']?>"><?=$menu['title']?></a></li>
                        <?php endforeach;?>

                    </ol>
                </div>
            </div>
            <div class="col-6 col-lg footer">
                <h5 style="margin-left: -2px">Bağlantılar</h5>
                <?php if ($facebook =setting('facebook_link')):?>
                <div class="row">
                    <div class="col-2 pr-0">
                        <i class="fab fa-facebook"></i>
                    </div>
                    <div class="col-10 pl-0">
                        <a   class="dark-a" href="https://www.facebook.com/<?=setting('facebook_link')?>" style="text-decoration: none;color:#999999"> Facebook</a>
                    </div>
                </div>
                <?php endif;?>

                <?php if ($linkedin =setting('linkedin_link')):?>
                <div class="row">
                    <div class="col-2 pr-0">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="col-10 pl-0">
                        <a class="dark-a" href="https://www.linkedin.com/in/<?=setting('linkedin_link')?>" style="text-decoration: none;color:#999999"> <?=setting('linkedin_link')?></a>
                    </div>
                </div>
                <?php endif;?>

                <?php if ($instagram =setting('instagram_link')):?>
                <div class="row">
                    <div class="col-2 pr-0">
                          <i class="fab fa-instagram"></i>
                    </div>
                    <div class="col-10 pl-0">
                        <a  class="dark-a" href="https://www.instagram.com/<?=setting('instagram_link')?>" style="text-decoration: none; color:#999999">
                            <?=setting('instagram_link')?></a>
                    </div>
                </div>
                <?php endif;?>



                <?php if ($twitter =setting('twitter_link')):?>
                <div class="row">
                    <div class="col-2 pr-0">
                         <i class="fab fa-twitter"></i>
                    </div>
                    <div class="col-10 pl-0">
                        <a class="dark-a" class="" href="https://www.twitter.com/<?=setting('twitter_link')?>" style="text-decoration: none; color:#999999"">
                        <?=setting('twitter_link')?></a>
                    </div>
                <?php endif;?>

                </div>
            </div>
        </div>

    </div>


</footer>


<script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
