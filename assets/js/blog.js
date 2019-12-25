$(document).ready(function() {
	$('.toast').toast('show');
	/* ======= Highlight.js Plugin ======= */ 
    /* Ref: https://highlightjs.org/usage/ */     
    $('pre code').each(function(i, block) {
		hljs.highlightBlock(block);
		$('.LinkToGo').click(function(e) {
			e.preventDefault();
			var allClasses = $(e.currentTarget).attr('class').split(" ");
			if(allClasses.length && allClasses.length==2){
				console.log()
				$('html, body').animate({
				  scrollTop: $('#' + allClasses[1]).offset().top
				}, 500);

			}
		  });
	 });

});