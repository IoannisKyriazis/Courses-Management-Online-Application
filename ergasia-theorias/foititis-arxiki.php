
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>I.C.S.D. | Περιβάλλον Φοιτητή</title>
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
include "foititis-elegxos.php";
include "syndesh-geniki.php";
	
	
    $select= "select * from omadaxrhsth, omadaxrhsth_me_foititi, foititis where omadaxrhsth.username = '".$_SESSION['username']."' and omadaxrhsth.username=omadaxrhsth_me_foititi.username and foititis.AM_foititi=omadaxrhsth_me_foititi.AM_foititi";
    $sql = mysqli_query($link,$select);
    $row = mysqli_fetch_assoc($sql);
    
?>


<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- logotypo -->
  
  <span class="" style="font-size:25px; cursor:pointer;" onclick="openNav()"><div class="symvolo-menu"></div>
																			<div class="symvolo-menu"></div>
																			<div class="symvolo-menu"></div></span>
  
  <a class="navbar-brand ml-5" href="foititis-arxiki.php">
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
      <a class="nav-link" href="foititis-arxiki.php">Αρχική</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="foititis-mathimata.php">Μαθήματα</a>
    </li>
	
	<li class="nav-item">
      <a class="nav-link" href="foititis-plirofories.php">Πληροφορίες</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="foititis-epikoinonia.php">Επικοινωνία</a>
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
  <a href="foititis-dilosi.php">Δήλωση</a>
  <a href="foititis-vathmologia.php">Βαθμολογία</a>
  <a href="foititis-statistika-mathimatapouperastikan.php">Στατιστικά</a>
  <a href="foititis-profile.php">Προφίλ</a>
  </li>
</div>

<body>



<div class="container-fluid">
	<h3 class="mt-4">Καλώς ήλθατε, <?php echo $row['onoma_foititi']?> <?php echo $row['eponimo_foititi']?>!</h3>
	<div class="grammikatoapotitlo"></div>
	
	
		<div class="card bg-light text-dark">
			<div class="card-body bg-success">Έχετε πραγματοποιήσει επιτυχή είσοδο στην εφαρμογή και βρίσκεστε στο περιβάλλον του φοιτητή.</div>
		</div>
		
		<div class="card bg-light text-dark">
			<div class="card-body">Από το παρόν περιβάλλον ως φοιτητής μπορείτε να εγγραφείτε σε μαθήματα, να δείτε βαθμολογίες και στατιστικά.</div>
		</div>
	<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
						<div style="padding-top:100px;"></div>
						<div class="input-group">
							<div class="form-outline">
								<input type="text" class="form-control rounded" id="myInput1" onkeyup="myFunction1()" placeholder="Όνομα Μαθήματος...">
							</div>
							
							<span class="input-group-text" id="search-addon">
								<i class="fas fa-search"></i>
							</span>
							<div style="padding-right:50px;"></div>
							<div class="form-outline">
								<input type="text" class="form-control rounded" id="myInput2" onkeyup="myFunction2()" placeholder="Επώνυμο Διδάσκοντα...">
							</div>
							
							<span class="input-group-text" id="search-addon">
								<i class="fas fa-search"></i>
							</span>
							
						</div>
                    </div>
                    <?php
                   
                    require_once "syndesh-geniki.php";
                    
                    $sql = "select * from didaskalia, mathima, didaskon, foititis, dilosi, omadaxrhsth,omadaxrhsth_me_foititi where dilosi.id_didaskalias=didaskalia.id_didaskalias and didaskalia.id_mathimatos=mathima.id_mathimatos and didaskalia.id_didaskonta=didaskon.id_didaskonta and dilosi.AM_foititi=foititis.AM_foititi and omadaxrhsth.username=omadaxrhsth_me_foititi.username and foititis.AM_foititi=omadaxrhsth_me_foititi.AM_foititi and omadaxrhsth.username = '".$_SESSION['username']."' and (dilosi.katastasi='ΑΠΟΤΥΧΙΑ' or dilosi.katastasi is null);";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped" id="myTable">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Όνομα Μαθήματος</th>";
										echo "<th>Επώνυμο Διδάσκοντα</th>";
										echo "<th>Ενέργεια</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['onoma_mathimatos'] . "</td>";
										echo "<td>" . $row['eponimo_didaskonta'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="foititis-arxiki-diavasma.php?id_didaskalias='. $row['id_didaskalias'] .'" class="mr-3" title="Δείτε Περισσότερα" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
										 echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                         
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>Δεν βρέθηκε δήλωση φοιτητή!</em></div>';
                        }
                    } else{
                        echo "Κάτι πήγε λάθος. Προσπαθήστε ξανα αργότερα";
                    }
 
                    
                    mysqli_close($link);
                    ?>
                </div>
            </div> 
		<div style="padding-top:305px;"></div>
        </div>
		<div class="mt-5"></div>
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


<script>
function myFunction1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<script>
function myFunction2() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>