
  function validateForm() {
    var pass = document.getElementById("pass").value;
    var confirmpass = document.getElementById("confirmpass").value;
    var passwordError = document.getElementById("passwordError");

    if (pass !== confirmpass) {
      passwordError.innerHTML = "Passwords do not match.";
      return false;
    } else {
      passwordError.innerHTML = "";
      return true;
    }
  }
