<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
 * @copyright  2016 Karyamedia
 * @version    0.1
 *
*/


//require APPPATH.'third_party/Twig/Autoloader.php';
//require FCPATH.'vendor/Twig/Twig/lib/Twig/Autoloader.php';
class Twig {

    public $twig;

    public $config;

    private $data = array();

    /**
     * 读取配置文件twig.php并初始化设置
     *
     */
    public function __construct($config)
    {
        $config_default = array(
            'cache_dir' => false,
            'debug' => false,
            'auto_reload' => true,
            'extension' => '.tpl',
        );
        $this->config = array_merge($config_default, $config);
        Twig_Autoloader::register ();
        $loader = new Twig_Loader_Filesystem ($this->config['template_dir']);
        $this->twig = new Twig_Environment ($loader, array (
            'cache' => $this->config['cache_dir'],
            'debug' => $this->config['debug'],
            'auto_reload' => $this->config['auto_reload'],
        ) );
        $CI = & get_instance ();
        $CI->load->helper(array('url'));
        $this->twig->addFunction(new Twig_SimpleFunction('site_url', 'site_url'));
        $this->twig->addFunction(new Twig_SimpleFunction('base_url', 'base_url'));
        $this->twig->addFunction(new Twig_SimpleFunction('lang', 'lang', array('is_safe' => array('html'))));
        $this->twig->addFunction(new Twig_SimpleFunction('form_open', 'form_open', array('is_safe' => array('html'))));
        $this->twig->addFunction(new Twig_SimpleFunction('form_close', 'form_close', array('is_safe' => array('html'))));
        $this->twig->addFunction(new Twig_SimpleFunction('form_input', 'form_input', array('is_safe' => array('html'))));
        $this->twig->addFunction(new Twig_SimpleFunction('asset', 'asset', array('is_safe' => array('html'))));
        $this->twig->addFunction(new Twig_SimpleFunction('assets', 'assets', array('is_safe' => array('html'))));

    }

    /**
     * 给变量赋值
     *
     * @param string|array $var
     * @param string $value
     */
    public function assign($var, $value = NULL)
    {
        if(is_array($var)) {
            foreach($var as $key => $val) {
                $this->data[$key] = $val;
            }
        } else {
            $this->data[$var] = $value;
        }
    }

    /**
     * 模版渲染
     *
     * @param string $template 模板名
     * @param array $data 变量数组
     * @param bool $return true返回 false直接输出页面
     * @return string
     */
    public function render($template, $data = array(), $return = FALSE)
    {
        $template = $this->twig->loadTemplate ( $this->getTemplateName($template) );
        $data = array_merge($this->data, $data);
        if ($return === TRUE) {
            return $template->render ( $data );
        } else {
            return $template->display ( $data );
        }
    }

    /**
     * 获取模版名
     *
     * @param string $template
     * @return string
     */
    public function getTemplateName($template)
    {
        $default_ext_len = strlen($this->config['extension']);
        if(substr($template, -$default_ext_len) != $this->config['extension']) {
            $template .= $this->config['extension'];
        }
        return $template;
    }

    /**
     * 字符串渲染
     *
     * @param string $string 需要渲染的字符串
     * @param array $data 变量数组
     * @param bool $return true返回 false直接输出页面
     * @return object
     */
    public function parse($string, $data = array(), $return = FALSE)
    {
        $string = $this->twig->loadTemplate ( $string );
        $data = array_merge($this->data, $data);
        if ($return === TRUE) {
            return $string->render ( $data );
        } else {
            return $string->display ( $data );
        }
    }
}
/* End of file Twig.php */
/* Location: ./application/libraries/Twig.php */