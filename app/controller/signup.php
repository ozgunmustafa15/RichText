<?php

if (isset($_SESSION['user_id'])){
    header('Location:'.site_url());
}

$meta=[
    'title'=>'Kayıt Ol',

];
if (post('submit')){
    $hata=array();
    $user_name=post('user_name');
    $user_mail=post('user_mail');
    $user_password=post('user_password');
    $user_password_correct=post('user_password_correct');
    if (!$user_name){
        $error="Kullanıcı adı alanı gerekli!";
    }
    elseif (!$user_mail)
    {
        $error="Mail adı alanı gerekli!";
    }
    elseif (!filter_var($user_mail,FILTER_VALIDATE_EMAIL)){
        $error="Geçerli mail adresi girin!";
    }
    elseif (!$user_password ){
        $error="Şifre alanı boş geçilemez";
    }
    elseif (!$user_password_correct){
        $error="Şifre doğrulama yapmalısınız";
    }
    elseif ($user_password != $user_password_correct){
        $error="Şifreler eşleşmiyor";
    }
    else{
        $row=User::userExist($user_name,$user_mail);

        if ($row){
            $error="Bu kullanıcı adı veya eposta zaten kullanımda";
        }else{
           $result=User::Register([
                'user_name' =>$user_name,
                'user_url'=>permalink($user_name),
                'user_mail'=>$user_mail,
                'user_password'=>password_hash($user_password,PASSWORD_DEFAULT)
            ]);
            if($result){
                $success="Üyelik Başarıyla Oluştruldu.";
                User::Login([
                    'user_id'=>$db->lastInsertId(),
                    'user_name'=>$user_name
                ]);
                header('Refresh:2;url='.site_url());
            }
            else{
                $error="Bir Sorun Oluştu.Daha sonra tekrar deneyiniz.";
            }
        }
    }
}


require view('signup');