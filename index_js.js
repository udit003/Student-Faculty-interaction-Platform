var is_error_present = true;

function password_matched(){
	var pwd = document.getElementById("pwd").value;
	var cpwd = document.getElementById("cpwd").value;
	if(pwd == cpwd  && pwd.length>0)
	{
		is_error_present = false;
		document.getElementById("pwd_matched_or_not").innerHTML = "verified";
		document.getElementById("pwd_matched_or_not").style.color="green";
		document.getElementById("signup_btn").disabled = false;
		console.log("matching");
	}
	else  
	{
		is_error_present = true;
		document.getElementById("pwd_matched_or_not").innerHTML = "&nbsp;!password does not match";
		document.getElementById("pwd_matched_or_not").style.color = "red";
		document.getElementById("signup_btn").disabled = true;
		//document.getElementById("cpwd").select();
		console.log("not matching");
	}
}

function is_password_valid()
{
	if(document.getElementById("pwd").value.length>=6)
		return true;
	return false;
}

document.getElementById("cpwd").addEventListener("blur",password_matched,true);

document.getElementById("pwd").addEventListener("blur",function(){
	var cpwd = document.getElementById("cpwd");
	if(is_password_valid()==false)
	{
		is_error_present= true;
		document.getElementById("pwd_valid").innerHTML = "&nbsp!password entered not valid";
		document.getElementById("cpwd").disabled = true;
		document.getElementById("pwd_matched_or_not").innerHTML="";
	}
	else
	{
		document.getElementById("pwd_valid").innerHTML = "";
		document.getElementById("cpwd").disabled = false;
		if(cpwd.value)
		{
			password_matched();
		}
	}
},true);


///////////////////////////////////////////////////////////////////////////////////////
