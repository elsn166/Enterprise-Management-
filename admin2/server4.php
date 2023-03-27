<?php
$table = 'service_register_asset';
 
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'work_order', 'dt' => 0 ),
    array( 'db' => 'date1','dt' => 1,
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    ),
    array( 'db' => 'service_visit', 'dt' => 2 ),
    array( 'db' => 'contract1', 'dt' => 3 ),
    array( 'db' => 'primary_name', 'dt' => 4 ),
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
