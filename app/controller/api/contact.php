<?php
if ($data = formControl('phone')) {
    if (!filter_var($data['mail'], FILTER_VALIDATE_EMAIL)) {
        $json['error'] = "Geçerli bir email adresi giriniz!";
    } else {

        $query = $db->insert('contact')
            ->set([
                'contact_name' => $data['name'],
                'contact_mail' => $data['mail'],
                'contact_phone' => $data['phone'],
                'contact_title' => $data['title'],
                'contact_text' => $data['message']
            ]);
        if ($query) {
            $json['success'] = 'Mesajınız bize ulaştı.<br> Teşekkür ederiz!';
        } else {
            $json['error'] = 'Bir hata oluştu.Tekrar Deneyin!';
        }

    }
}
    else{
    $json['error']="Lütfen gerekli alanları doldurun.<br> <small style='font-size: 15px'>(*) ile işaretli alanlar doldurulmalıdır.</small> ";
}
