<?php require admin_view('static/header');?>


<div class="box-">
    <h1>
        Üye Düzenle
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="box-">
    <form action="" method="post" class="form label">
        <ul>
            <li>
                <label>Kullanıcı Adı</label>
                <div class="form-content">
                    <input type="text" name="user_name" value="<?= post('user_name')?post('user_name'):$row['user_name'] ?>" id="title">
                </div>
            </li>
            <li>
                <label>Eposta</label>
                <div class="form-content">
                    <input type="text" name="user_mail" value="<?= post('user_mail')?post('user_mail') : $row['user_mail']?>" id="title">
                </div>
            </li>
            <?php if($_SESSION['user_rank']==1):?>

                <li>
                <label>Rütbe</label>
                <div class="form-content">
                    <select name="user_rank">
                        <option value="">Yetki Seçin</option>

                        <?php foreach (user_ranks() as $id => $rank):?>
                            <option <?=(post('user_rank') ? post('user_rank') : $row['user_rank']) == $id ?'selected':null ?> value="<?=$id?>"><?= $rank ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </li>
            <?php endif;?>

            <li>
                <label>İzinler</label>
                <div class="form-content">
                    <div class="permissions">
                        <?php foreach ($menus as $url =>$menu):?>
                            <div>
                                <h4><?=$menu['title'] ?></h4>
                                <div class="list">
                                    <?php foreach ($menu['permissions'] as $key =>$val):?>
                                        <div>
                                        <input <?=(isset($permissions[$url][$key]) && $permissions[$url][$key]==1 ? ' checked' : null) ?>  name="user_permissions[<?=$url?>][<?=$key?>]" value="1" type="checkbox" ><?=$val?>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        <?php endforeach;?>

                    </div>
                </div>
                <style>
                    .permissions{

                        background: #fff;
                        max-width: 400px;
                        padding: 10px;
                    }
                    .permissions h4{
                        padding-top: 10px;

                    }

                    .permissions .list label{
                        float: none!important;
                        width: auto;
                        display: inline-block;
                    }
                </style>
            </li>
            <li class="submit">
                <button name="submit" value="1" type="submit">Kaydet</button>
            </li>
        </ul>
    </form>
</div>




<?php require admin_view('static/footer');?>

