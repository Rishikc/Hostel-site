$(document).ready(function(){
	$('.clickable').css('cursor','pointer');

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });
	$('.clickable').click(function(){
		var id = this.id;
		$.ajax({
			  method: "POST",
			  url:  base_url+"/get_complaint",
			  data: { complaint_id :id }
		}).done(function( msg ) {
			    modalInject($.parseJSON(msg));
		});
	
	});

});


function modalInject(json)
{
	$('#name').html("<strong>Name of Complaintant</strong> : "+json.created_name);
	$('#roll').html("<strong>Roll Number</strong> : "+json.created_rollnumber);
	$('#hostel').html("<strong>Name of "+json.building+"</strong> : "+json.hostel);
	$('#subject').html("<strong>Subject</strong> : "+json.subject);
	$('#description').html("<strong>Description</strong> : "+json.description);
	$('#status').html("<strong>Status</strong> : "+json.status);

	$('#complaintmodal').modal('show');
}