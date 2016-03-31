<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**

    +-+-+-+-+-+-+-+-+-+
    |M|E|N|T|O|R|I|N|G|
    +-+-+-+-+-+-+-+-+-+

 * Mentoring - Mentor Mentee System
 *
 * https://gitlab.com/groups/karyamedia
 * https://gitlab.com/karyamedia/mentoring
 *
 * PHP version 5
 *
 * @category   controllers
 * @package    Asset.php
 * @author     Nizam <nizam@karyamedia.net>
 * @license    http://www.codeigniter.com/userguide3/license.html
 * @copyright  2015 Karyamedia
 * @version    0.1
 *
*/

/**
 * Asset URL
 * 
 * Create a local URL to your assets based on your basepath.
 *
 * @access	public
 * @param   string
 * @return	string
 */
if (!function_exists('asset')) {
    function asset($uri = '', $group = FALSE) {
        $CI = & get_instance();
        
        if (!$dir = $CI->config->item('assets_path')) {
            $dir = 'resources';
        }
        
        if ($group) {
            return $CI->config->base_url($dir. '/' . $group . '/' . $uri);
        } else {
            return $CI->config->base_url($dir. '/' . $uri);
        }
    }
}

if (!function_exists('assets')) {
    function assets($uri = '', $group = FALSE) {
        $CI = & get_instance();
        
        if (!$dir = $CI->config->item('assets_path')) {
            $dir = 'asset';
        }
        
        if ($group) {
            return $CI->config->base_url($dir. '/' . $group . '/' . $uri);
        } else {
            return $CI->config->base_url($dir. '/' . $uri);
        }
    }
}
/* End of file url_helper.php */
/* Location: ./application/helpers/Asset_helper.php */