<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
       <?php include "style.css";?>
        </style>
    <script src="https://kit.fontawesome.com/801584dfd1.js" crossorigin="anonymous"></script>
</head>

<body>
<?php
include "DB.php";
$sql = "SELECT * FROM details";
$result = $conn->query($sql);
$count=$result->num_rows;
$conn->close();
?>
<div class = "jumbotron">
<div class = "container">
<h1 class = "intro">Africa Bible College Library system <span><i class="fa fa-bible"></i></span></</h1>

<p class = "lead">This is where you will be able to search, borrow or even return books, there are currently <?php echo $count; ?> books available now.</p>
<a href = "/About"class = "btn more btn-primary btn-lg"><i class="fa fa-book"></i> Learn more</a>

</div>
</div>


<div class = "container">

</div>

<div id = "Search" class = container>

<h3>Search to find a book available in the Library</h3> 

<form action ="search.php" method ="get">
<div class = form-group>
<label for ="category">Search according to : </label>
<select id = "category" name = "category" class = "form-control">
<option value = "Booknumber">Book Number</option>
<option value = "Author">Author</option>
<option value = "Title">Title</option>
<option value = "Subject">Subject</option>
</select>
<label for ="Search">Search: </label>
<input name = "search" type = "text" class = "form-control" required>
<br>
<button type = "submit" id = "s" class = "btn btn-primary btn-lg"><i class="fa fa-search"></i> Search for the book</button>
</div>
</form>
</div>

 
</body>
</html>