<?php require admin_view('static/header')?>

<div class="box-">
    <h1>
        Menu Yönetimi
        <?php if (permission('menu','add')): ?>
            <a href="<?=admin_url('add-menu')?>">Oluştur</a>
        <?php endif;?>
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="table">
    <table>
        <thead>
        <tr>
            <th>Menu Başlığı</th>
            <th class="hide">Eklenme Tarihii</th>
            <th>İşlemler</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row):?>
        <tr>
            <td>
                <?=$row['menu_title']?>
            </td>
            <td>
                <?=$row['menu_date']?>
            </td>
            <td>
                <a href="<?=admin_url('edit-menu?id='.$row['menu_id'])?>" class="btn">Düzenle</a>
                <a onclick="return confirm('Silmek istiyor musun ?')" href="<?=admin_url('delete?table=menu&column=menu_id&id='.$row['menu_id']) ?>" class="btn">Sil</a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

<?php require admin_view('static/footer')?>

