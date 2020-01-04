<?php

$id=get('id');




if ($data=formControl()){





    $row=$db->update('contact')
        ->where('contact_id',$id)
        ->set([
            'contact_answer'=>$data['contact_answer']
        ]);
    if ($row){
        $sendAnswer=sendMail($data['email'],$data['name'],$data['title'],nl2br($data['contact_answer']));
        if ($sendAnswer){
            $json['success']='Yanıtınız iletildi.';
        }

    }
    //
    $sendAnswer=1;
   if ($sendAnswer){
       /*
       $db->update('contact')
          ->where('contact_id',$id)
          ->set([
               'contact_answer' => $data['contact_answer']
           ]);
       */
   }
   else{
       $json['error']='Mesajınız gönderilemedi.';
   }
}
else{
    $json['error']='Lütfen tüm bilgileri doldurun';
}
