<html>
    <body>
    <style>
        .body {
        margin: 0;
        font-family: Arial, sans-serif;
        display: flex;
    }
    .sidebar {
        width: 200px;
        background: blue;
        color: white;
        height: 100vh;
        padding: 20px;
    }
    .sidebar h2 {
        text-align: center;
        margin-bottom: 50px;
    }
    .sidebar a{
        display: block;
        color: black;
        padding: 20px;
        margin: 5px 0;
    }
    
    </style>
  
  
  
  
  
  
    <div class="content">
    <div class="header">
      <h1>Bem-vindo!</h1>
   
</body>
</html>

<form action="Login.php" method="post">
    Login <br>
    <input type="text" name="usuario"><br>
    Senha <br>
    <input type="password" name="senha"><br><br>
    <input type="submit" value="Entrar">
</form>

<?php
if (isset($_GET['msg'])) {
    echo "<p style='color:red'>" . htmlspecialchars($_GET['msg']) . "</p>";
}


?>
