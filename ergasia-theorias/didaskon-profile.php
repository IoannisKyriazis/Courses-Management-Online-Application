
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>I.C.S.D. | Περιβάλλον Διδάσκοντα</title>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="style.css"/>
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<style>
	.symvolo-menu {
  width: 25px;
  height: 3px;
  background-color: white;
  margin: 6px 0;
  margin-left: 20px;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #343a40;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.ena a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.ena a:hover {
  color: #f1f1f1;
  background-color: black;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	</style>
		
		
</head>
<?php
include "didaskon-elegxos.php";
include "functions.php";
 include "syndesh-geniki.php";
	if(count($_POST)>0) {
		$password=$_POST['password'];
		$options = array("cost"=>4);
		$hashed_password=password_hash($password, PASSWORD_BCRYPT,$options); 
mysqli_query($link,"UPDATE didaskon,omadaxrhsth,omadaxrhsth_me_didaskonta set didaskon.onoma_didaskonta='" . $_POST['onoma_didaskonta'] . "', didaskon.eponimo_didaskonta='" . $_POST['eponimo_didaskonta'] . "', omadaxrhsth.password='$hashed_password' WHERE omadaxrhsth.username='" . $_SESSION['username'] . "' and didaskon.id_didaskonta=omadaxrhsth_me_didaskonta.id_didaskonta and omadaxrhsth.username=omadaxrhsth_me_didaskonta.username");
$message = '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ΕΠΙΤΥΧΙΑ ΕΠΕΞΕΡΓΑΣΙΑΣ ΛΟΓΑΡΙΑΣΜΟΥ!</strong> Τα στοιχεία του χρήστη ενημερώθηκαν επιτυχώς!.</div>';
}
$result = mysqli_query($link,"SELECT * FROM didaskon,omadaxrhsth,omadaxrhsth_me_didaskonta WHERE omadaxrhsth.username='" . $_SESSION['username'] . "' and didaskon.id_didaskonta=omadaxrhsth_me_didaskonta.id_didaskonta and omadaxrhsth.username=omadaxrhsth_me_didaskonta.username");
$row= mysqli_fetch_array($result);
    
?>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- logotypo -->
  
  <span class="" style="font-size:25px; cursor:pointer;" onclick="openNav()"><div class="symvolo-menu"></div>
																			<div class="symvolo-menu"></div>
																			<div class="symvolo-menu"></div></span>
  
  <a class="navbar-brand ml-5" href="didaskon-arxiki.php">
	<img <img src="photos/foto_panepistimiou.png" width="30" height="30" alt="">
  </a>

<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target" style="border:none;">
		<span><div class="symvolo-menu"></div>
				<div class="symvolo-menu"></div>
				<div class="symvolo-menu"></div></span>
	</button>
	
  <!-- menu -->
  <div class="collapse navbar-collapse" id="collapse_target">
  <ul class="navbar-nav text-center w-100 justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="didaskon-arxiki.php">Αρχική</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="didaskon-mathimata.php">Μαθήματα</a>
    </li>
	
	<li class="nav-item">
      <a class="nav-link" href="didaskon-plirofories.php">Πληροφορίες</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="didaskon-epikoinonia.php">Επικοινωνία</a>
    </li>
  </ul>
  
  <ul class="nav navbar-nav ml-auto">
      <a href="logout.php" class="btn btn-danger mx-auto">
          <span class="glyphicon glyphicon-log-out"></span> Αποσύνδεση
		</a>
    </ul>
	</div>
</nav>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="mt-5"></div>
  <li class="ena">
  <a href="didaskon-eisagogivathologias.php">Εισαγωγή / Τροποποίηση Βαθμολογίας</a>
  <a href="didaskon-eksagogivathmologias.php">Εμφάνιση / Εξαγωγή Βαθμολογίας</a>
  <a href="didaskon-eksagogifoititwn.php">Εξαγωγή Λίστας Φοιτητών</a>
  <a href="didaskon-statistika-arithmosanatethimenwn.php">Στατιστικά</a>
  <a href="didaskon-profile.php" style="background-color:black;">Προφίλ</a>
  </li>
</div>

<main role="main" class="container">
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light">Επεξεργασία Προφίλ</h3></div>
                            <div class="card-body">
	
	
    <div class="input-group-prepend mt-3"><span class="input-group-text">ID Διδάσκοντα</span>
    <input type="text" name="id_didaskonta" class="txtField" value="<?php echo $row['id_didaskonta']; ?>" disabled></div>
	
	<div class="input-group-prepend mt-3"><span class="input-group-text">Username</span>
	<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>" disabled></div>
	
	<div class="input-group-prepend mt-3"><span class="input-group-text">Email</span>
	<input type="text" name="email_didaskonta" class="txtField" value="<?php echo $row['email_didaskonta']; ?>" disabled></div>
	
	<div class="input-group-prepend mt-3"><span class="input-group-text">Όνομα Διδάσκοντα</span>
	<input type="text" name="onoma_didaskonta" class="txtField" value="<?php echo $row['onoma_didaskonta']; ?>"></div>
	
	<div class="input-group-prepend mt-3"><span class="input-group-text">Επώνυμο Διδάσκοντα</span>
	<input type="text" name="eponimo_didaskonta" class="txtField" value="<?php echo $row['eponimo_didaskonta']; ?>"></div>
	
	<div class="input-group-prepend mt-3"><span class="input-group-text">Βαθμίδα</span>
	<input type="text" name="vathmida_didaskonta" style="width:50%" class="txtField" value="<?php echo $row['vathmida_didaskonta']; ?>" disabled></div>
	
	<div class="input-group-prepend mt-3"><span class="input-group-text">Ρόλος</span>
	<input type="text" name="onoma_omadaxrhsth" class="txtField" value="<?php echo $row['onoma_omadaxrhsth']; ?>" disabled></div>
	
	<div class="input-group-prepend mt-3"><span class="input-group-text">Κωδικός Πρόσβασης</span>
	<input type="text" name="password" class="txtField" placeholder="Νέος κωδικός..."></div>
	
	
	<div class="mt-5"></div>
	<div class="input-group-prepend"><span class="input-group-text">Το ID του διδάσκοντα δεν μπορεί να τροποποιηθεί.</span></div>
	<div class="input-group-prepend"><span class="input-group-text">Το username του διδάσκοντα δεν μπορεί να τροποποιηθεί.</span></div>
	<div class="input-group-prepend"><span class="input-group-text">Το email του διδάσκοντα δεν μπορεί να τροποποιηθεί.</span></div>
	<div class="input-group-prepend"><span class="input-group-text">Η βαθμίδα του διδάσκοντα δεν μπορεί να τροποποιηθεί.</span></div>
	<div class="input-group-prepend"><span class="input-group-text">Ο ρόλος του διδάσκοντα δεν μπορεί να τροποποιηθεί.</span></div>
									
    <div class="form-group mt-5">
            <button type="submit" name="submit" value="Submit" class="btn btn-primary">Αποθήκευση</button>
			<a href="didaskon-arxiki.php" class="btn btn-secondary active" role="button" aria-pressed="true">Ακύρωση / ΠΙΣΩ</a>
        </div>

</div>
            </div>
        </div>
		</div></div>
</div>


</form>
</main>

<footer class="py-4 bg-dark mt-auto">
    <div class="container-fluid">
        <div class="d-flex small">
            <div class="text-muted p-2">Copyright © 2021 Kyriazis Ioannis | Papadopoulos Panagiotis | Mamoullelis Apostolos - All Rights Reserved.</div>
            <div class="text-muted ml-auto p-2">GR</div>
            <div>
        </div>
    </div>
</footer>
</body>
</html>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>