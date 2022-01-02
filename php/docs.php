<?php
	header('Access-Control-Allow-Origin: *');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	$dir = 'md/docs';
	// $urlBase = 'https://listingslab.com/public/md/docs/';
	$urlBase = 'http://localhost:8888/md/docs/';

	$dirArr = scandir($dir);
	// print_r ( json_encode( $markdownDocs ) )
	$docs = array();           

    for ($i = 0; $i < count( $dirArr ); $i++ ){
    	// print_r ('<br />' .$i);
    	if ( $dirArr[ $i ] != '.' && $dirArr[ $i ] != '..' && $dirArr[ $i ] !=  '.DS_Store' ){
	    	$tempDoc = array();  
	    	// $tempDoc['type'] = 'doc';
	    	$tempDoc['url'] = $urlBase . $dirArr[ $i ];
	    	$tempDoc['filename'] = $dirArr[ $i ];
	    	$tempDoc[ 'auth' ] = file( $dir . '/' . $dirArr[ $i ])[0];
	    	$tempDoc[ 'title' ] = file( $dir . '/' . $dirArr[ $i ])[1];
	    	array_push($docs, $tempDoc);
	    }

   //  	
    		
   //  		$lineNum = 0;
			// foreach(file( $dir . '/' . $dirArr[ $i ]) as $line) {
			// 	$lineNum ++;
			// 	
			// }

   //  	}    	
    }
    print_r ( json_encode($docs) ) ;
?>