<?php
/**
 * @package		CGAvif system plugin
 * @author		ConseilGouz
 * @copyright	Copyright (C) 2024 ConseilGouz. All rights reserved.
 * license      https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * From CG WEBP version 1.2.8
 **/

defined('_JEXEC') or die();

use Joomla\CMS\Language\Text;
use Conseilgouz\Plugin\System\Cgavif\Helper\CgavifHelper;

$gdInfo = gd_info();
$serverSupportAvif = (isset($gdInfo['AVIF Support']) && $gdInfo['AVIF Support']) ? true : false;
$browserSupportAvif = (!(strpos($_SERVER['HTTP_ACCEPT'], 'image/avif')) || strpos($_SERVER['HTTP_USER_AGENT'], ' Chrome/') !== false) ? true : false;

?>
  <button class="btn btn-primary d-block m-auto" type="button" data-bs-toggle="collapse" data-bs-target="#avifSupportContainer" aria-expanded="false" aria-controls="avifSupportContainer" >
    Check AVIF support
  </button>
<div id="avifSupportContainer" class="avifSupportContainer collapse">
    <table class="d-block m-auto p-4">
        <thead>
        <th><?php echo Text::_('PLG_SYSTEM_CGAVIF_SUPPORT_ENDPOINT'); ?></th>
        <th><?php echo Text::_('PLG_SYSTEM_CGAVIF_SUPPORT_SUPPORTED'); ?></th>
        </thead>
        <tbody>
        <tr>
            <td><?php echo Text::_('PLG_SYSTEM_CGAVIF_SUPPORT_SERVER'); ?></td>
            <td>

                <?php if ($serverSupportAvif) : ?>
                    <span class="icon-publish">&nbsp;</span>
                <?php else : ?>
                    <span class="icon-unpublish">&nbsp;</span></td>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td><?php echo Text::_('PLG_SYSTEM_CGAVIF_SUPPORT_BROWSER'); ?></td>
            <td>
                <?php if (CgavifHelper::browserSupportAvif()) : ?>
                    <span class="icon-publish">&nbsp;</span>
                <?php else : ?>
                <span class="icon-unpublish">&nbsp;</span></td>
            <?php endif; ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div style="clear: both"></div>
<style>
    .avifSupportContainer table {
        width: 200px;
        text-align: center;
    }

    .avifSupportContainer table th {
        width: 50%;
    }

    .avifSupportContainer table td,.avifSupportContainer table th {
        border: 1px solid black;
        width: 50%;
    }

    .avifSupportContainer {
        margin-bottom: 20px;
    }

</style>