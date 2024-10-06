<?php
/**
 * @package		CGAvif system plugin
 * @author		ConseilGouz
 * @copyright	Copyright (C) 2024 ConseilGouz. All rights reserved.
 * license      https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * From CG WEBP version 1.2.8
 **/

namespace ConseilGouz\Plugin\System\Cgavif\Helper;

// Prevent direct access
defined('_JEXEC') or die;

class CgavifHelper {

    public static function browserSupportAVIF() {
  
        if(!isset($_SERVER['HTTP_USER_AGENT'])) return false;

        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        // If browser is Internet Explorer
        if (strpos($user_agent, 'MSIE') !== false) return false;

        // If user browser is safari and is not Opera
        if(
            strpos($user_agent, 'Safari') &&
            !strpos($user_agent, ' Chrome/' ) &&
            !(strpos($user_agent, 'Edge'))
        ) return false;

        // If windows mobile
        if(strpos($user_agent, 'Windows Phone 8.1')) return false;

        // If browser doesnt support AVIF
        if (isset($_SERVER['HTTP_ACCEPT'])) {
            if (!strpos($_SERVER['HTTP_ACCEPT'], 'image/avif' )) {
                return false;
            }
        }

        // If browser doesnt support AVIF and is not chrome/firefox/opera/edge
        if(
            !strpos($user_agent, ' Chrome/' ) &&
            !strpos($user_agent, 'Firefox') &&
            !(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) &&
            !(strpos($user_agent, 'Edge'))
        ) return false;

        return true;
    }

}
