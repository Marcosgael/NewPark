<?PHP 
include('PHP/protect.php'); 
  if(!isset($_SESSION)) 
  {  
    session_start();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Menu do Estacionamento</title>
    <style>
      body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
      }
      h1 {
        color: #333333;
        text-align: center;
      }
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        
      }
      li{
        display: inline-block;
        margin: 10px;
      }
      
    
      a:hover {
        background-color: #cccccc;
      }
      form {
        text-align: center;
        margin-top: 20px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      input[type=text] {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #cccccc;
        margin-bottom: 10px;
      }
      input[type=submit] {
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #333333;
        color: #ffffff;
        cursor: pointer;
      }
      input[type=submit]:hover {
        background-color: #666666;
      }
      button {
        display: block;
        margin: 20px auto;
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #ff0000;
        color: #ffffff;
        cursor: pointer;
      }
      button:hover {
        background-color: #cc0000;
      }
      #usuario {
        text-align: center;
        margin-top: 20px;
        font-size: 18px;
      }
    </style>
  </head>
  <body>
    <img src="\NewPark\logo\logo_newpark_jose" width="230px" height="130px">
<center>
    <h1>Menu do Estacionamento</h1>

    <bzerrno>
    <div id="usuario">Bem-vindo, <span><?php echo $_SESSION['nome'];?></span>!</div>
    <ul>
      <li><a href="estacionamento.html"><img src="\NewPark\logo\1" width="230px" height="230px"> </a>

      <li><a href="reserva.php"><img src="\NewPark\logo\2" width="230px" height="230px"></a>

      <li><a href="cadastro_carro.html"><img src="\NewPark\logo\3" width="230px" height="230px"> </a>

      <li><a href="historico_reserva.php"><img src="\NewPark\logo\4" width="230px" height="230px"> </a>
    </ul>
    </center>
    <form action="#" method="get">
      <label for="buscar">Buscar estacionamento próximo:</label>
      <input type="text" id="buscar" name="buscar" placeholder="Digite o endereço ou CEP">
      <input type="submit" value="Buscar">
    </form>
    <button onclick="location.href='PHP/logout.php'">Realizar Logout</button>
  </body>
</html>

