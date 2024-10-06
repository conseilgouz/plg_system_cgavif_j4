/**
 * @package		CGAvif system plugin
 * @author		ConseilGouz
 * @copyright	Copyright (C) 2024 ConseilGouz. All rights reserved.
 * @license		GNU/GPL v3; see LICENSE.php
 * From CG WEBP version 1.2.8
 **/

document.addEventListener("DOMContentLoaded", function(){
    
    // Destroy button
    deleteavif = document.querySelector('#avifdestroy');
    if (!deleteavif) return; // not defined : ignore
    deleteavif.addEventListener('click',function() {
        delete_avif();
    })
    // check CG custom classes
    clears = document.querySelectorAll('.view-plugin .clear');
    for(var i=0; i< clears.length; i++) {
        let clear = clears[i];
        group = clear.parentNode.parentNode.parentNode.style.clear = "both";
    }
    lefts = document.querySelectorAll('.view-plugin .left');
    for(var i=0; i< lefts.length; i++) {
        let left = lefts[i];
        group = left.parentNode.parentNode.parentNode.style.float = "left";
    }
    halfs = document.querySelectorAll('.view-plugin .half');
    for(var i=0; i< halfs.length; i++) {
        let half = halfs[i];
        group = half.parentNode.parentNode.parentNode.style.width = "50%";
    }
    halfs = document.querySelectorAll('.view-plugin .sixty');
    for(var i=0; i< halfs.length; i++) {
        let half = halfs[i];
        group = half.parentNode.parentNode.parentNode.style.width = "60%";
    }
    
    // show/hide button depending on Storage value
    storageMedia = document.querySelector('#jform_params_storage1');
    storageSame = document.querySelector('#jform_params_storage0');
    
    if (!storageMedia || !storageSame) return; // check existing buttons 
    
    if (storageSame.getAttribute('checked')) {
        deleteavif.classList.add('hidden');
    }
    storageMedia.addEventListener('change',function() {
            deleteavif.classList.remove('hidden');
   })
    storageSame.addEventListener('change',function() {
        deleteavif.classList.add('hidden');
   })
})    
function delete_avif() {    
    let deleteavif = document.querySelector('#avifdestroy');
    deleteavif.setAttribute("disabled",true);
    let box = document.createElement('div');
    let systemmsg = document.querySelector('#destroy_message');
    box.innerHTML = '<joomla-alert type="warning" role="alert" style="animation-name: joomla-alert-fade-in;"><div class="alert-heading"><span class="visually-hidden">info</span></div><div class="alert-wrapper"><div class="alert-message"><p>Cleaning AVIF images....</p><p style="text-align: center;margin-left: 10em;"><span class="switching"></span></div></div></joomla-alert>';
    systemmsg.appendChild(box);
	var csrf = Joomla.getOptions("csrf.token", "");
	var url = "?"+csrf+"=1&option=com_ajax&plugin=cgavif&task=clean&format=raw";
	Joomla.request({
		method : 'POST',
		url : url,
		onSuccess: function(data, xhr) {
            if (data != 'ok') {
                window.alert(data);
            }
            deleteavif.removeAttribute("disabled");
            systemmsg.removeChild(box);
		},
		onError: function(message) {
            console.log(message.responseText);
            deleteavif.removeAttribute("disabled");
            systemmsg.removeChild(box);
        }
	}) 
}
