$(document).ready(function(){
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });
	$('#process').click(function(){
		var complaint_status = "processing"
		$.ajax({
			  method: "POST",
			  url:  base_url+"/modify_complaint_status",
			  data: {status:complaint_status}
		}).done(function( msg ) {
			    modal($.parseJSON(msg));
		});
	
	});
	$('#done').click(function(){
		var complaint_status = "Done"
		$.ajax({
			  method: "POST",
			  url:  base_url+"/modify_complaint_status",
			  data: {status:complaint_status}
		}).done(function( msg ) {
			    modal($.parseJSON(msg));
		});
	
	});

});

function modal(msg)
{
	$('#status').html("<strong>Status</strong> : "+msg.status);
	$('#'+msg.id+' > #complaint_status').html("<center>"+msg.status+"</center>");
}