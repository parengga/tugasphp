
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" src="js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="css/tem1.css">
	<title> </title>
</head>
<body>
	<h1>Form Lomba Karya Tulis</h1>

<form action="dummy1.php" method="post" enctype="multipart/form-data">



<select class="custom-select">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<div class="form-group-nama" >

    <label for="exampleName" >Nama lengkap</label>
    <input type="text" class="form-control" id="exampleName" name="nama" placeholder="Nama lengkap">
  </div>


  <div class="form-group-data">
 
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="imel" aria-describedby="emailHelp" placeholder="Enter email">
<br>
    <label for="examplehp" >No. Handphone</label>
    <input type="text" class="form-control" id="exampleName" name="nohp" placeholder="No. Handphone">
  </div>


  <div class="form-group-bio">
    <label for="exampleBio">Sinopsis</label>
    <textarea class="form-control" id="exampleBio"  rows="3" name="sinop" placeholder="Sinopsis" ></textarea>
  </div>

  <div class="form-group-gen">
  <label for="exampleGender">Gender</label><br>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  </div>
  

  <div class="form-group-input">
    <label for="exampleFormControlFile1">File input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filein">
  </div>

   <div class="form-check">
   <div style="padding: 15px">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <br>
  
</form>

</body>
</html>