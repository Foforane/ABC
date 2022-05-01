<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abc | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
       <?php include "style.css";?>
        </style>
            <script src="https://kit.fontawesome.com/801584dfd1.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
if(!isset($_SESSION['allow'])){
    header("Location:login.php");
    exit();
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
   $booknum = $_POST['BookNum'];
   $author = $_POST['author'] ;
   $title = $_POST['title'];
   $sub = $_POST['subject'];
   $res = $_POST['reserved'];
   $vol = $_POST['volume'];
   $pub = $_POST['publisher'];
   include "DB.php";
   $sql = "INSERT INTO details (Booknumber,Author,Title,Subject,Publisher,Reserved,Volume)
   VALUES ('$booknum','$author','$title','$sub','$pub','$res','$vol')";
    if($conn->query($sql)===TRUE){
        echo "Book entered";
    }else{
        echo "error ".$sql."<br>".$conn->error;
    }
    $conn->close();
}
?>
<div class = "container down">

<a href = "javascript:history.back()"class = "btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
<h2 id = "center">Add a new book</h2>

<form method =  "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
<div class = "form-group">

<label for = "num">BookNum: </label>
<input type = "text" id = "num" name="BookNum"  class = "form-control"/>
</div>
<div class = form-group>
<label for = "author_">Author: </label>
<input type = "text" id = "author_" name="author"  class = "form-control"/>
<label for = "title_">Title: </label>
<input type = "text" id = "title_" name="title"  class = "form-control"/>
<label for = "sub">Subject: </label>
<input type = "text" id = "sub" name="subject"  class = "form-control"/>
<label for = "pub">Publisher: </label>
<input type = "text" id = "pub" name="publisher"  class = "form-control"/>
<label for = "Res">Reserved: </label>
<input type = "text" id = "Res" name="reserved"  class = "form-control"/>
<label for = "volume_">Volume: </label>
<input type = "text" id = "volume_" name="volume"  class = "form-control"/>
</div>
<br>
<button type = "submit" class = "btn btn-outline-primary">Submit Book</button>
</div>
</body>
</html>