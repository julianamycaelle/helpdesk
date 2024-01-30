<?php
/*
print_r($_GET)

echo '<br />'
echo $_GET['email']
echo '<br />'
echo $_GET['senha']
*/
/*print_r($_POST);

echo '<br />';
echo $_POST['email'];
echo '<br />';
echo $_POST['senha'];*/

//usuarios do sistema
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd')
);

//variavel para verificar se a autenticação foi realizada
$usuario_autenticado=false;

foreach( $usuarios_app as $user ){
    #print_r($user);
    $user['email'];
    $user['senha'];

    if($user['email']==$_POST['email']&&$user['senha']==$_POST['senha']){
        $usuario_autenticado=true;
    }
}
if($usuario_autenticado){
    echo 'Usuario autenticado';
    header('Location:home.php');
}else{
    echo 'Usuario ou senha estão incorretos';
    header('Location:index.php?login=erro');#força o site a ir para o caminho listado
}
?>