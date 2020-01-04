<?php
//print_r(date("H.i.s"));

if (!permission('contact','view')){
    permission_page();
}
// pagination example
$totalRecord = $db->from('contact')
    ->select('count(contact_id) as total')
    ->total();
$pageLimit =10 ;
$pageParam = 'p';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);
$query = $db->from('contact')
    ->join('users','users.user_id=contact.who_view_message','left')
    ->orderby('contact_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();


require admin_view('contact');