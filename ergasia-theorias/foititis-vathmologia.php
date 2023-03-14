
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
    $row1 = mysqli_fetch_assoc($sql);
    
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
    <li class="nav-item">
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



<nav class="nav text-dark bg-light py-2" name="navigation-menu">
	<ul class="nav pl-4">
		<li class="nav-item">
			<a href="foititis-arxiki.php" class="text-muted text-decoration-none small">Αρχική</a>
		</li>
		
		<li class="nav-item">
			<a class="text-muted text-decoration-none small">&nbsp;>&nbsp;</a>
		</li>
		
		<li class="nav-item active">
		<a class="text-dark small">Βαθμολογία</a>
		</li>
	</ul>
</nav>



<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="mt-5"></div>
  <li class="ena">
  <a href="foititis-dilosi.php">Δήλωση</a>
  <a href="foititis-vathmologia.php" style="background-color:black;">Βαθμολογία</a>
  <a href="foititis-statistika-mathimatapouperastikan.php">Στατιστικά</a>
  <a href="foititis-profile.php">Προφίλ</a>
  </li>
</div>

<body>



<div class="container-fluid">
	<h3 class="mt-4">Βαθμολογίες Μαθημάτων</h3>
	<div class="grammikatoapotitlo"></div>
	
	<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
						<div style="padding-top:100px;"></div>
						
                    </div>
                    <div class="col-md-12 mt-2">
					
					
				
				<?php  if($row1["oristikopoihmenh_dilosi"] == "OXI" || is_null($row1["oristikopoihmenh_dilosi"])) { echo '<h3 class="mt-4">Για να εμφανιστούν οι βαθμολογίες των μαθημάτων θα πρέπει να οριστικοποιήσετε την δήλωσή σας</h3>'; } else {?>
				 
					
				<div><h5><?php echo $row1['onoma_foititi']; ?> <?php echo $row1['eponimo_foititi']; ?> <?php echo $row1['AM_foititi']; ?></h5></div>
                   <?php
                   
                    require_once "syndesh-geniki.php";
                    
                    
                    $sql = "select * from didaskalia, mathima, didaskon, foititis, dilosi, omadaxrhsth,omadaxrhsth_me_foititi where omadaxrhsth.username='" . $_SESSION['username'] . "' and omadaxrhsth.username=omadaxrhsth_me_foititi.username and dilosi.id_didaskalias=didaskalia.id_didaskalias and mathima.id_mathimatos=didaskalia.id_mathimatos and dilosi.AM_foititi=foititis.AM_foititi and didaskalia.id_didaskonta=didaskon.id_didaskonta  and foititis.AM_foititi=omadaxrhsth_me_foititi.AM_foititi";
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
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
										echo "<td class='small'>" . $row['id_didaskalias'] . "</td>";
										echo "<td class='small'>" . $row['onoma_mathimatos'] . "</td>";
										echo "<td class='small'>" . $row['vathmostheorias'] . "</td>";
										echo "<td class='small'>" . $row['vathmosergastiriou'] . "</td>";
										echo "<td class='font-weight-bold'>" . $row['telikosvathmos'] . "</td>";
										echo "<td class='font-weight-bold'>" . $row['katastasi'] . "</td>";
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
					
				<?php } ?>
					
                </div>
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

