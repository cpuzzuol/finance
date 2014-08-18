$(document).ready(function(){
  var BASE_URL = "http://localhost/laravel/";
  
  $('.glyphicon').hover(function(){
    $(this).toggleClass('shadow');
  });

	$("#sortable").sortable({
		update : function () {
			var serial = $('#sortable').sortable('serialize'); //split up each li into an array item
			$("body").css("cursor", "progress");
			$.ajax({
				url: BASE_URL + "income-category/second",
				type: "post",
				data: {serial: serial},
				cache: false,
                dataType: 'json',
				success: function(info){
                  console.log(info);
         		},
				error: function(){
					alert("there's an error with AJAX");
				}
			}).done(function(){
				$("body").css("cursor", "default");
				//$( ".result" ).html( serial );
			});
		}
	});
	
	/*$("#sortable").sortable({
		update : function () {
			var serial = $('#sortable').sortable('serialize');
			$.post( BASE_URL + "income-category/second", function( serial ) {
			  $( ".result" ).html( serial );
			})
			  .fail(function() {
				alert( "error" );
			  })
			
		}
	});*/
	
	
	
	
}); //end ready

