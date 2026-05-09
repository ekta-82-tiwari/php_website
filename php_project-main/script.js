function validation(){
	let name = document.getElementById('name').value;
	let password = document.getElementById('password').value;
	let email = document.getElementById('email').value;
	let phonenumber = document.getElementById('phonenumber').value;
	let age = document.getElementById('age').value;

	if (name =="" || password=="" || email=="" || phonenumber=="" || age=="") {
		alert('please fill all the field');
		return false;
	}if(!email.includes("@")){
		alert('please fill @ requrid');
		return false;
	}if(password.length<6){
		alert('please enter 6  characters');
		return false
	}
	else{
		alert('sussfully form submit');
	}
	return true;




}