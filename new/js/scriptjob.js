//display date(lavaniyah)
function date(){
	var D = new Date();
	var y = D.getFullYear();
	var m = D.getMonth();
	var Da = D.getDate();
	m+=1;
	document.getElementById("date").innerHTML=Da+"/"+m+"/"+y;
}


//terms and condition show function(lavaniyah)
function tndc(){
	document.getElementById("tndcV").style.display="block";
}

function closeS(){
	document.getElementById("tndcV").style.display="none";
}


//
var pwShown = 0;
function showP(){ 
	   if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}


function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
    document.getElementById("password").className = "fas fa-eye-slash";
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
    document.getElementById("password").className = "fas fa-eye";
}

//login employee show(nirojan)
var pw = 0;
function showPa(){ 
	   if (pw == 0) {
        pw = 1;
        showL();
    } else {
        pw = 0;
        hideL();
    }
}


function showL() {
    var p = document.getElementById('passL');
    p.setAttribute('type', 'text');
    document.getElementById("pass").className = "fas fa-eye-slash";
}

function hideL() {
    var p = document.getElementById('passL');
    p.setAttribute('type', 'password');
    document.getElementById("pass").className = "fas fa-eye";
}


//dropdown function(niroshani)
var pw1 = 0;
var pw2 = 0;
var pw3 = 0;
var pw4 = 0;
var pw5 = 0;
var pw6 = 0;

function showddl1(){ 
       if (pw1 == 0) {
        pw1 = 1;
        showdd1();
        hidedd2();
        hidedd3();
        hidedd4();
        hidedd5();
        hidedd6();
        pw2 = pw3 = pw4 = pw5 =pw6 =0;
    } else {
        pw1 = 0;
        hidedd1();
    }
}

function showdd1(){
    document.getElementById("dd1").style.display="block";
    document.getElementById("ddI1").className = "fas fa-angle-up";
}
function hidedd1(){
    document.getElementById("dd1").style.display="none";
    document.getElementById("ddI1").className = "fas fa-angle-down";
}


function showddl2(){ 
       if (pw2 == 0) {
        pw2 = 1;
        showdd2();
        hidedd1();
        hidedd3();
        hidedd4();
        hidedd5();
        hidedd6();
        pw1 = pw3 = pw4 = pw5 =pw6 =0;
    } else {
        pw2 = 0;
        hidedd2();
    }
}

function showdd2(){
    document.getElementById("dd2").style.display="block";
    document.getElementById("ddI2").className = "fas fa-angle-up";
}
function hidedd2(){
    document.getElementById("dd2").style.display="none";
    document.getElementById("ddI2").className = "fas fa-angle-down";
}

function showddl3(){ 
       if (pw3 == 0) {
        pw3 = 1;
        showdd3();
        hidedd2();
        hidedd1();
        hidedd4();
        hidedd5();
        hidedd6();
        pw2 = pw1 = pw4 = pw5= pw6 =0;
    } else {
        pw3 = 0;
        hidedd3();
    }
}

function showdd3(){
    document.getElementById("dd3").style.display="block";
    document.getElementById("ddI3").className = "fas fa-angle-up";
}
function hidedd3(){
    document.getElementById("dd3").style.display="none";
    document.getElementById("ddI3").className = "fas fa-angle-down";
}


function showddl4(){ 
       if (pw4 == 0) {
        pw4 = 1;
        showdd4();
        hidedd2();
        hidedd3();
        hidedd1();
        hidedd5();
        hidedd6();
        pw2 = pw3 = pw1 = pw5 =pw6 =0;
    } else {
        pw4 = 0;
        hidedd4();
    }
}

function showdd4(){
    document.getElementById("dd4").style.display="block";
    document.getElementById("ddI4").className = "fas fa-angle-up";
}
function hidedd4(){
    document.getElementById("dd4").style.display="none";
    document.getElementById("ddI4").className = "fas fa-angle-down";
}


function showddl5(){ 
       if (pw5 == 0) {
        pw5 = 1;
        showdd5();
        hidedd2();
        hidedd3();
        hidedd4();
        hidedd1();
        hidedd6();
        pw2 = pw3 = pw4 = pw1 =pw6 =0;
    } else {
        pw5 = 0;
        hidedd5();
    }
}

function showdd5(){
    document.getElementById("dd5").style.display="block";
    document.getElementById("ddI5").className = "fas fa-angle-up";
}
function hidedd5(){
    document.getElementById("dd5").style.display="none";
    document.getElementById("ddI5").className = "fas fa-angle-down";
}



