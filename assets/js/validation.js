var createdPW = document.getElementById("createPW");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var spcl = document.getElementById("spcl");
var confirmedPW = document.getElementById("confirmPW");


// When the user clicks on the password field, show the message box
createdPW.onfocus = function() {
  document.getElementById("pwErrMessage").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
createdPW.onblur = function() {
  document.getElementById("pwErrMessage").style.display = "none";
}

// When the user starts to type something inside the password field
createdPW.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(createdPW.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(createdPW.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(createdPW.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(createdPW.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }


 // Validate spcl character
 var spclChar = /[#?!@$%^&*-]/g;
 if(createdPW.value.match(spclChar)) {
   spcl.classList.remove("invalid");
   spcl.classList.add("valid");
 } else {
   spcl.classList.remove("valid");
   spcl.classList.add("invalid");
 }
}
     
// confirm pw 
function isPasswordMatch() {
    var password = $("#createPW").val();
    var confirmPassword = $("#confirmPW").val();

    if (password != confirmPassword) $("#CheckPassword").html("Kindly re enter the same password ").css({color: "#ff0000"});
    else $("#CheckPassword").html("Click on Next to proceed").css({color: "#228B22"});
}

$(document).ready(function () {
    $("#confirmPW").keyup(isPasswordMatch);
});
