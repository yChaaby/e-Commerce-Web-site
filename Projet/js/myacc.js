var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirmPassword");

enableSubmitButton();

function validatePassword() {
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
    return false;
  } else {
    confirm_password.setCustomValidity('');
    return true;
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

function enableSubmitButton() {
  document.getElementById('update').disabled = false;
}

function disableSubmitButton() {
  document.getElementById('update').disabled = true;
}

function validateSignupForm() {
  var form = document.getElementById('signupForm');
  
  for(var i=0; i < form.elements.length; i++){
      if(form.elements[i].value === '' && form.elements[i].hasAttribute('required')){
        console.log('There are some required fields!');
        return false;
      }
    }
  
  if (!validatePassword()) {
    return false;
  }
  
  onSignup();
}

function onSignup() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    
    disableSubmitButton();
    
    if (this.readyState == 4 && this.status == 200) {
      enableSubmitButton();
    }
    else {
      console.log('AJAX call failed!');
      setTimeout(function(){
        enableSubmitButton();
      }, 1000);
    }
    
  };
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";

  }
}
function headermv(){
    var modal = document.getElementById('id01');
    var header = document.getElementById('header');
    header.style.display = "none";
    modal.style.display="block";
}
function headermv2(){
    var modal2 = document.getElementById('id02');
    var header = document.getElementById('header');
    header.style.display = "none";
    modal2.style.display="block";
}
function headerback(){
  var header = document.getElementById('header');
  header.style.display = "block";
  document.getElementById('id01').style.display="none";
  document.getElementById('id02').style.display="none";
}
