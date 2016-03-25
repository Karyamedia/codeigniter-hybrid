<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Redis Configuration
|--------------------------------------------------------------------------
|
| Note: Redis is an in-memory key-value store which can operate in LRU cache mode. 
|       To use it, you need Redis server and phpredis PHP extension.
|
*/

$config['socket_type'] = 'tcp'; //`tcp` or `unix`
$config['socket'] = '/var/run/redis.sock'; // in case of `unix` socket type
$config['host'] = '127.0.0.1';
$config['password'] = NULL;
$config['port'] = 6379;
$config['timeout'] = 0;