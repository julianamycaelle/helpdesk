


<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <title>HELP DESK</title>
    <style>
    .logo1{
        width:10%;
        height: 10%;
        background-color:black;
        color:white;
        overflow:auto;
    }

    input {
      width: 70%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #555;
      }

    .logo{
        display:inline-block;
        background-color:black;
        color:white;
        overflow:auto;
        font-size:32px;
    
    }

    html {
      font-family: "Lucida Sans", sans-serif;
      }

      .header {
  background-color: black;
  color: #ffffff;
}


.menu::after {
  content: "";
  clear: both;
  display: table;
}

.itensmenu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.itensmenu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.itensmenu li:hover {
  background-color: #0099cc;
}
.text-danger{
  color:red;
}

[class*="menu"] {
  float: left;
  padding: 15px;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=e-mail], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=pasword], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}


.center {
  margin: auto;
  width: 50%;
  padding: 10px;
}

button{
  width: 70%;
  background-color: steelblue;
  color: white;
  padding: 16px 32px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


</style>

 

</head>
<body>

<div class='header'>
<img src="logo.png" class="logo1">
<h3 class="logo">Help Desk Turma Técnico Em Informática para Internet</h3>
</div>

<!--<div class="menu">
  <div class="itensmenu">
    <ul>
      <li>Duvida Aulas</li>
      <li>Problemas PC</li>
      <li>Comentários</li>
      <li>Dicas Conteúdo</li>
    </ul>
  </div>-->

 <div>
    <!--<h1>Help Desk</h1>
    <p>Esse programa foi criado com o intuito de sanar duvidas sobre os conteúdos 
      do curso técnico em informática para internet, onde os alunos poderão se 
      inscrever e se matricular no sistema para enviar e-mails internos para o instrutor da
      unidade curricular que estejam cursando.
    </p>-->
    <form class="center" action="valida_usuario.php" method="post">
       <legend>Loguin:</legend>
                <legend>e-mail</legend>
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                <legend>senha:</legend>
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                  <button type="submit">Entrar</button>
                  <!--Erro de loguin-->
                  <?php
                  if(isset($_GET['login'])){;//testa se a instrução ta setada;
                    ?>
                    <div class=text-danger>
                    Usuário ou senha inválido(s)
                    </div>
                    <?php
                  }
                  ?>
            
                
    </form>
   </div>

</body>
</html>