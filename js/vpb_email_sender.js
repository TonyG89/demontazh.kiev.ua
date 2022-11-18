//This function sends all emails
function vpb_send_email0(n)
{
	var a = $("#callBack"+n);
	//Variables declaration
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var name = a.find('.name').val();
	var phone = a.find('.phone').val();
	var mail = a.find('.mail').val();
	var attachedfile =  a.find('.add-file').val('');

	//Validation process begins
	if( name == "" )
	{
		a.find('.name').css('box-shadow', '0 0 10px red inset');
		a.find('.name').css('border', '1px solid red');
		a.find(".name").focus();
		return false;
	}

	else if( phone == "" )
	{
		a.find('.name').removeAttr('style');
		a.find('.phone').css('box-shadow', '0 0 10px red inset');
		a.find('.phone').css('border', '1px solid red');
		a.find(".phone").focus();
		return false;
	}
	else if( mail == "" )
	{
		a.find('.phone').removeAttr('style');
		a.find('.mail').css('box-shadow', '0 0 10px red inset');
		a.find('.mail').css('border', '1px solid red');
		a.find(".mail").focus();
		return false;
	}
	else
	{
		a.find('.name').removeAttr('style');
		a.find('.phone').removeAttr('style');
		a.find('.mail').removeAttr('style');
		var dataString = "name=" + name +  "&phone=" + phone + "&mail=" + mail;

		$.ajax({
			type: "POST",
			url: "mail/vpb_email_sender.php",
			data: dataString,
			cache: false,
			beforeSend: function()
			{
				a.parent().find(".overlay").fadeIn();
			},
			success: function(response)
			{
				var response_brought = response.indexOf('vpb_sent');
				if (response_brought != -1)
				{
					a.each(function(){
						this.reset();
					});

					a.find('.name').val('');
					a.find('.phone').val('');
					a.find('.mail').val('');
					jQuery(".form_box").fadeOut();
					jQuery(".overlay").fadeIn();
					jQuery(".thankBox").fadeIn();


					setTimeout(' jQuery(".thankBox, .overlay").fadeOut();', 5000);
				}
				else
				{
					a.each(function(){
						this.reset();
					});
					a.parent().find(".errorBox, .fileBox i, .overlay").fadeOut();
				}
			}
		});

	}
}