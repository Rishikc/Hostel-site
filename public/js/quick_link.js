$(document).ready(function(){
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });

	$('.edit_button').click(function(){
		var id = this.id;
		$.ajax({
			  method: "POST",
			  url:  base_url+"/get_quicklink",
			  data: {id :id }
		}).done(function( msg ) {
			    modalInject($.parseJSON(msg));
		});
	
	});

});

$('.add_button').click(function(){
	var type = this.id;
	$('#ModalLabel').html("ADD "+type)
	$('#title').attr("value","");
	$('#link').attr("value","");
	$('#id').attr("value","0");
	$('#type').attr("value",type);
	$('#Modal').modal('show');
});

function modalInject(json)
{
	$('#ModalLabel').html("EDIT "+json.type)
	$('#title').attr("value",json.title);
	$('#link').attr("value",json.link);
	$('#id').attr("value",json.id);
	$('#type').attr("value","");
	$('#Modal').modal('show');
}