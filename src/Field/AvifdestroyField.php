<?php
/**
 * @package		CGAvif system plugin
 * @author		ConseilGouz
 * @copyright	Copyright (C) 2024 ConseilGouz. All rights reserved.
 * license      https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * From DJ-WEBP version 1.0.0
 **/

namespace Conseilgouz\Plugin\System\Cgavif\Field;

defined('_JEXEC') or die();

use Joomla\Registry\Registry;
use Joomla\CMS\Form\FormField;
use Joomla\CMS\Layout\FileLayout;

class AvifdestroyField extends FormField
{
    protected $type = 'avifdestroy';

    public function renderField($options = array())
    {
        $layout = new FileLayout('avif_destroy', JPATH_ROOT . '/plugins/system/cgavif/layouts');
        return $layout->render();
    }
}
