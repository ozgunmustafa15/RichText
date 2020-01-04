<?php
if(!permission('menu','view')){
    permission_page();
}


$query=$db->prepare('SELECT * FROM menu ORDER BY menu_id DESC');
$query->execute();
$rows=$query->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);
require admin_view('menu');