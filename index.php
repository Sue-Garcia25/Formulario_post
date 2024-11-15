
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
        <form action="result.php" method="post">
          <div class="form-control">
            <label for="">User name or email address</label>
          </div>
          <div class="form-control">
            <input type="email" class="text" name="username" required>
          </div>
          <div class="form-control">
            <label for="">Password</label>
          </div> 
          <div class="form-control">
           <input type="password" class="text" name = "password" required>
          </div>
          <div class="form-control">
            <input type="submit" class="btn" value ="Enviar">
           </div>
       </form>
      </div>
    </section>
</body>
</html>