
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function () {

	// alert messages
    window.setTimeout(function() {
        $(".alert-auto-hide").fadeTo(500, 0).slideUp(200, function(){
            $(this).remove();
        });
    }, 2000);

});