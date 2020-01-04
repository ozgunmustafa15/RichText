<?php
if(!permission('settings','view')){
    permission_page();
}
if (post('submit')){
    if(!permission('settings','edit')){
        $error='Yetkiniz yok';
    }

    //Burada setting formundan gelen değerleri settings klasörüne yazdırıyoruz.PHP EOL php'de alt satıra geçmek için kullanılır.
    $html='<?php'.PHP_EOL.PHP_EOL;
    foreach (post('settings') as $key=>$val){
        $html.='$settings["'.$key.'"]="'.$val.'";'.PHP_EOL;
    }
    file_put_contents(PATH.'/app/settings.php',$html);
    $success="Kaydedildi...";
    header('Refresh:1;url='.admin_url('settings'));
}

require admin_view('settings');