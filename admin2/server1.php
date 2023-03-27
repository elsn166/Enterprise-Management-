<?php
$table = 'register_asset';
 
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'name_of_asset', 'dt' => 0 ),
    array( 'db' => 'site_name','dt' => 1),
    array( 'db' => 'quantity', 'dt' => 2 ),
    array( 'db' => 'installed_date', 'dt' => 3, 
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    ),
    array( 'db' => 'end_date', 'dt' => 4, 
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }

    ),
    // array( 'db' => '', 'dt' => 4 ),
);
   
 
$sql_details = array(
    'user' => 'vewon_website',
    'pass' => 'vewon@2021',
    'db'   => 'vewon_website',
    'host' => 'localhost'
);
 
 
require( 'datatables/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>