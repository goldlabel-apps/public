<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	print_r( 'JSON array of the md folder<br /><br />' );


	$markdownDocs = array();           

    for ($i = 0; $i < 5; $i++ ){
    	print_r ('<br />' .$i);
    	$tempDoc = array();  
    	$tempDoc['type'] = 'doc';
    	array_push($markdownDocs, $tempDoc);
    }
    print_r ('<br /><br />');
    print_r ( json_encode($markdownDocs) ) ;
?>