<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
       <?php include "style.css";?>
        </style>
            <script src="https://kit.fontawesome.com/801584dfd1.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $Password=$_POST['password'];
        $_SESSION['allow'] = "allow";
        if($Password == "Joel1965"){
            echo "Wel";
        }  
    }
    ?>
<div class = "move container">
<a href = "javascript:history.back()"class = "btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1 id = "login">Login</h1>
<label for = "user">Username:</label>
<input name = "username" id = "user" type = "text" class = "form-control" value = "Admin"  readonly>
<br>
<label for = "password_">Password:</label>
<input name = "password" id = "password_"type = "password" class = "form-control" ><br>
<button class = "btn btn-primary">Login</button>


</form>

</div>
</body>
</html>