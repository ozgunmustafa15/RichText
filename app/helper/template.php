<?php
function site_url($url=false)
{
    return URL.'/'.$url;
}
function public_url($url=false)
{
    //public içindekileri rahatça kullanabilmek için
    return URL.'/public/'.$url;
}
function error(){
    global $error;
    return isset($error)?$error:false;
}
function success(){
    global $success;
    return isset($success)?$success:false;
}

function menu($menu_title){
    global $db;
    $query=$db->prepare('SELECT * FROM menu WHERE menu_title=:menu_title');
    $query->execute([
        'menu_title'=>$menu_title
    ]);
    $row=$query->fetch(PDO::FETCH_ASSOC);
    if ($row){
        $data=json_decode($row['menu_content'],true);
        return $data;
    }
    return false;
}