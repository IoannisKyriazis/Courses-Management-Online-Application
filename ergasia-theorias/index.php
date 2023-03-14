<!DOCTYPE HTML>
<?php
session_start();
include("functions.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>I.C.S.D. | Αρχική</title>
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
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Αρχική</a>
    </li>
    <li class="nav-item">
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


<div class="container-fluid">
	<h1 class="mt-4">Καλώς ήλθατε!</h1>
	<div class="grammikatoapotitlo"></div>
	
	
		<div class="card bg-light text-dark">
			<div class="card-body">Η συγκεκριμένη ιστοσελίδα αποτελεί ένα μέσο διαχείρισης μαθημάτων για την επίτευξη της εκπαιδευτικής διαδικασίας.</div>
		</div>
		
		<div class="card bg-light text-dark">
			<div class="card-body">Εάν δεν διαθέτετε στοιχεία σύνδεσης, μπορείτε να περιηγηθείτε στα μαθήματα του τμήματος.</div>
		</div>
		
		<?php
        print_message();
?>
		
		<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Είσοδος Χρήστη</h3></div>
                            <div class="card-body">
                                <form name="login" action="login.php" method="post">
                                    <div class="input-group-prepend mt-2"><span class="input-group-text">Όνομα Χρήστη (username)</span></div>
									<input type="text" name="username" class="form-control" placeholder="Εισάγετε όνομα χρήστη..." required="required">
                                    <div class="input-group-prepend mt-5"><span class="input-group-text">Συνθηματικό (password)</span></div>
                                    <input type="password" name="password" class="form-control" placeholder="Εισάγετε κωδικό πρόσβασης..." required="required">
									<div class="mt-4"></div>
									
									
                                <div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary btn-block">Σύνδεση</button>
								</div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small">Προκειμένου να δημιουργήσετε λογαριασμό στο τμήμα, θα πρέπει να επικοινωνήσετε με τους διαχειριστές του συστήματος.</div>
                            </div>
                        </div>
                </div>
            </div>
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