var is_error_present = true;

function password_matched(){
	var pwd = document.getElementById("pwd").value;
	var cpwd = document.getElementById("cpwd").value;
	if(pwd == cpwd  && pwd.length>0)
	{
		is_error_present = false;
		document.getElementById("pwd_matched_or_not").innerHTML = "verified";
		document.getElementById("pwd_matched_or_not").style.color="green";
		console.log("matching");
		cpwd.setCustomValidity("");
		cpwd.setCustomValidity("Passwords Don't Match");
	}
	else  
	{
		is_error_present = true;
		document.getElementById("pwd_matched_or_not").innerHTML = "&nbsp;!password does not match";
		document.getElementById("pwd_matched_or_not").style.color = "red";
		//document.getElementById("cpwd").select();
		console.log("not matching");
		cpwd.setCustomValidity("Passwords Don't Match");
	}
}

function is_password_valid()
{
	if(document.getElementById("pwd").value.length>=6)
		return true;
	return false;
}

document.getElementById("cpwd").addEventListener("blur",password_matched,false);

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


//document.getElementById("signup_btn").addEventListener("click",function(e){
	//e.preventDefault();
	/*if(is_error_present)
	{
		cpwd = document.getElementById("cpwd");
		cpwd.setCustomValidity("Passwords Don't Match");
  } else {
    cpwd.setCustomValidity('');
		//alert("error");
	}*/
//		document.getElementById("signup_form").submit();	
//})
