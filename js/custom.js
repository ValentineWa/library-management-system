//loads the assign form //
$(document).ready(function() {
	
	$('.assignbook').click(function(e){
			e.preventDefault();
			
		$.get('create',function(data) {
		$('#assignbook').modal('show')
		 		.find('#assignbookContent')

			.html(data);
			
	});
	});
	$('.addauthor').click(function(e){
			e.preventDefault();
			
		$.get('addauthor',function(data) {
		$('#addauthor').modal('show')
		 		.find('#addauthorContent')

			.html(data);
			
});
});

	
          /*modal*/  $('.returnbook').click(function(e){
			e.preventDefault();
			var id = $(this).attr("val");
	     /*action*/  $.get('returnbook?id='+id,function(data){
		/*id*/		$('#returnbook').modal('show')
			 		.find('#returnbookContent')
			 		.html(data);
        });
	});


 /* $('.requestbook').click(function(e){
			e.preventDefault();
			var id = $(this).attr("val");
	      $.get('requestbook?id='+id,function(data){
			$('#requestbook').modal('show')
			 		.find('#requestbookContent')
			 		.html(data);
        });
	});*/
	$('.requestbook').click(function(e){
			e.preventDefault();
			var borrow =1;
			var link = $(this).attr("val");
       $.get(link+'?borrow='+borrow,function(data){
			$('#assignbook').modal('show')
		 		.find('#assignbookContent')
		 		.html(data);
        });
	});

});