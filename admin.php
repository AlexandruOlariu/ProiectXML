


<?php
include 'connection.php';
$sql = "SELECT * FROM componente"; 
$result = mysqli_query($con, $sql)or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/table.css">
 
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
      <img src="img_avatar2.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="cautare.php">Cauta un produs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload another ITEM</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="logout.php"><strong>LOG OUT<strong></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="modificari.php"><strong>Modificari<strong></a>
    </li>
    
    
    
  </ul>
</nav>

<div class="container-fluid">
   
    
    <br><br> <br><br>
   
    
    
     <table rules="rows">
         <tr>
             <thead>
             <th>Nume</th>
             <th>Producator</th>
             
             <th>Pret</th>
             <th>Image</th>
             
             <th colspan="3" center="align">Actions</th>
     </THEAD>
     <tbody>
         </tr>
<?php
while($row = mysqli_fetch_array($result)) {
?>
         <tr style="border-bottom: 1px solid black;">
             <td style="width:300px">
                 <h1> <?php echo $row["Nume"]; ?></h1>
             </td>
             <td style="width:30px">
                 <h1> <?php echo $row["Producator"]; ?></h1>
             </td>
              <td style="width:300px" align="center">
                 <h1> <?php echo $row["Pret"]; ?></h1>
             </td>
             
             <td style="width:300px">
<?php
echo '<img src="'.$row['Img'].'" height="200" width="200"/>';
?>
</td>
<td>
<?php echo "<a href=\"view.php?ID=".$row['ID']."\">View</a> <a href=\"edit.php?ID=".$row['ID']."\">Edit</a> 
<a href=\"delete.php?ID=".$row['ID']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
</td>
    </tr>
<?php }?>
</tbody>
</table>
 
</div>

</body>
</html>


