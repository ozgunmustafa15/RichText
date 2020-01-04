<?php
if(!permission('contact','edit')){
    permission_page();
}
$id=get('id');

if (!$id){
    header('Location:'.admin_url('contact'));
    exit;
}
$row=$db->from('contact')
    ->where('contact_id',$id)
    ->first();

if(!$row){
    header('Location:'.admin_url('contact'));
    exit;
}
if ($row['contact_read']==0){
    $db->update('contact')
        ->where('contact_id',$id)
        ->set([
            'contact_read'=>1,
            'who_view_message'=>session('user_id')
        ]);
}
$db->update('contact')
    ->where('contact_id',$id)
    ->set([
        'last_view_time'=>date('Y-m-d H:i:s')
    ]);


require admin_view('edit-contact');

