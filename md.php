<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	// print_r( 'JSON array of the md folder<br /><br />' );
	
	$dir = 'md/docs';

	$dirArr = scandir($dir);
	// print_r ( json_encode( $markdownDocs ) )
	$docs = array();           

    for ($i = 0; $i < count( $dirArr ); $i++ ){
    	// print_r ('<br />' .$i);
    	$tempDoc = array();  
    	$tempDoc['type'] = 'doc';
    	$tempDoc['url'] = 'doc';
    	$tempDoc['filename'] = $dirArr[ $i ];
    	if ( $dirArr[ $i ] != '.' && $dirArr[ $i ] != '..' ){
    		array_push($docs, $tempDoc);
    	}
    	
    }
    print_r ( json_encode($docs) ) ;
?>