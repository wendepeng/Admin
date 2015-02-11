<?php
/**
 * session check
 * created by lane
 * @2012-01-01
 */
if($pageName != 'login' && !isset($_SESSION[SESSIONUSER])) {
    header('Location: login.php');
    exit(0);
}
