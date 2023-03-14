<!DOCTYPE HTML>
<?php
session_start();
include("functions.php");
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>I.C.S.D. | Πληροφορίες</title>
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
    <li class="nav-item">
      <a class="nav-link" href="aplosxrhsths-mathimata.php">Μαθήματα</a>
    </li>
	
	<li class="nav-item active">
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
			<a class="text-dark text-decoration-none small">Πληροφορίες</a>
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
                        <h2 class="pull-left">Πληροφορίες</h2>
						<div class="grammikatoapotitlo"></div>
						<div class="mt-5"></div>
						
						<div class="card text-dark bg-light mb-3">
						
						<div class="card-body">
						<h5><br>Στόχοι Εργασίας</h5>
						<p>Οι στόχοι της εργασίας είναι:<br>(α) η εξοικείωση των φοιτητών με τις τεχνολογίες
						   προγραμματισμού στο διαδίκτυο<br>(β) η συνεργασία μεταξύ τους στα πλαίσια ενός έργου
						   λογισμικού-πληροφορικής. Με το πέρας της εργασίας, οι φοιτητές θα έχουν την εμπειρία
						   και τις ικανότητες να σχεδιάζουν και να υλοποιούν διαδικτυακές εφαρμογές που
						   βασίζονται σε αρχιτεκτονική 3-tier με την χρήση μοντέρνων τεχνολογιών και κατάλληλων
						   γλωσσών επισήμανσης και προγραμματισμού.</p>
						
						<h5><br>Ομάδα Υλοποίησης</h5>
						
						<div class="container">
						<div class="row p-3">
						
						<div class="card text-light bg-dark mb-3 col-lg-4">
						<div class="card-header"><h6>Κυριαζής Ιωάννης</h6></div>
						<div class="card-body">
						<p>icsd18107@aegean.gr<br>321/2018107</p>
						</div>
						</div>
						
						<div class="card text-light bg-dark mb-3 col-lg-4">
						<div class="card-header"><h6>Παπαδόπουλος Παναγιώτης</h6></div>
						<div class="card-body">
						<p>icsd18161@aegean.gr<br>321/2018161</p>
						</div>
						</div>
						
						<div class="card text-light bg-dark mb-3 col-lg-4">
						<div class="card-header"><h6>Μαμουλέλλης Απόστολος</h6></div>
						<div class="card-body">
						<p>icsd17108@aegean.gr<br>321/2017108</p>
						</div>
						</div>
						
						</div>
						</div>
						
						<h5><br><br>Γλώσσες που χρησιμοποιήθηκαν</h5>
						<p>(α) PHP<br>(β) HTML<br>(γ) CSS<br>(δ) JavaScript<br>(ε) SQL</p>
						</div>
						</div>
						</div>
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