<?php
/**
 * @package		CGAvif system plugin
 * @author		ConseilGouz
 * @copyright	Copyright (C) 2024 ConseilGouz. All rights reserved.
 * license      https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
* From CG WEBP version 1.2.8
**/

namespace Conseilgouz\Plugin\System\Cgavif\Field;

defined('_JEXEC') or die();

use Joomla\Registry\Registry;
use Joomla\CMS\Form\FormField;
use Joomla\CMS\Layout\FileLayout;

class AvifsupportField extends FormField
{
    protected $type = 'avifsupport';

    public function renderField($options = array())
    {
        $layout = new FileLayout('avif_support', JPATH_ROOT . '/plugins/system/cgavif/layouts');
        return $layout->render();
    }
}
