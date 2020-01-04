<?php require admin_view('static/header')?>

<div class="box-">
    <h1>
        Üyeler
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="table">
    <table>
        <thead>
        <tr>
            <th>Kullanıcı Adı</th>
            <th class="hide">Email</th>
            <th class="hide">Kayıt Tarihi</th>
            <th>Rütbe</th>
            <?php if (permission('users','edit')):?>
            <th>İşlemler</th>
            <?php endif;?>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($query as $row):?>
        <tr style="<?= ($_SESSION['user_id']==$row['user_id'])&&($_SESSION['user_rank']!=1)?' display: none;':'' ?>">
            <td>
                <a href="<?=admin_url('edit-user?id='.$row['user_id']) ?>" class="title">
                   <?=$row['user_name'] ?>
                </a>
            </td>
            <td class="hide">
                <?=$row['user_mail'] ?>

            </td>
            <td class="hide">
                <?=$row['user_date'] ?>

            </td>
            <td>
                <?=user_ranks($row['user_rank']) ?>

            </td>
            <td>
                <?php if (permission('users','edit')):?>
                <a href="<?=admin_url('edit-user?id='.$row['user_id']) ?>" class="btn">Düzenle</a>
                <?php endif;?>
                <?php if (permission('users','delete')):?>
                <a onclick="return confirm('Silmek istiyor musun ?')" href="<?=admin_url('delete?table=users&column=user_id&id='.$row['user_id']) ?>" class="btn">Sil</a>
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

