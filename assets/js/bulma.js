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
function reFormat(e,s,a){return'<span class="icon is-small is-right"><i class="fa fa-'+a+'"></i></span></p><p class="help is-'+s+'">'+e+"</p>"}function validateInput(e,s){var a=document.getElementById(s);""==e.value?(a.innerHTML=reFormat("Please fill this field","danger","close"),e.className="input is-danger"):(a.innerHTML=reFormat("","success","check"),e.className="input is-success")}function validateEmail(e){if(""!=e.value){var s=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;return 0==s.test(e.value)?(emRp.innerHTML=reFormat("This email is incorrect","danger","close"),e.className="input is-danger",!1):(emRp.innerHTML=reFormat("","success","check"),e.className="input is-success",!0)}return emRp.innerHTML=reFormat("Please enter your email id","danger","check"),e.className="input is-danger",!1}var emRp=document.getElementById("vEmailResponse");

