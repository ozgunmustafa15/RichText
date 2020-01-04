


<?php require admin_view('static/header')?>
<div class="box-">
    <h1>
        Ayarlar
    </h1>
</div>

<style>
    .genel-kutu{
        background-color: white;
        border-radius: 8px;
        padding-left: 50px;
        padding-right: 50px;
        padding-bottom: 20px;
        padding-top: 20px;
        margin: 10px;
        box-shadow: 0px 2px 5px #dfdfe2;

    }
    label{
        font-weight: bold;
    }
</style>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-genel-tab" data-toggle="tab" href="#nav-genel" role="tab" aria-controls="nav-home" aria-selected="true">Genel</a>
        <a class="nav-item nav-link" id="nav-construcion-tab" data-toggle="tab" href="#nav-construcion" role="tab" aria-controls="nav-construcion" aria-selected="false">Bakım Modu</a>
        <a class="nav-item nav-link" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab" aria-controls="nav-social" aria-selected="false">Sosyal Medya</a>
        <a class="nav-item nav-link" id="nav-view-tab" data-toggle="tab" href="#nav-view" role="tab" aria-controls="nav-view" aria-selected="false">Karşılama</a>
        <a class="nav-item nav-link" id="nav-smtp-tab" data-toggle="tab" href="#nav-smtp" role="tab" aria-controls="nav-smtp" aria-selected="false">SMTP </a>
        <a class="nav-item nav-link" id="nav-privacy-tab" data-toggle="tab" href="#nav-privacy" role="tab" aria-controls="nav-privacy" aria-selected="false">Privacy </a>
    </div>
