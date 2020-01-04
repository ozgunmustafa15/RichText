<?php
if(!permission('users','edit')){
    permission_page();
}

$id=get('id');
if (!$id){
    header('Location:'.admin_url('users'));
    exit;
}
$row=$db->from('users')
    ->where('user_id',$id)
    ->first();

if(!$row){
    header('Location:'.admin_url('users'));
    exit;
}
if (post('submit')){
    if ($data=formControl('user_permissions')){

        $user_exs=User::userExist($data['user_name']);
        if ($row['user_name']!=$data['user_name']){
            $error='Kullanıcı adı kullanılıyor';
        }
        else{
            $data['user_permissions'] = json_encode($_POST['user_permissions']);
            $data['user_url'] = permalink($data['user_name']);

            $query=$db->update('users')
                ->where('user_id',$id)
                ->set($data);
            if ($query){
                header('Location:'.admin_url('users'));

            }else{
                $error='Bir sorun oluştu!!!';
            }
        }
    }else{
        $error='Eksik alanlar var.';
    }
}
$permissions=json_decode($row['user_permissions'],true);

require admin_view('edit-user');

