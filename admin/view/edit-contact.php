<?php require admin_view('static/header');?>


<div class="box-">
    <h1>
        Mesajı Görüntüle
    </h1>
</div>
<style>
    .box{
        position: inherit;

        width: 100%;
        z-index: 999;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0px 2px 5px #dfdfe2;
        padding-left: 20px;
        padding-right: 20px;
        font-weight: bold;
        font-size: 12px;


    }
</style>

<div class="clear" style="height: 10px;"></div>

<div class="card border-0" style="width: 21em">
    <div class="card-header border-0">
        <div>
            <label>Bağlantı Maili : <b><?=$row['contact_mail'] ?></b> </label>
        </div>
        <div>
            <label>Kullanıcı Adı : <b><?=$row['contact_name'] ?></b> </label>
        </div>
        <?php if ($row['contact_phone']):?>
        <div>
            <label>İletişim Numarası : <b><?=$row['contact_phone'] ?></b> </label>
        </div>
        <?php endif;?>
    </div>
    <div class="card-body">
        <div>
            <h4><?=$row['contact_title'] ?></h4>
        </div>
        <div>
            <p><?= nl2br($row['contact_text']) ?></p>
        </div>
        <?php if ($row['last_view_time']):?>
        <small class="text-muted">Son görüntüleme : <?=$row['last_view_time']?></small><br>
        <?php endif;?>
    </div>
    <div class="card-footer border-0">

        <div style="border-left: 1px solid gray; border-radius: 5px; padding: 8px">
            <?php if (!$row['contact_answer']):?>
            <form action="" onsubmit="return false;" id="email-answer-form">
                <h4>Yanıtla</h4>
                <input type="hidden" name="name" value="<?=$row['contact_name'] ?> ">
                <input type="hidden" name="contact_id" value="<?=$row['contact_id'] ?> ">

                <div class="box bg-success text-white py-2" style="display: none" id="contact-success-answer"></div>
                <div class="box bg-danger text-white py-2" style="display: none" id="contact-error-answer"></div>
                <label>Email</label>
                <input type="text" name="email" readonly="readonly" value="<?=$row['contact_mail'] ?> " class="form-control">
                <label>Başlık</label>
                <input type="text" name="title" value="RE:<?=$row['contact_title'] ?> " class="form-control">
                <label>Yanıt</label>
                <textarea type="text" name="contact_answer"  class="form-control" rows="5"></textarea>

                <button name="submit" onclick="send_email('#email-answer-form')" value="1" class="mt-3" type="submit">Kaydet</button>
            </form>
            <?php else:?>
            <h4>Mesaj Yanıtlandı</h4>
            <p><?=$row['contact_answer'] ?></p>
            <?php endif; ?>
        </div>





    </div>
</div>


<?php require admin_view('static/footer');?>

