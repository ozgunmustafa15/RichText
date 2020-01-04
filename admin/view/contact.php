<?php require admin_view('static/header'); ?>

<div class="box-">
    <h1>
        Mesajlar
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="table">
    <table>
        <thead>
        <tr>
            <th>Durum</th>
            <th>Gönderen</th>
            <th class="hide">Konu</th>
            <th class="hide">Gönderilme Tarihi</th>
            <th>Mesaj</th>
            <?php if (permission('contact','edit')):?>
            <th>İşlemler</th>
            <?php endif;?>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($query as $row):?>
        <tr style="<?= ($_SESSION['user_id']==$row['user_id'])&&($_SESSION['user_rank']!=1)?' display: none;':'' ?>">
            <td>
                <?php if($row['contact_read']):?>
                <div class="mr-5"><h5><span class="badge badge-success">Okundu</span></h5></div>
                <div><small class="text-muted text-danger">Okuyan : <strong><?=$row['user_name']?></strong> </small></div>

                    <small class="text-muted"><?=timeConvert($row['last_view_time']) ?></small>

                <?php endif; ?>
                <?php if(!$row['contact_read']):?>
                    <h5><span class="badge badge-danger">Okunmadı</span></h5>
                <?php endif; ?>
            </td>
            <td>
                <div><?= $row['contact_name']?></div>
                <div><?= $row['contact_mail']?></div>
                <div><small><?= $row['contact_phone']?></small></div>
            </td>
            <td class="hide">
                <?=$row['contact_title'] ?>

            </td>
            <td class="hide">
                <?=timeConvert($row['contact_date']) ?>

            </td>
            <td>
                <?= $row['contact_text'] ?>

            </td>
            <td>
                <?php if (permission('contact','edit')):?>
                <a href="<?=admin_url('edit-contact?id='.$row['contact_id']) ?>" class="btn">Görüntüle</a>
                <?php endif;?>
                <?php if (permission('contact','delete')):?>
                <a onclick="return confirm('Silmek istiyor musun ?')" href="<?=admin_url('delete?table=contact&column=contact_id&id='.$row['contact_id']) ?>" class="btn">Sil</a>
                <?php endif;?>

            </td>
        </tr>

        <?php endforeach;?>
        </tbody>
    </table>
</div>


<?php if ($totalRecord >$pageLimit):?>
<div class="pagination">
    <ul>
        <?php echo $db->showPagination(admin_url(route(1).'?'.$pageParam.'=[page]'));
        ?>
    </ul>
</div>
<?php endif; ?>

<?php require admin_view('static/footer')?>

