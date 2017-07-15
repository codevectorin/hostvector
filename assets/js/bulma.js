// The following code is based off a toggle menu by @Bradcomp
// source: https://gist.github.com/Bradcomp/a9ef2ef322a8e8017443b626208999c1
 (function() {
     var burger = document.querySelector('.navbar-burger');
     var menu = document.querySelector('.navbar-menu');
     burger.addEventListener('click', function() {
         burger.classList.toggle('is-active');
         menu.classList.toggle('is-active');
     });
 })();

//#3273dc


//validate section
var emRp=document.getElementById("vEmailResponse");

function reFormat(text,cls,icon)
{
	return '<span class="icon is-small is-right"><i class="fa fa-'+icon+'"></i></span></p><p class="help is-'+cls+'">'+text+'</p>';
}


function validateInput(field,resId) {
	var resp=document.getElementById(resId);
	if(field.value == '')
	{
		resp.innerHTML=reFormat("Please fill this field",'is-danger','close');
		field.className="input is-danger";
	}
	else
	{
		resp.innerHTML=reFormat('','is-success','check');
		field.className="input is-success";
	}
}


function validateEmail(ef){
	if(ef.value != '')
	{
		var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if (reg.test(ef.value) == false) 
        {
        	emRp.innerHTML=reFormat('This email is incorrect','danger','close');
        	ef.className="input is-danger";
        	return false;
        }
        else
        {
        	emRp.innerHTML=reFormat('','success','check');
        	ef.className="input is-success";
        	return true;
        }

	}
	else
	{
		emRp.innerHTML=reFormat('Please enter your email id','danger','check');
        ef.className="input is-danger";
        return false;
	}
}

