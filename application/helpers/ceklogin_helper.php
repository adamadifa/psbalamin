<?php

function check_login(){

    $CI         = & get_instance();
    $session    = $CI->session->userdata('status_login');
    if ($session != 'oke'){

        redirect('auth/loginuser');
    }

}



function check_log(){

    $CI         = & get_instance();
    $session    = $CI->session->userdata('status_login');
    if ($session == 'oke'){

        redirect('dashboard/admin');
    }

}




function check_loginadmin(){

    $CI         = & get_instance();
    $session    = $CI->session->userdata('status_login');
    if ($session != 'admin'){

        redirect('auth/loginadmin');
    }

}


function check_logadmin(){

    $CI         = & get_instance();
    $session    = $CI->session->userdata('status_login');
    if ($session == 'admin'){

        redirect('dashboard/admin');
    }

}
