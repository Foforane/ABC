<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searched</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
       <?php include "style.css";?>
        </style>
</head>
<body>
    
<div class = "container">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Category = $_GET['category'];
$search = $_GET['search'];
$Query = "%".$search."%";
$Query = addslashes($Query);
$Query = trim($Query);
$sql = "SELECT * FROM details WHERE $Category LIKE '$Query' ";
$result = $conn->query($sql);
$books = [];

  
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){
  array_push($books,$row);
}  
}
$conn->close();
?>

<h4>These are results for all books found according to <?php echo $_GET['category'] ." ". $_GET['search']?> </h4>
<a href = "javascript:history.back()"class = "btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
<div class="table-responsive">
<table class = "table table-hover">
<thead class = "thead-light">
<tr>
<th>Number</th>
<th>Author</th>
<th>Title</th>
<th>Subject</th>
<th>Publisher</th>
<th>Reserved</th>
<th>Volume</th>

<th>Book Number</th>
</tr>
</head>
<tbody>
<?php
$i = 0;
foreach($books as $book ){ ?>

<tr>
   <?php $i++;?>
   <td><?php echo $i;?></td>  
<td><?php echo $book['Author'];?></td>
<td><?php echo $book['Title'];?></td>
<td><?php echo $book['Subject'];?></td>
<td><?php echo $book['Publisher'];?></td>
<td><?php echo $book['Reserved'];?></td>
<td><?php echo $book['Volume'];?></td>

<td><?php echo $book['Booknumber'];?></td>
</tr>

<?php } ?>




</tbody>
</table>
</div>

</div>



</body>
</html>