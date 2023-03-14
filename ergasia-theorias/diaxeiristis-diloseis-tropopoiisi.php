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
include "functions.php";
include "syndesh-geniki.php";
	$result1 = mysqli_query($link,"select * from didaskalia, mathima, didaskon, foititis, dilosi where dilosi.AM_foititi='" . $_GET['AM_foititi'] . "' and dilosi.id_didaskalias=didaskalia.id_didaskalias and mathima.id_mathimatos=didaskalia.id_mathimatos and dilosi.AM_foititi=foititis.AM_foititi and didaskalia.id_didaskonta=didaskon.id_didaskonta");
$row1= mysqli_fetch_array($result1);

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
    <li class="nav-item">
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
			<a class="text-dark text-decoration-none small">Τροποποίηση</a>
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
	<h3 class="mt-4">Τροποποίηση Δήλωσης φοιτητή</h3>
	<div class="grammikatoapotitlo"></div>
	<div style="padding-top:50px;"></div>
	<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-2">
				
				<div><h5><?php echo $row1['onoma_foititi']; ?> <?php echo $row1['eponimo_foititi']; ?> <?php echo $_GET['AM_foititi']; ?></h5></div>
				<?php  echo '<a href="diaxeiristis-diloseis-tropopoiisi-prosthiki.php?AM_foititi='. $row1['AM_foititi'] .'" class="btn btn-success ml-auto"><i class="fa fa-plus"></i> Προσθήκη Διδασκαλίας</a>'; ?>
				   <?php
                   
                    require_once "syndesh-geniki.php";
                    
                    
                    $sql = "select * from didaskalia, mathima, didaskon, foititis, dilosi where dilosi.AM_foititi='" . $_GET['AM_foititi'] . "' and dilosi.id_didaskalias=didaskalia.id_didaskalias and mathima.id_mathimatos=didaskalia.id_mathimatos and dilosi.AM_foititi=foititis.AM_foititi and didaskalia.id_didaskonta=didaskon.id_didaskonta";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped" id="myTable">';
                                echo "<thead>";
                                    echo "<tr>";
										echo "<th class='small'>ID Διδασαλίας</th>";
										echo "<th class='small'>Όνομα Μαθήματος</th>";
										echo "<th class='small'>Βαθμός Θεωρίας</th>";
										echo "<th class='small'>Βαθμός Εργαστηρίου</th>";
										echo "<th class='small'>Τελικός Βαθμός</th>";
										echo "<th class='small'>Κατάσταση</th>";
										echo "<th class='small'>Ενέργεια</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
										echo "<td class='small'>" . $row['id_didaskalias'] . "</td>";
										echo "<td class='small'>" . $row['onoma_mathimatos'] . "</td>";
										echo "<td>" . $row['vathmostheorias'] . "</td>";
										echo "<td>" . $row['vathmosergastiriou'] . "</td>";
										echo "<td class='font-weight-bold'>" . $row['telikosvathmos'] . "</td>";
										echo "<td class='font-weight-bold'>" . $row['katastasi'] . "</td>";
										echo "<td>";
											echo '<a href="diaxeiristis-diloseis-tropopoiisi-diagrafi.php?id_dilosis='. $row['id_dilosis'] .'" class="mr-3" title="Διαγραφή Διδασκαλίας" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                         
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>Δεν βρέθηκαν δηλώσεις φοιτητών!</em></div>';
                        }
                    } else{
                        echo "Κάτι πήγε λάθος. Προσπαθήστε ξανα αργότερα";
                    }
 
                    
                    mysqli_close($link);
                    ?>
                </div>
				
				
				
				
            </div>
        </div>
		<div style="padding-top:411px;"></div>
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