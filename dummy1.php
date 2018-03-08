<?php 

   $pdf = $_FILES['filein']['name'];
   $tmp = $_FILES['filein']['tmp_name'];
 #  move_uploaded_file($tmp, "C:/xampp/htdocs/upload/");
   
   move_uploaded_file($tmp, $_SERVER['DOCUMENT_ROOT']."/upload/".$pdf);
  
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" src="js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="css/tem1.css">
	<title></title>
</head>
<body>
<h1>Data-data peserta Lomba</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No Handphone</th>
      <th scope="col">Sinopsis</th>
      <th scope="col">File</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $_POST["nama"]; ?></td>
      <td><?php echo $_POST["imel"]; ?></td>
      <td><?php echo $_POST["nohp"]; ?></td>
      <td><?php echo $_POST["sinop"]; ?></td>
      <td><?php echo $pdf; ?></td>     
    </tr>
    

  </tbody>
</table>

</body>
</html>