<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
     
  <?php
  session_start();
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once("config_login.php");
    include_once("db.class.php");
    
    try {
      $link = new Db();
      
      $usr = $_POST['username'];
      $pass = $_POST['password'];
      $hashed_pass = hash('sha256', $pass);
      
      $sql = "SELECT * FROM users WHERE (username=? OR email=?) AND password=? AND active='SI'";
      $stmt = $link->run($sql, [$usr, $usr, $hashed_pass]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if (!$row) {
        echo "<div class='alert alert-danger'>Los datos ingresados no son válidos!</div>";
      } else {
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $_SESSION['time'] = date('H:i:s');
        $_SESSION['username'] = $usr;
        $_SESSION['logueado'] = true;
        
        header("location:welcome.php");
        exit();
      }
      
    } catch (Exception $e) {
      echo "<div class='alert alert-danger'>Error de conexión: " . $e->getMessage() . "</div>";
    }
  }
  ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>