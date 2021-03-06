<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Database Connection
    |--------------------------------------------------------------------------
    |
    | The database connection.
    */
    'database' => 'mysql',

    /*
    |--------------------------------------------------------------------------
    | Table Folder
    |--------------------------------------------------------------------------
    |
    | Where to store the table files.
    */
    'table_folder' => storage_path('laradump/tables'),

    /*
    |--------------------------------------------------------------------------
    | Data Folder
    |--------------------------------------------------------------------------
    |
    | Where to store the data files.
    */
    'data_folder' => storage_path('laradump/data'),
];
