<?php
/**
 * Created by PhpStorm.
 * User: Dasun Dissanayake
 * Date: 2020-02-17
 * Time: 12:59 AM
 */

return [
    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | API KEY given by Shoutout
    |
    */
    'api_key' => 'XXXXXXXXX.XXXXXXXXX.XXXXXXXXX',

    /*
    |--------------------------------------------------------------------------
    | SMS Source
    |--------------------------------------------------------------------------
    |
    | SMS Source given by Shoutout
    |
    */
    'sms_source' => 'ShoutDEMO',

    /*
    |--------------------------------------------------------------------------
    | Email Source
    |--------------------------------------------------------------------------
    |
    | Email Source given by Shoutout
    |
    */
    'email_source' => 'ShoutDEMO <shoutdemo@getshoutout.com>',

    /*
    |--------------------------------------------------------------------------
    | Log Enable
    |--------------------------------------------------------------------------
    |
    | Log enable must be true or false. true is recommended for safety reasons
    |
    */
    'log_enable' => false,

    /*
    |--------------------------------------------------------------------------
    | Log Path
    |--------------------------------------------------------------------------
    |
    | If 'log_enable' is true then log files generated in this path
    |
    */
    'log_path' => storage_path('logs/shoutout'),

    /*
    |--------------------------------------------------------------------------
    | Log File Name
    |--------------------------------------------------------------------------
    |
    | If 'log_file_name' is null then write logs as daily log files else write logs on given log file (ex: shoutout.log)
    |
    */
    'log_file_name' => null,
];