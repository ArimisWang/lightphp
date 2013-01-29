<?php
/**
 * a default configure php file to show you how to create a new configure file
 */

return array(
    'multiple_lang' => array(
        'switch' => 'on',
        'format' => '*.mo',
        'path'   => '/lang'
    );

    'plugins' => array(
        'factories' => array(),
        'alias' => array()
    ),

    'cache' => array(
        'type' => 'file',//file, apc, db, memcache
        'filepath' => '/tmp/cache', //if type equals file, then set this option 
        'db_host' => '127.0.0.1'
        'db_user' => '',
        'db_pass' => '',
        'distributed' => false, // is distributed
    ),

    'search' => array(
        'engin' => 'db', //db, elastic, solr
    );

    'database' => array(
        'dbs' => '', //mysql, oracle, mssql, db, ibase, nosql
        'host' => '',
        'user' => '',
        'pass' => ''
    ),


);

?>
