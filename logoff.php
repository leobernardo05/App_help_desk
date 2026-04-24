<?php
    session_start();

    session_destroy(); //será destruída ---> força um redirecionamento
    header('Location: index.php');
?>