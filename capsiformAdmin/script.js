const sidebar = document.getElementById("sidebar");
const openSidebarBtn = document.getElementById("open-sidebar");
const closeSidebarBtn = document.getElementById("close-sidebar");

openSidebarBtn.addEventListener("click", () => {
  sidebar.classList.remove("-translate-x-full");
});

closeSidebarBtn.addEventListener("click", () => {
  sidebar.classList.add("-translate-x-full");
});

document.addEventListener("click", (event) => {
  if (
    window.innerWidth < 768 &&
    !sidebar.contains(event.target) &&
    !openSidebarBtn.contains(event.target)
  ) {
    sidebar.classList.add("-translate-x-full");
  }
});

// Script for Edit-button & form Validation
// FormEdit
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

function showEditForm(id, username, email) {
  document.getElementById("edit_id").value = id;
  document.getElementById("edit_username").value = username;
  document.getElementById("edit_email").value = email;
  document.getElementById("edit_password").value = "";
  document.getElementById("edit_confirmPassword").value = "";

  document.getElementById("userErr").textContent = "";
  document.getElementById("emailErr").textContent = "";
  document.getElementById("conpassErr").textContent = "";

  document.getElementById("editFormContainer").style.display = "block";
  document.getElementById("tableContainer").classList.add("blurred");

  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}

function hideEditForm() {
  document.getElementById("editFormContainer").style.display = "none";
  document.getElementById("tableContainer").classList.remove("blurred");
}

function validEditForm() {
  let user = document.getElementById("edit_username").value.trim();
  let email = document.getElementById("edit_email").value.trim();
  let pass = document.getElementById("edit_password").value;
  let conPass = document.getElementById("edit_confirmPassword").value;
  let valid = true;

  document.getElementById("userErr").textContent = "";
  document.getElementById("emailErr").textContent = "";
  document.getElementById("conpassErr").textContent = "";

  if (user === "") {
    document.getElementById("userErr").textContent = "Username is required.";
    valid = false;
  }

  if (email === "") {
    document.getElementById("emailErr").textContent = "Email is required.";
    valid = false;
  } else {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      document.getElementById("emailErr").textContent = "Invalid email format.";
      valid = false;
    }
  }

  if (pass !== "") {
    if (pass.length < 6) {
      document.getElementById("conpassErr").textContent =
        "Password must be at least 6 characters.";
      valid = false;
    }
    if (pass !== conPass) {
      document.getElementById("conpassErr").textContent =
        "Passwords do not match.";
      valid = false;
    }
  }

  return valid;
}
