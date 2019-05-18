<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proiect</title>
         <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/table.css"/>
      
  
    </head>
    <body>
        <form method="post" action="login.php" align="center">
        <table align="center">
            <th colspan="2"><h1>Register</h1></th>
            <tr style="height:30px"><td>Nume:</td><td> <input type="text" size="20" name="nume"/>  </td></tr>
            <tr style="height:30px"><td>Parola:</td><td><input type="text" size="20" name="parola"/></td></tr>
            <tr style="height:30px"><td colspan="2"><input type="Submit" value="Register"</td></tr>
         </table>
        </form>
       <?php
      
$data = simplexml_load_file('admin.xml');
$data->track->contor=$data->track->contor+1;
    


$handle=fopen("admin.xml","wb");
fwrite($handle,$data->asXML());
fclose($handle);

       ?>
        
             
         
        
    </body>
</html> 
