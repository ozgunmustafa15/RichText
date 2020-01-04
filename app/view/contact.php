<?php require view('static/header')?>
<style>
    .box{
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 999;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0px 2px 5px #dfdfe2;
        align-content: center;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding-top: 270px;
        padding-left: 20px;
        padding-right: 20px;
        font-weight: bold;
        font-size: 30px;


    }
</style>
<div class="">
    <div class="row bg" style="height: 700px;">
        <div class="col-lg-7 flex-auto d-none d-lg-block">
        </div>
        <div class="col-lg-5 " >
            <form action="" id="contact-form" onsubmit="return false;">

                <div class="card shadow border-0  opa mt-3" style=" box-shadow: 0px 2px 5px #dfdfe2">
                    <div class="card-body mt-4">
                        <div  class="box bg-danger text-white" style="display: none" id="contact-error-msg"></div>
                        <div  class="box bg-success text-white" style="display: none" id="contact-success-msg"></div>
                        <h3 class="">İletişim Sayfası</h3><br>

                        <div class="alert alert-success" style="display: none" id="contact-success-msg" role="alert"></div>

                        <div class="form-label-group">
                            <label for="name">Ad Soyad*</label>
                            <input type="text"  id="name" name="name" class="form-control" placeholder=" ">
                        </div>

                        <div class="form-label-group">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="mail" class="form-control" placeholder="" >
                        </div>
                        <div class="form-label-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="" >
                        </div>
                        <div class="form-label-group">
                            <label for="title">Mesajınızın Başlığı*</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="" >
                        </div>
                        <div class="form-label-group">
                            <label for="message">Mesajınız*</label>
                            <textarea rows="5" id="message" name="message" class="form-control" placeholder="" ></textarea>
                        </div>
                        <button type="submit" onclick="contact('#contact-form')"  class="btn btn-primary btn-block mt-2">Gönder</button>
                        <div class="text-center mt-3">
                            <i>For create an account</i> <a class="dark-a" href="<?=site_url('signup')?>">Register</a>
                        </div>
                    </div>

                </div>

            </form>
        </div>

    </div>

<?php require view('static/footer')?>


