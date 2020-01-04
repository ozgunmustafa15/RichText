<?php
class User{
    public static function Login($data){
        $_SESSION['user_id']=$data['user_id'];
        $_SESSION['user_name']=$data['user_name'];
        $_SESSION['user_rank']=$data['user_rank'];
        $_SESSION['user_permissions']=$data['user_permissions'];


    }

    public static function userExist($user_name,$user_mail='@@') {
        global $db;
        $query=$db->prepare('SELECT * FROM users WHERE user_name=:user_name||user_mail=:user_mail');
        $query->execute([
            'user_name'=>$user_name,
            'user_mail'=>$user_mail
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function Register($data){
        global $db;
        $query=$db->prepare('INSERT INTO users SET user_name=:user_name,user_url=:user_url,user_mail=:user_mail,user_password=:user_password');
        return $query->execute($data);
    }
}