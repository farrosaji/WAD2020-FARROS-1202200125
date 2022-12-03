    <?php
    session_start();


    header("location:../index.php");
    // delete cookie
    setcookie('id', '', time() - 3600);
    setcookie('key', '', time() - 3600);

    exit;
