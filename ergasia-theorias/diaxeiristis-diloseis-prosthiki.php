<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>I.C.S.D. | Περιβάλλον Διαχειριστή</title>
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

include "diaxeiristis-elegxos.php";
 include "syndesh-geniki.php";
  
 mysqli_set_charset($link, "utf8mb4");
 
 
 if (isset($_POST['submit'])) {
	 
$AM_foititii=$_POST['AM_foititi'];
$id_didaskaliass=$_POST['id_didaskalias'];
$resultset_1 = mysqli_query($link, "select * from dilosi where AM_foititi='".$AM_foititii."' and id_didaskalias='".$id_didaskaliass."';")  or die(mysql_error());
$count = mysqli_num_rows($resultset_1);


if($count == 0){
		
$stmt1 = $link->prepare("INSERT INTO dilosi (AM_foititi, id_didaskalias) VALUES (?, ?)");
$AM_foititi=$_POST['AM_foititi'];
$id_didaskalias=$_POST['id_didaskalias'];
$stmt1->bind_param("ss", $AM_foititi, $id_didaskalias);
$stmt1->execute();

	$message='<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ΕΠΙΤΥΧΙΑ ΠΡΟΣΘΗΚΗΣ ΔΙΔΑΣΚΑΛΙΑΣ ΣΕ ΔΗΛΩΣΗ!</strong> Η διδασκαλία που επιλέξατε προσθέθηκε επιτυχώς</div>';
mysqli_stmt_close($stmt1);

}else{
	header("Location: diaxeiristis-diloseis-prosthiki.php");
	$message='<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ΑΠΟΤΥΧΙΑ ΔΗΜΙΟΥΡΓΙΑΣ ΛΟΓΑΡΙΑΣΜΟΥ!</strong> Τα στοιχεία που δώσατε είναι λάθος</div>';
	
	exit();
	}
 }

?>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- logotypo -->
  
  <span class="" style="font-size:25px; cursor:pointer;" onclick="openNav()"><div class="symvolo-menu"></div>
																			<div class="symvolo-menu"></div>
																			<div class="symvolo-menu"></div></span>
  
  <a class="navbar-brand ml-5" href="diaxeiristis-arxiki.php">
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
    <li class="nav-item active">
      <a class="nav-link" href="diaxeiristis-arxiki.php">Αρχική</a>
    </li>
	
	<li class="nav-item">
      <a class="nav-link" href="diaxeiristis-plirofories.php">Πληροφορίες</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="diaxeiristis-epikoinonia.php">Επικοινωνία</a>
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
			<a href="diaxeiristis-arxiki.php" class="text-muted text-decoration-none small">Αρχική</a>
		</li>
		
		<li class="nav-item">
			<a class="text-muted text-decoration-none small">&nbsp;>&nbsp;</a>
		</li>
		
		<li class="nav-item">
			<a href="diaxeiristis-diloseis.php" class="text-muted text-decoration-none small">Δηλώσεις</a>
		</li>
		
		<li class="nav-item">
			<a class="text-muted text-decoration-none small">&nbsp;>&nbsp;</a>
		</li>
		
		<li class="nav-item active">
			<a class="text-dark text-decoration-none small">Προσθήκη</a>
		</li>
	</ul>
</nav>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="mt-5"></div>
  <li class="ena">
  <a href="diaxeiristis-diaxeiristes.php">Διαχειριστές</a>
  <a href="diaxeiristis-didaskontes.php">Διδάσκοντες</a>
  <a href="diaxeiristis-foitites.php">Φοιτητές</a>
  <a href="diaxeiristis-mathimata.php">Μαθήματα</a>
  <a href="diaxeiristis-didaskalies.php">Διδασκαλίες</a>
  <a href="diaxeiristis-diloseis.php" style="background-color:black;">Δηλώσεις</a>
  </li>
</div>

<body>



<div class="container-fluid">
	<h3 class="mt-4">Δημιουργία Δήλωσης</h3>
	<div class="grammikatoapotitlo"></div>
	<div><?php if(isset($message)) { echo $message; } ?>
	<div class="alert alert-warning">Για να προσθέσετε μαθήματα θα πάτε στην ενότητα τροποποίησης δήλωσης. Εδώ απλώς δημιουργείτε την δήλωση.</div>
</div>
	<div class="container">
            <div class="row justify-content-center">
			
			
			
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Στοιχεία Δήλωσης / Προσθήκη Διδασκαλίας</h3></div>
                            <div class="card-body">
							<div class="login-form">
    <form name="frmUser" method="post" action="">

        <div class="form-group">
            <input type="text" name="AM_foititi" class="form-control" placeholder="AM Φοιτητή" required="required">	
        </div>
		
		<div class="form-group">
            <input type="text" name="id_didaskalias" class="form-control" placeholder="ID Διδασκαλίας" required="required">	
        </div>
		
        <div class="form-group mt-5">
            <button type="submit" name="submit" value="Submit" class="btn btn-primary">Δημιουργία Δήλωσης</button>
			<a href="diaxeiristis-diloseis.php" class="btn btn-secondary active" role="button" aria-pressed="true">Ακύρωση / ΠΙΣΩ</a>
        </div>
               
    </form>
</div>	    
                        </div>
                        </div>
                </div>
				
				<div class="col-lg-6" style="padding-top:50px;">
                    <?php
                   
                    require_once "syndesh-geniki.php";
                    
                    
                    $sql = "select * from foititis";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped" id="myTable">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th style='font-size:13px;'>ΑΜ Φοιτητή</th>";
										echo "<th style='font-size:13px;'>Επώνυμο Φοιτητή</th>";
										echo "<th style='font-size:13px;'>Όνομα Φοιτητή</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td class='small'>" . $row['AM_foititi'] . "</td>";
										echo "<td class='small'>" . $row['eponimo_foititi'] . "</td>";
										echo "<td class='small'>" . $row['onoma_foititi'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                         
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>Δεν βρέθηκαν φοιτητές του τμήματος!</em></div>';
                        }
                    } else{
                        echo "Κάτι πήγε λάθος. Προσπαθήστε ξανα αργότερα";
                    }
 
                    
                 
                    ?>
					
					
					 <?php
                   
                    require_once "syndesh-geniki.php";
                    
                    
                    $sql = "select * from didaskalia, mathima where didaskalia.id_mathimatos=mathima.id_mathimatos;";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped" id="myTable">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th style='font-size:13px;'>ID</th>";
										echo "<th style='font-size:13px;'>Όνομα Μαθήματος</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td class='small'>" . $row['id_didaskalias'] . "</td>";
										echo "<td class='small'>" . $row['onoma_mathimatos'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                         
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>Δεν βρέθηκαν διδασκαλίες του τμήματος!</em></div>';
                        }
                    } else{
                        echo "Κάτι πήγε λάθος. Προσπαθήστε ξανα αργότερα";
                    }
 
                    mysqli_close($link);
                 
                    ?>
                </div>
				
				
            </div>
			
        </div>
		<div style="padding-top:283px;"></div>
</div>


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