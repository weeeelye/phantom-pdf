<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Temporary File Path
    |--------------------------------------------------------------------------
    |
    | The temporary file path where html and pdf files are stored.
    |
    */

    'temporary_file_path' => storage_path(),

    /*
    |--------------------------------------------------------------------------
    | The url for the base tag
    |--------------------------------------------------------------------------
    |
    | Since the HTML file that is loaded into PhantomJS is loaded from the file system,
    | any relative references to assets will not work. We fix this by adding a base tag
    | to the html file. Set to null to skip the base tag entirely or "/" to set to base path
    |
    */

    'base_url' => '/',

    /*
    |--------------------------------------------------------------------------
    | Phantom Process Timeout (Seconds)
    |--------------------------------------------------------------------------
    |
    | PhantomJS is being executed in a separate process, here we can specify
    | how long to wait for the process to finish before aborting.
    |
    */

    'timeout' => 25,

    /*
    |--------------------------------------------------------------------------
    | PhantomJS Binary Path
    |--------------------------------------------------------------------------
    |
    | The path to the PhantomJS binary. This packages ships with the 64 bit linux build.
    | If you want to use another version, reference it here.
    |
    */

    'binary_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Conversion Script
    |--------------------------------------------------------------------------
    |
    | The script used by PhantomJS to convert the page to PDF. If not set the 
    | default script will be used.
    |
    */

    'conversion_script' => null,

    /*
    |--------------------------------------------------------------------------
    | PhantomJS Command Line Options
    |--------------------------------------------------------------------------
    |
    | Add list of wanted command line options for PhantomJS
    | List of available options can be found here:
    | http://phantomjs.org/api/command-line.html
    |
    */

    'command_line_options' => [
        '--ignore-ssl-errors=true',
        //'--debug=true',
    ]

];
