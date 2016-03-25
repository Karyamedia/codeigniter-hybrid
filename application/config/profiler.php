<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Profiler
| data are displayed when the Profiler is enabled.
| Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/profiling.html
|
*/

/*
|--------------------------------------------------------------------------
| Debug
|--------------------------------------------------------------------------
*/
$config['debug'] = TRUE;


/*
|--------------------------------------------------------------------------
| Postion of Debug Profiler
|
|		The location of the profiler bar. Valid locations are:
|
|			- bottom-left
|			- bottom-right
|			- top-left
|			- top-right
|			- bottom
|			- top
|
|--------------------------------------------------------------------------
*/
$config['position'] = 'bottom-left';