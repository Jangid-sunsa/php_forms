// function used for password show or hide
function togglePassword(fieldId, iconElement) {
  const input = document.getElementById(fieldId);
  const icon = iconElement.querySelector("i");

  if (input.type === "password") {
    input.type = "text";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
  } else {
    input.type = "password";
    icon.classList.remove("fa-eye-slash");
    icon.classList.add("fa-eye");
  }
}

// validation for form
document
  .getElementById("submit-btn")
  .addEventListener("click", function (event) {
    event.preventDefault();
    validForm();
  });

function validForm() {
  const Uname = document.getElementById("user");
  const Uemail = document.getElementById("email");
  const Upassword = document.getElementById("pass");
  const UconPass = document.getElementById("conPass");

  const usernameErr = document.getElementById("userErr");
  const mailErr = document.getElementById("emailErr");
  const passErr = document.getElementById("passwordErr");
  const cpassErr = document.getElementById("conpassErr");

  let isValid = true;
  usernameErr.textContent = "";
  mailErr.textContent = "";
  passErr.textContent = "";
  cpassErr.textContent = "";

  if (Uname.value.trim() === "") {
    usernameErr.textContent = "Enter your name";
    isValid = false;
  } else if (/\d/.test(Uname.value)) {
    usernameErr.textContent = "Enter your name properly";
  }

  if (Uemail.value.trim() === "") {
    mailErr.textContent = "Please enter your email.";
    isValid = false;
  } else if (!Uemail.value.includes("@") || !Uemail.value.includes(".")) {
    mailErr.textContent = "Please enter your valid email.";
    isValid = false;
  }

  if(Upassword.value.trim() === ""){
    passErr.textContent = "Enter your password";
    isValid = false;
  }

  if(UconPass.value.trim() === ""){
    cpassErr.textContent = "password mitmatched";
    isValid = false;
  }

  return isValid;
}
