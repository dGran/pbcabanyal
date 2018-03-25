$(document).ready(function(){

    $("#btn-show-hide-left-menu").click(function(){
    	var isVisible = $('.left-menu').is(':visible');
    	if (isVisible) {
    		$(".left-menu").hide();
    		$(".table-content").removeClass('col-sm-8');
    		$(".table-content").addClass('col-sm-12');
    		$(".expand-icon").removeClass('fa-expand-arrows-alt');
    		$(".expand-icon").addClass('fa-arrows-alt');
    	} else {
    		$(".left-menu").show();
    		$(".table-content").removeClass('col-sm-12');
    		$(".table-content").addClass('col-sm-8');
    		$(".expand-icon").removeClass('fa-arrows-alt');
    		$(".expand-icon").addClass('fa-expand-arrows-alt');
    	}
    });

});