<?php

session_start();
setcookie(session_name(),session_id(), time() + 2592000)
ob_implicit_flush();
    if( function_exits('ob_get_level'))
    { while(ob_get_level() > 0){
        ob_end_flush();
    }
}

if (get_magic_quotes_gpc()) {
	foreach ($_GET as $key => $val) {
		$_GET[$key] = stripslashes($val);
	}
	foreach ($_POST as $key => $val) {
		$_POST[$key] = stripslashes($val);
	}
}
if (get_magic_quotes_runtime()) {
	set_magic_quotes_runtime(0);
}







?>