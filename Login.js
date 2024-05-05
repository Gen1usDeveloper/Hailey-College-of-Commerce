function validateForm() {
    var email = document.getElementById("exampleInputEmail").value;
    var password = document.getElementById("exampleInputPassword").value;
    var emailMessage = document.getElementById("emailMessage");
    var passwordMessage = document.getElementById("passwordMessage");
  
    // Validate email
    if (email.trim() === "") {
      emailMessage.innerHTML = "Email is required";
      return false;
    }
  
    // Validate password
    if (password.trim() === "") {
      passwordMessage.innerHTML = "Password is required";
      return false;
    }
  
    // Form is valid, allow submission
    return true;
  }
  