</nav>
<form action="" method="POST" class="form label">
<div class="tab-content" id="nav-tabContent">
    <hr>
    <div class="tab-pane fade show active" id="nav-genel" role="tabpanel" aria-labelledby="nav-genel-tab">
        <div class="row">
            <div class="col-lg-6">
                <div class="genel-kutu">
                    <h3>Genel</h3>
                    <ul>
                        <li>
                            <label>Logo Başlığı</label>
                            <div class="form-content">
                                <input class="form-control"  type="text" id="title" name="settings[logo]" value="<?=setting('logo')?>">
                            </div>
                        </li>
                        <li>
                            <label>Modal kapatma ipucu</label>
                            <div class="form-content">
                                <input class="form-control"  type="text" id="title" name="settings[close_search_modal]" value="<?=setting('close_search_modal')?>">
                            </div>
                        </li>
                        <li>
                            <label>Arama Input Placeholder</label>
                            <div class="form-content">
                                <input class="form-control"  type="text" id="title" name="settings[search_input_placeholder]" value="<?=setting('search_input_placeholder')?>">
                            </div>
                        </li>
                        <li>
                            <label>Site Title</label>
                            <div class="form-content">
                                <input class="form-control"  type="text" id="title" name="settings[title]" value="<?=setting('title')?>">
                            </div>
                        </li>
                        <li>
                            <label>Description</label>
                            <div class="form-content">
                                <input class="form-control"  type="text" id="title" name="settings[description]" value="<?=setting('description')?>">
                            </div>
                        </li>
                        <li>
                            <label>Keywords</label>
                            <div class="form-content">
                                <input class="form-control"  type="text" id="title" name="settings[keywords]" value="<?=setting('keywords')?>">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-construcion" role="tabpanel" aria-labelledby="nav-construcion-tab">
        <div class="row">
            <div class="col-lg-6">
                <div class="genel-kutu">
                    <h3>Bakım Modu Ayarı</h3>
                    <ul>
                        <li>
                            <label>Bakım Modu</label>
                            <div class="content">
                                <select class=""  name="settings[maintenance]" id="">
                                    <option <?=setting('maintenance')==1?'selected':null?> value="1">Açık</option>
                                    <option <?=setting('maintenance')==2?'selected':null?> value="2">Kapalı</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>Bakım Modu Başlık</label>
                            <div class="form-content">
                                <input class="form-control"  type="text" id="title" name="settings[maintenance_title]" value="<?=setting('maintenance_title')?>">
                            </div>
                        </li>
                        <li>
                            <label>Description</label>
                            <div class="form-content">
                                <textarea class="form-control"  name="settings[maintenance_description]" row="50" cols="10"><?=setting('maintenance_description')?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
        <div class="row">
            <div class="col-lg-6">
                <div class="genel-kutu">
                    <h3>Sosyal Medya Ayarları</h3>
                    <small class="text-muted">kullanıcı adınızı yazmanız yeterli oalcaktır.</small>
                    <ul>
                        <li>
                            <label>Facebook Link</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[facebook_link]" value="<?=setting('facebook_link')?>">
                            </div>
                        </li>
                        <li>
                            <label>Linkedin Link</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[linkedin_link]" value="<?=setting('linkedin_link')?>">
                            </div>
                        </li>
                        <li>
                            <label>Twitter Link</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[twitter_link]" value="<?=setting('twitter_link')?>">
                            </div>
                        </li>
                        <li>
                            <label>Instagram Link</label>
                            <div class="form-content">
                                <input class="form-control" type="text" id="title" name="settings[instagram_link]" value="<?=setting('instagram_link')?>">
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-view" role="tabpanel" aria-labelledby="nav-view-tab">
        <div class="row">
            <div class="col-lg-6">
                <div class="genel-kutu">
                    <h3>Karşılama Ekranı</h3>
                    <ul>
                        <li>
                            <label>Karşılama Başlığı</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[welcome_title]" value="<?=setting('welcome_title')?>">
                            </div>
                        </li>
                        <li>
                            <label>Karşılama Metni</label>
                            <div class="form-content">
                                <textarea  class="form-control" name="settings[welcome_text]" row="50" cols="10"><?=setting('welcome_text')?></textarea>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-smtp" role="tabpanel" aria-labelledby="nav-smtp-tab">
        <div class="row">
            <div class="col-lg-6">
                <div class="genel-kutu">
                    <h3>SMTP Ayarları</h3>
                    <ul>
                        <li>
                            <label>SMTP Host</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[smtp_host]" value="<?=setting('smtp_host')?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Mail</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[smtp_email]" value="<?=setting('smtp_email')?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Password</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[smtp_password]" value="<?=setting('smtp_password')?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Port</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[smtp_port]" value="<?=setting('smtp_port')?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Gönderici Maili</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[smtp_send_email]" value="<?=setting('smtp_send_email')?>">
                            </div>
                        </li>
                        <li>
                            <label>SMTP Gönderici İsmi</label>
                            <div class="form-content">
                                <input  class="form-control" type="text" id="title" name="settings[smtp_send_name]" value="<?= setting('smtp_send_name')?>">
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-6"></div>
        </div>

    </div>
    <div class="tab-pane fade" id="nav-privacy" role="tabpanel" aria-labelledby="nav-privacy-tab">
            <div class="row">
                <div class="col-lg-6">
                    <div class="genel-kutu">
                        <h3>Kullanıcı Sözleşmesi</h3>
                        <ul>
                            <li>
                                <label>Sözleşme Başlığı Başlığı</label>
                                <div class="form-content">
                                    <input  class="form-control" type="text" id="title" name="settings[welcome_title]" value="<?=setting('welcome_title')?>">
                                </div>
                            </li>
                            <li>
                                <label>Sözleşme Metni</label>
                                <div class="form-content">
                                    <textarea  class="form-control" name="settings[welcome_text]" ><?=setting('welcome_text')?></textarea>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-6"></div>
            </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-6 ">
            <div class="genel-kutu">
                <?php if ($success=success()):?>

                    <div class="alert alert-success mt-2"  role="alert">
                        <?=$success?>
                    </div>
                <?php endif;?>

                <?php if ($err=error()):?>
                    <div class="alert alert-danger mt-2"   role="alert">
                        <?=$err?>
                    </div>
                <?php endif;?>
                <button type="submit" class="sticky-top">Kaydet</button>
                <br>
                <div class="my-5">
                <a href="" style="background-color: red;padding: 10px; border-radius:20px;color: white">Kategori</a>
                <a href="" class="my-5" style="background-color: red;padding: 10px; border-radius:20px;color: white">Yeniler</a>
                </div>
            </div>
            <input type="hidden" name="submit" value="1">
        </div>
        <div class="col-lg-6 "></div>
    </div>
</form>












<?php require admin_view('static/footer')?>

