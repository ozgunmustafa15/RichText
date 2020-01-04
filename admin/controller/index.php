<?php



if(!permission('index','view')){

    permission_page();
}


require admin_view('index');