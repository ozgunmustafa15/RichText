<?php
if (isset($_SESSION['admin_login'])){
    header('Location:' . admin_url(''));

}

if (post('submit')){
    if ($data = formControl()){

        $row = $db->from('users')
            ->where('user_url', permalink($data['user_name']))
            ->where('user_rank', 3, '!=')
            ->first();

        if (!$row){
            $error = 'Girdiğiniz bilgiler hatalı, lütfen kontrol edin.';
        } else {

            $password_verify = password_verify($data['user_password'], $row['user_password']);
            if ($password_verify){
                if ($row['user_rank'] == 3){
                    $error = 'Bu bölüme girmek için yetkiniz bulunmuyor!';
                } else {
                    $_SESSION['admin_login']=1;
                    User::Login($row);
                    header('Location:' . admin_url());
                }
            } else {
                $error = 'Girdiğiniz şifre hatalı, lütfen kontrol edin.';
            }

        }

    } else {
        $error = 'Lütfen bilgilerinizi girin.';
    }
}

require admin_view('login');