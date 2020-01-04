<?php

if (isset($_SESSION['user_id'])){
    header('Location:'.site_url());
}

$meta=[
    'title'=>'Giriş',
];


if (post('submit')){
    $user_name=post('user_name');
    $user_password=post('user_password');
    if (!$user_name){
        $error="Kullanıcı adı alanı gerekli!";
    }

    elseif (!$user_password ){
        $error="Şifre alanı gerekli";
    }

    else{
         $row=User::userExist($user_name);
         if ($row){
             $password_verify=password_verify($user_password,$row['user_password']);
             if ($password_verify){
                 $success="Giriş Başarılı. Yönlendiriliyorsunuz...";
                 User::Login($row);
                 header('Refresh:2;url='.site_url());
             }
             else{
                 $error="Şifreniz Hatalı";
             }

         }
         else{
             $error="Kullanıcı Bulunamadı";
         }

    }
}
require view('login');