function showddl6(){ 
       if (pw6 == 0) {
        pw6 = 1;
        showdd6();
        hidedd2();
        hidedd3();
        hidedd4();
        hidedd5();
        hidedd1();
        pw2 = pw3 = pw4 = pw5= pw1 =0;
    } else {
        pw6 = 0;
        hidedd6();
    }
}

function showdd6(){
    document.getElementById("dd6").style.display="block";
    document.getElementById("ddI6").className = "fas fa-angle-up";
}
function hidedd6(){
    document.getElementById("dd6").style.display="none";
    document.getElementById("ddI6").className = "fas fa-angle-down";
}
//profile photo edit(sayanthan)

var img = 0;
function changeimg(){ 
	   if (img == 0) {
        img = 1;
        showi();
    } else {
        img = 0;
        hidei();
    }
}


function showi() {
 	document.getElementById("ddp").style.display="block";
}

function hidei() {
	document.getElementById("ddp").style.display="none";
}



//check password(nirojan)
function passwordchk(){
    if(pw1.value == pw2.value ){
        if(pword.value == ""){
            alert("fill the password field")
        }
        else{
            alert("registration successful");
        }
        
    }
    else{
        alert("passwords are not match");
        document.getElementById("sign").action = "signupP.html";
    }
    
}

//change password show passowrd option
var pwShown = 0;
function showEP(){ 
       if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}


function show() {
    var p = document.getElementById('passE');
    p.setAttribute('type', 'text');
    document.getElementById("passEI").className = "fas fa-eye-slash";
}

function hide() {
    var p = document.getElementById('passE');
    p.setAttribute('type', 'password');
    document.getElementById("passEI").className = "fas fa-eye";
}

//change password show passowrd(lavaniyah)
var pwShown = 0;
function showEPN(){ 
       if (pwShown == 0) {
        pwShown = 1;
        showX();
    } else {
        pwShown = 0;
        hideX();
    }
}


function showX() {
    var p = document.getElementById('passNew');
    p.setAttribute('type', 'text');
    document.getElementById("passEI2").className = "fas fa-eye-slash";
}

function hideX() {
    var p = document.getElementById('passNew');
    p.setAttribute('type', 'password');
    document.getElementById("passEI2").className = "fas fa-eye";
}

//change password show passowrd(lavaniyah)
var pwShown = 0;
function showEPNR(){ 
       if (pwShown == 0) {
        pwShown = 1;
        showY();
    } else {
        pwShown = 0;
        hideY();
    }
}


function showY() {
    var p = document.getElementById('passNewR');
    p.setAttribute('type', 'text');
    document.getElementById("passEI3").className = "fas fa-eye-slash";
}

function hideY() {
    var p = document.getElementById('passNewR');
    p.setAttribute('type', 'password');
    document.getElementById("passEI3").className = "fas fa-eye";
}

//check password (lavaniyah)
function passwordE(){
    if(passNew.value == passNewR.value ){
        if(pword.value == ""){
            alert("fill the password field")
        }
        else{
            alert("registration successful");
        }
        
    }
    else{
        alert("passwords are not match,fill again");
        document.getElementById("editW").action = "#";
    }
    
}

//otp show password(arivaran)
var pwShown = 0;
function showOTP(){ 
       if (pwShown == 0) {
        pwShown = 1;
        showOT();
    } else {
        pwShown = 0;
        hideOT();
    }
}


function showOT() {
    var p = document.getElementById('OTP');
    p.setAttribute('type', 'text');
    document.getElementById("OTPI").className = "fas fa-eye-slash";
}

function hideOT() {
    var p = document.getElementById('OTP');
    p.setAttribute('type', 'password');
    document.getElementById("OTPI").className = "fas fa-eye";
}

//taken from w3schools website(scroll function)
function scrol(){

mybutton = document.getElementById("mybtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

}

//privacy policy check(nirojan)
function enable(){
    if(document.getElementById("ac").checked)
    {
        document.getElementById("submit").disabled=false;
        document.getElementById("submit").style.backgroundColor  ="rgb(43 , 91 , 224)";
         document.getElementById("acc").style.backgroundColor  ="rgb(43 , 91 , 224)";
    }
    
    else
    {
        document.getElementById("submit").disabled=true;
        document.getElementById("submit").style.backgroundColor  ="#333";
        document.getElementById("acc").style.backgroundColor  ="#333";
    }

}

