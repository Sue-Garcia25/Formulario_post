<?php 

  require_once("app/datos.php");
  $user = $_POST["username"];
  $pwd = $_POST["password"]; 

  $resultQuery = validarCuenta($user, $pwd);
  if($resultQuery == "ok"){
    header("Location: dashboard.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <section class="login">
      <div class="form">
         <p><?php echo $resultQuery ?></p>
          <div class="form-control">
            <input type="email" class="text" name="username" value = "<?php echo $user?> " required>
          </div>
          <div class="form-control">
           <input type="password" class="text" name = "password"  value ="<?php echo $pwd?> "  required>
          </div>
      </div>
    </section>
</body>
</html>