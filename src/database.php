<?php

use Illuminate\Database\Capsule\Manager as DB;

global $wpdb;
global $table_prefix;
$db = new DB;

$db->addConnection([
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => $wpdb->collate,
    'prefix'    => $table_prefix,
]);

// Make this Capsule instance available globally via static methods... (optional)
$db->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$db->bootEloquent();