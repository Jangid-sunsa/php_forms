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

// form validation
document
  .getElementById("registration_form")
  .addEventListener("submit", function (event) {
    const isValid = validForm();

    if (!isValid) {
      event.preventDefault();
    }
  });

function validForm() {
  const Uname = document.getElementById("user");
  const Uemail = document.getElementById("email");
  const pass = document.getElementById("pass");
  const conPass = document.getElementById("conPass");

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
    usernameErr.textContent = "Enter username";
    isValid = false;
  } else if (/\d/.test(Uname.value)) {
    usernameErr.textContent = "Enter username properly (no digits)";
    isValid = false;
  }

  if (Uemail.value.trim() === "") {
    mailErr.textContent = "Please enter your email.";
    isValid = false;
  } else if (!Uemail.value.includes("@") || !Uemail.value.includes(".")) {
    mailErr.textContent = "Please enter a valid email.";
    isValid = false;
  }

  const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

  if (pass.value === "") {
    passErr.textContent = "Enter your password";
    isValid = false;
  } else if (!passwordRegex.test(pass.value)) {
    passErr.textContent =
      "Password: min 8 chars, incl. A-Z, a-z, 0-9 & special char.";
    isValid = false;
  }

  if (conPass.value === "") {
    cpassErr.textContent = "Confirm your password";
    isValid = false;
  } else if (pass.value !== conPass.value) {
    cpassErr.textContent = "Passwords do not match";
    isValid = false;
  }

  return isValid;
}



