<?php
/**
 * @package	    CGAvif system plugin
 * @author	    ConseilGouz
 * @copyright   Copyright (C) 2024 ConseilGouz. All rights reserved.
 * license      https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * From CG WEBP version 1.2.8
 **/

defined('_JEXEC') or die();

use Joomla\CMS\Language\Text;

?>
  <button class="btn btn-primary" type="button" id="avifdestroy" style="float:right;width:40%">
    <?php echo Text::_('PLG_SYSTEM_CGAVIF_DESTROY'); ?>
  </button>
  <div id="destroy_message" aria-live="polite"></div>
