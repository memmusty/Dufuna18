//validate text
function string(field)
{
	var namere = /^\s*(([A-Za-z]+)\s?([A-Za-z]+)*)+$/;
	var name=document.getElementById(field);
	if(!(name.value.match(namere)))
	{
		document.getElementById('p1').style.display = "block";
		name.style.border="2px solid  #ff530a";
		name.focus();
		return false;
	}
	else{
	   	document.getElementById('p1').style.display = "none";
		return true;
	}  
}

//validate text
function final_string(field)
{
	var namere = /^\s*(([A-Za-z]+)\s?([A-Za-z]+)*)+$/;
	var name=document.getElementById(field);
	if(!(name.value.match(namere)))
	{
		document.getElementById('p1').style.display = "block";
		name.value='';
		name.style.border="2px solid #ff530a";
		name.focus();
		return false;
	}
	else{
	   	document.getElementById('p1').style.display = "none";
		return true;
	}  
}
function vemail()
{
	var id = document.getElementById("email");
	var emailID = id.value;
	atpos = emailID.indexOf("@");
	dotpos = emailID.lastIndexOf(".");
	if (atpos < 1 || ( dotpos - atpos < 2 )) 
	{
		document.getElementById('p5').style.display = "block";// This segment displays the validation rule for username
		id.style.border="2px solid #ff530a";
		id.focus();
		return false;
	}
	else{
	   	document.getElementById('p5').style.display = "none";
		return true;
	}
}
function final_vemail()
{
	var id = document.getElementById("email");
	var emailID = id.value;
	atpos = emailID.indexOf("@");
	dotpos = emailID.lastIndexOf(".");
	if (atpos < 1 || ( dotpos - atpos < 2 )) 
	{
		document.getElementById('p5').style.display = "block";// This segment displays the validation rule for username
		id.style.border="2px solid #ff530a";
		id.value='';
		id.focus();
		return false;
	}
	else{
	   	document.getElementById('p5').style.display = "none";
		return true;
	}
}
//validate username
function lengthDef(inputtext, min, max) {
	var uname = document.getElementById(inputtext);
	var unamere= /^\s*[A-Za-z0-9/@_]+\s*$/;
	if (uname.value.length >= min && uname.value.length <= max && uname.value.match(unamere)) {
		document.getElementById('p2').style.display = "none";
		return true;
	} 
	else {
		document.getElementById('p2').style.display = "block";// This segment displays the validation rule for username
		uname.style.border="2px solid #ff530a";
		uname.focus();
		return false;
	}
}
//validate username
function final_lengthDef(inputtext, min, max) {
	var uname = document.getElementById(inputtext);
	var unamere= /^\s*[A-Za-z0-9/@_]+\s*$/;
	if (uname.value.length >= min && uname.value.length <= max && uname.value.match(unamere)) {
		document.getElementById('p2').style.display = "none";
		return true;
	} 
	else {
		document.getElementById('p2').style.display = "block";// This segment displays the validation rule for username
		uname.style.border="2px solid #ff530a";
		uname.value='';
		uname.focus();
		return false;
	}
}
//validate password
function lengthDefine(inputtext, min) {
	var name = document.getElementById('fname').value;
	var lastname = document.getElementById('lname').value;
	var username = document.getElementById('usname').value;
	var upass = document.getElementById(inputtext);
	var password=upass.value;
	if (upass.value.length >= min && !name.match(password,"i") && !lastname.match(password,"i") && !username.match(password,"i")) {
		document.getElementById('p3').style.display = "none";
		return true;
	} 
	else{
		if (name.match(password,"i") || lastname.match(password,"i") || username.match(password,"i")) {
			document.getElementById('p3').innerHTML = "* please you cannot use your name or username*";// This segment displays the validation rule for username
			document.getElementById('p3').style.display = "block";// This segment displays the validation rule for username
			upass.style.border="2px solid #ff530a";
			upass.focus();
			return false;
		}
		else {
			document.getElementById('p3').innerHTML = "* Please enter atleast 6 characters *";// This segment displays the validation rule for username
			document.getElementById('p3').style.display = "block";// This segment displays the validation rule for username
			upass.style.border="2px solid #ff530a";
			upass.focus();
			return false;
		}
	}	
}
//validate password
function final_lengthDefine(inputtext, min) {
	var firstname = document.getElementById('fname').value;
	var lastname = document.getElementById('lname').value;
	var username = document.getElementById('uname').value;
	var upass = document.getElementById(inputtext);
	var password=upass.value;
	if (upass.value.length >= min && !firstname.match(password,"i") && !lastname.match(password,"i") && !username.match(password,"i")) {
		document.getElementById('p3').style.display = "none";
		return true;
	} 
	else{
		if (name.match(password,"i") || lastname.match(password,"i") || username.match(password,"i")) {
			document.getElementById('p3').innerHTML = "* please you cannot use your name or username*";// This segment displays the validation rule for username
			document.getElementById('p3').style.display = "block";// This segment displays the validation rule for username
			upass.value='';
			upass.style.border="2px solid #ff530a";
			upass.focus();
			return false;
		}
		else {
			document.getElementById('p3').innerHTML = "* Please enter atleast 6 characters *";// This segment displays the validation rule for username
			document.getElementById('p3').style.display = "block";// This segment displays the validation rule for username
			upass.value='';
			upass.style.border="2px solid #ff530a";
			upass.focus();
			return false;
		}
	}	
}
//verify password
function fetch()
{
	var get = document.getElementById("pword").value;
	var gett = document.getElementById("cpword").value;
	if(get != gett){
	    document.getElementById('p4').style.display = "block";// This segment displays the validation rule for username
		gett.style.border="2px solid #ff530a0";
		gett.focus();
		return false;
	}
	else{
	   	document.getElementById('p4').style.display = "none";
		return true;
	}  
}
//verify password
function final_fetch()
{
	var get = document.getElementById("pword");
	var gett = document.getElementById("cpword");
	if(get.value != gett.value){
	    document.getElementById('p4').style.display = "block";// This segment displays the validation rule for username
		gett.style.border="2px solid #ff530a0";
		gett.value='';
		gett.focus();
		return false;
	}
	else{
	   	document.getElementById('p4').style.display = "none";
		return true;
	}  
}