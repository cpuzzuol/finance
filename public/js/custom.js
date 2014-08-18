$(document).ready(function(){

  $('.glyphicon').hover(function(){
    $(this).toggleClass('shadow');
  });


  //this function allows the list items "Order of Display" pane to be sortable and the database to be automatically updated
	$("#sortable").sortable({
		update : function () {
			var serial = $('#sortable').sortable('serialize'); //split up each li into an array item
			$("body").css("cursor", "progress");
			alert(serial);
			/*$.ajax({
				url: "sort.php",
				type: "post",
				data: serial,
				error: function(){
					alert("there's an error with AJAX");
				}
			}).done(function(){
				$("body").css("cursor", "default");
			});*/
		}
	});
}); //end ready

