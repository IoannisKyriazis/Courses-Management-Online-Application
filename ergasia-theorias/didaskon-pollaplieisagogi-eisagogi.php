<?php

include "didaskon-elegxos.php";
include "syndesh-geniki.php";

if(isset($_POST["upload"]))
{
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $AM_foititi = mysqli_real_escape_string($link, $data[0]);
    $vathmostheorias = mysqli_real_escape_string($link, $data[1]);  
    $vathmosergastiriou = mysqli_real_escape_string($link, $data[2]);
    $query = "UPDATE dilosi set vathmostheorias='$vathmostheorias', vathmosergastiriou='$vathmosergastiriou' WHERE id_didaskalias='" . $_GET['id_didaskalias'] . "' and AM_foititi='$AM_foititi'";
    mysqli_query($link, $query);
	
	
	$result = mysqli_query($link,"select distinct * from foititis, dilosi, didaskalia, mathima, omadaxrhsth, omadaxrhsth_me_didaskonta, didaskon where dilosi.id_didaskalias='" . $_GET['id_didaskalias'] . "' and dilosi.AM_foititi='$AM_foititi' and omadaxrhsth.username=omadaxrhsth_me_didaskonta.username and didaskon.id_didaskonta=omadaxrhsth_me_didaskonta.id_didaskonta and didaskalia.id_didaskonta=didaskon.id_didaskonta and dilosi.AM_foititi=foititis.AM_foititi and mathima.id_mathimatos=didaskalia.id_mathimatos and didaskalia.id_didaskalias=dilosi.id_didaskalias");
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
	
	mysqli_query($link,"UPDATE dilosi set telikosvathmos='$telikosvathmos1',katastasi='$epityxia' WHERE id_didaskalias='" . $_GET['id_didaskalias'] . "' and AM_foititi='$AM_foititi'");

}
elseif($vathmostheorias1<$periorismostheorias1 || $vathmosergastiriou1<$periorismosergastiriou1){
	$telikosvathmos1=(($vathmostheorias1 * $varostheorias1) + ($vathmosergastiriou1 * $varosergastiriou1));
	mysqli_query($link,"UPDATE dilosi set telikosvathmos='$telikosvathmos1',katastasi='$apotyxia' WHERE id_didaskalias='" . $_GET['id_didaskalias'] . "' and AM_foititi='$AM_foititi'");
}
else{
	mysqli_query($link,"UPDATE dilosi set katastasi is null WHERE id_didaskalias='" . $_GET['id_didaskalias'] . "' and AM_foititi='$AM_foititi'");
}
	
	
   }
   fclose($handle);
   echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ΕΠΙΤΥΧΙΑ</strong> Το αρχείο μεταφορτώθηκε με επιτυχία. Η βαθμολογία προστέθηκε με επιτυχία!</div>';
  }
  else
  {
   echo '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ΑΠΟΤΥΧΙΑ</strong> Το σύστημα δέχεται μόνο CSV αρχεία</div>';
  }
 }
 else
 {
  echo '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ΑΠΟΤΥΧΙΑ</strong> Παρακαλώ επιλέξτε αρχείο!</div>';
 }
}
?>


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
	  
		
		
</head>



<body>

<div class="container-fluid">

<h3 class="mt-4">Επιλογή .csv αρχείου για ανέβασμα</h3>
	<div class="grammikatoapotitlo"></div>
	<div style="padding-top:50px;"></div>
	<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
				<a href="didaskon-pollaplieisagogi.php" class="btn btn-danger ml-auto"><i class="fas fa-arrow-alt-circle-left"></i> ΠΙΣΩ</a>
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Επιλογή Αρχείου</h3></div>
                            <div class="card-body">

<form action="" method="post" enctype="multipart/form-data">

	<div class="custom-file">
		<input type="file" class="custom-file-input" name="product_file" accept=".csv">
		<label class="custom-file-label" for="customFile">Επιλέξτε αρχείο</label>
		<div style="padding-top:20px;"></div>
		<button type="submit" name="upload" class="btn btn-success"><i class="fas fa-file-import"></i> Εισαγωγή</button>

	</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>

<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>