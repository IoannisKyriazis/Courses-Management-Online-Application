<?php
include "didaskon-elegxos.php";
include "syndesh-geniki.php";

header('Content-Encoding: UTF-8');
	header('Content-Type: text/csv; charset=UTF-8');  
    header('Content-Disposition: attachment; filename=eksagogi-foititwn.csv');
	  
    $output = fopen("php://output", "w");  
	  
    fputcsv($output, array('ΑΜ Φοιτητή', 'Επώνυμο Φοιτητή', 'Όνομα Φοιτητή'));  
	  
    $sqlSelect = "select dilosi.AM_foititi, foititis.eponimo_foititi, foititis.onoma_foititi from didaskalia, mathima, didaskon, foititis, dilosi, omadaxrhsth,omadaxrhsth_me_foititi where dilosi.id_didaskalias='".$_GET['id_didaskalias']."' and omadaxrhsth.username=omadaxrhsth_me_foititi.username and dilosi.id_didaskalias=didaskalia.id_didaskalias and mathima.id_mathimatos=didaskalia.id_mathimatos and dilosi.AM_foititi=foititis.AM_foititi and didaskalia.id_didaskonta=didaskon.id_didaskonta  and foititis.AM_foititi=omadaxrhsth_me_foititi.AM_foititi";  
	  
    $result = mysqli_query($link, $sqlSelect); 
	
    while($row = mysqli_fetch_assoc($result))  
    {  
        fputcsv($output, $row);  
    }  
    fclose($output);
	
?>