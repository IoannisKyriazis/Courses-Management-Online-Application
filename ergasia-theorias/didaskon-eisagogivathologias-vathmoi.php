

<!DOCTYPE HTML>
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
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
	  
	  
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
mysqli_query($link,"UPDATE dilosi set vathmostheorias='" . $_POST['vathmostheorias'] . "',vathmosergastiriou='" . $_POST['vathmosergastiriou'] . "' WHERE id_dilosis='" . $_GET['id_dilosis'] . "'");
$message = '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ΕΠΙΤΥΧΙΑ ΕΠΕΞΕΡΓΑΣΙΑΣ ΛΟΓΑΡΙΑΣΜΟΥ!</strong> Τα στοιχεία του χρήστη ενημερώθηκαν επιτυχώς!.</div>';
	
}
$result = mysqli_query($link,"select distinct * from foititis, dilosi, didaskalia, mathima, omadaxrhsth, omadaxrhsth_me_didaskonta, didaskon where dilosi.id_dilosis='" . $_GET['id_dilosis'] . "' and omadaxrhsth.username=omadaxrhsth_me_didaskonta.username and didaskon.id_didaskonta=omadaxrhsth_me_didaskonta.id_didaskonta and didaskalia.id_didaskonta=didaskon.id_didaskonta and dilosi.AM_foititi=foititis.AM_foititi and mathima.id_mathimatos=didaskalia.id_mathimatos and didaskalia.id_didaskalias=dilosi.id_didaskalias");
$row= mysqli_fetch_array($result);

$vathmostheorias1=$row['vathmostheorias'];
$vathmosergastiriou1=$row['vathmosergastiriou'];
$varostheorias1=$row['varostheorias'];
$varosergastiriou1=$row['varosergastiriou'];
$periorismostheorias1=$row['periorismostheorias'];
$periorismosergastiriou1=$row['periorismosergastiriou'];

$telikosvathmos1=0;
$epityxia='ΕΠΙΤΥΧΙΑ';
$apotyxia='ΑΠΟΤΥΧΙΑ';

if($vathmostheorias1>=$periorismostheorias1 && $vathmosergastiriou1>=$periorismosergastiriou1){
	
	$telikosvathmos1=(($vathmostheorias1 * $varostheorias1) + ($vathmosergastiriou1 * $varosergastiriou1));
	
	mysqli_query($link,"UPDATE dilosi set telikosvathmos='$telikosvathmos1',katastasi='$epityxia' WHERE id_dilosis='" . $_GET['id_dilosis'] . "'");

}
elseif($vathmostheorias1<$periorismostheorias1 || $vathmosergastiriou1<$periorismosergastiriou1){
	$telikosvathmos1=(($vathmostheorias1 * $varostheorias1) + ($vathmosergastiriou1 * $varosergastiriou1));
	mysqli_query($link,"UPDATE dilosi set telikosvathmos='$telikosvathmos1',katastasi='$apotyxia' WHERE id_dilosis='" . $_GET['id_dilosis'] . "'");
}
else{
	mysqli_query($link,"UPDATE dilosi set katastasi is null WHERE id_dilosis='" . $_GET['id_dilosis'] . "'");
}
    
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


<nav class="nav text-dark bg-light py-2" name="navigation-menu">
	<ul class="nav pl-4">
		<li class="nav-item">
			<a href="didaskon-arxiki.php" class="text-muted text-decoration-none small">Αρχική</a>
		</li>
		
		
		<li class="nav-item">
			<a class="text-muted text-decoration-none small">&nbsp;>&nbsp;</a>
		</li>
		
		<li class="nav-item active">
			<a class="text-dark text-decoration-none small">Εισαγωγή / Τροποποίηση Βαθμολογίας</a>
		</li>
	</ul>
</nav>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="mt-5"></div>
  <li class="ena">
  <a href="didaskon-eisagogivathologias.php" style="background-color:black;">Εισαγωγή / Τροποποίηση Βαθμολογίας</a>
  <a href="didaskon-eksagogivathmologias.php">Εμφάνιση / Εξαγωγή Βαθμολογίας</a>
  <a href="didaskon-eksagogifoititwn.php">Εξαγωγή Λίστας Φοιτητών</a>
  <a href="didaskon-statistika-arithmosanatethimenwn.php">Στατιστικά</a>
  <a href="didaskon-profile.php">Προφίλ</a>
  </li>
</div>

<body>



<div class="container-fluid">
	<h3 class="mt-4">Εισαγωγή / Τροποποίηση Βαθμολογίας</h3>
	<div class="grammikatoapotitlo"></div>
	<div style="padding-top:50px;"></div>
	<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-2">
				
				
				<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="didaskon-eisagogivathologias.php">Εισαγωγή / Τροποποίηση βαθμολογίας</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="didaskon-pollaplieisagogi.php">Πολλαπλή εισαγωγή / τροποποίηση βαθμολογίας</a>
    </li>
  </ul>
</nav>
<div style="padding-top:100px;"></div>
						<div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Στοιχεία</h3></div>
                            <div class="card-body">
							<form name="frmUser" method="post" action="">
                                    <div class="input-group-prepend mt-2"><span class="input-group-text">Βαθμός Θεωρίας</span></div>
									<input type="text" name="vathmostheorias" class="form-control" value="<?php echo $row['vathmostheorias']; ?>" >
									
									<div class="input-group-prepend mt-5"><span class="input-group-text">Βαθμός Εργαστηρίου</span></div>
                                    <input type="text" name="vathmosergastiriou" class="form-control" value="<?php echo $row['vathmosergastiriou']; ?>" >
									
									<div class="form-group mt-5">
            <button type="submit" name="submit" value="Submit" class="btn btn-primary">Αποθήκευση</button>
			<a href="didaskon-eisagogivathologias.php" class="btn btn-secondary active" role="button" aria-pressed="true">Ακύρωση / ΠΙΣΩ</a>
        </div>
									
                            </form>	    
                        </div>
                        </div>
                </div>
			
		   
		   
            </div>
        </div>
		<div style="padding-top:248px;"></div>
</div>
</div>


<footer class="py-4 bg-dark mt-auto">
    <div class="container-fluid">
        <div class="d-flex small">
            <div class="text-muted p-2">Copyright © 2021 Kyriazis Ioannis | Papadopoulos Panagiotis | Mamoullelis Apostolos - All Rights Reserved.</div>
            <div class="text-muted ml-auto p-2">GR</div>
            
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