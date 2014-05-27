$('#info-form').submit(function(){
	var email = $('#email-id').val;
	$('#').html('');
});

$(':button').click(function(){
	$(this).attr('value','Registring..');
	$(this).attr('disable', true);
})

function validate_name(){
	var fname=document.getElementById("first-name");
	var mname=document.getElementById("middle-name");
	var lname=document.getElementById("last-name");
	
	if(fname && lname){
		
	}
}

function getCookie(c_name){
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	
	if (c_start == -1){
		c_start = c_value.indexOf(c_name + "=");
	}
	
	if (c_start == -1){
		c_value = null;
	}
	else{
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1){
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start,c_end));
	}
	
	return c_value;
}

function setCookie(c_name,value,exdays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value= escape(value) + ((exdays==null) ? "": ";expires=" + exdate.toGMTString());
	document.cookie=c_name + "=" + c_value;
}

function sign_up(){
	var x=getCookie("first-name");
	if (x==null || x==""){
		alert("You must enter your name");
		return false;
	}
}