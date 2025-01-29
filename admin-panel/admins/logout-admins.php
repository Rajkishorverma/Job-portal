<?php

    session_start();
    session_unset();
    session_destroy();
    header("Location: http://localhost/jobportal/admin-panel/admins/login-admins.php");



?>