<!DOCTYPE HTML>

<html>
<?php
		include ("functions.php");
?>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>I.C.S.D. | Μαθήματα</title>
        <link href="css/styles.css" rel="stylesheet" />
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		
		
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- logotypo -->
  <a class="navbar-brand" href="index.php">
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
      <a class="nav-link" href="index.php">Αρχική</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="aplosxrhsths-mathimata.php">Μαθήματα</a>
    </li>
	
	<li class="nav-item">
      <a class="nav-link" href="aplosxrhsths-plirofories.php">Πληροφορίες</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="aplosxrhsths-epikoinonia.php">Επικοινωνία</a>
    </li>
  </ul>
  
  <ul class="nav navbar-nav ml-auto">
  <form action="index.php">
      <button type="submit" class="btn btn-primary text-light mx-auto">Σύνδεση</button>
    </form>
	</ul>
	</div>
</nav>



<nav class="nav text-dark bg-light py-2" name="navigation-menu">
	<ul class="nav pl-4">
		<li class="nav-item">
			<a href="index.php" class="text-muted text-decoration-none small">Αρχική</a>
		</li>
		
		<li class="nav-item">
			<a class="text-muted text-decoration-none small">&nbsp;>&nbsp;</a>
		</li>
		
		<li class="nav-item active">
			<a class="text-dark text-decoration-none small">Μαθήματα</a>
		</li>
		
	</ul>
</nav>



<main>
<div class="mt-2"></div>
   <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Όλα τα μαθήματα του τμήματος</h2>
						<div class="grammikatoapotitlo"></div>
						<div class="mt-5"></div>
						<div class="input-group">
							<div class="form-outline">
								<input type="text" class="form-control rounded" id="myInput" onkeyup="myFunction()" placeholder="Όνομα Μαθήματος...">
							</div>
							<span class="input-group-text" id="search-addon">
								<i class="fas fa-search"></i>
							</span>
						</div>
                    </div>
                    <?php
                   
                    require_once "syndesh-geniki.php";
                    
                    
                    $sql = "SELECT * FROM mathima";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped" id="myTable">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Κωδικός Μαθήματος</th>";
                                        echo "<th>Όνομα Μαθήματος</th>";
										echo "<th>Ενέργεια</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id_mathimatos'] . "</td>";
                                        echo "<td>" . $row['onoma_mathimatos'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="aplosxrhsths-diavasma.php?id_mathimatos='. $row['id_mathimatos'] .'" class="mr-3" title="Δείτε Πληροφορίες" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                         
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>Δεν βρέθηκαν μαθήματα!</em></div>';
                        }
                    } else{
                        echo "Κάτι πήγε λάθος. Προσπαθήστε ξανα αργότερα";
                    }
 
                    
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
<div class="mt-5"></div>
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
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
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