$(function () {
	$('input[type=radio]').click(function () {
		var type = $(this).val(),
			content;
		
		// Hide all content fields
		$('.type-detail').hide();
		
		// Clear all content fields
		$('.type-detail').find('input').val('');
		$('.type-detail').find('textarea').val('');
		
		// Show content fields for type selected
		$('#'+type).show();
	});
	
	$('#qr-form').submit(function () {
		var datastring = {
				url : $('input[name=url]').val(),
				text_content : $('textarea[name=text_content]').val(),
				telephone_number : $('input[name=telephone_number]').val(),
				sms_telephone_number : $('input[name=sms_telephone_number]').val(),
				sms_text_content : $('textarea[name=sms_text_content]').val(),
				size : $('#size').val()
			}
		
		$.ajax({
			url: "http://www.box-head.co.uk/apps/qr/generate-qr.php",
			data: datastring,
			type: 'post',
			success: function (data) {
				$('#qr-image').attr('src', data);
				$('#qr-code').show();
			}
		});
	
		return false;
	});
});