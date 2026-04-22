<?php
    // usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    )

    foreach($usuarios_app as $user) {
        $user['email'];
        $user['senha'];
    }
    

    print_r($_POST);
    echo '<br>'

    echo $_POST['email'];
    echo '<br>';
    echo $_POST['senha'];
?>