# plg_system_cgavif_j4 <a href="https://buymeacoffee.com/conseilgouz" class="position-absolute top-0 end-0">![buy_me_a_coffee](https://github.com/conseilgouz/plg_system_cgwebp_j4/assets/19435246/4fda4cb5-64f1-4717-81ae-c71a0fc26c2d)</a>

CG AVIF - convert images to AVIF using <b>GD for image processing</b>, without any external library. 

CG AVIF plugin helps you optimize your page load.

When a page is displayed, all images from jpg and/or png formats are converted to AVIF format and stored in <b>media/plg_system_cgavif directory</b> or in original images directory.

When images are updated, their avif images is updated as well. Avif images have a version based on original image hash, so, on change, they will be reloaded by web browser.

Storing created images in media directory has the double advantages to easily locate those images and not to double save them (by making media/plg_system_cgavif an exception in Akeeba Backup)

On your pages, avif images will be displayed, replacing original images.

<b>Important</b> : If you were using CG WebP plugin, don't forget to disable it.

To access CG AVIF plugin, in your administration, click on Plugins button and enter avif in filter options : 

![cg_avif_plugin](https://github.com/conseilgouz/plg_system_cgwebp_j4/assets/19435246/d9e7a39a-b94d-4fad-a1b1-e677f559de80)

Click on CG Avif and you'll have access to its parameters:

![cg_avif_1 1 2](https://github.com/conseilgouz/plg_system_cgwebp_j4/assets/19435246/cd2a6ee4-acb8-4d39-a6f8-bccfd8b139bc)

Click on <b>Check AVIF support</b> button to make sure your server handles AVIF conversion.

<b>Note</b> : <b>Destroy AVIF</b> images button is enabled if  AVIF directory is set to Media).

<b>Note (again)</b> : on the top, rightmost position, <b>Show/Hide</b> has been added by <a href="https://www.phoca.cz/phoca-collapse-system-plugin" target="_blank">Phoca Collapse plugin</a>
