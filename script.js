//form, AJAX validation 
function validateForm(event) {
    event.preventDefault();

    var form = document.getElementById("form");
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          if (response.success) {
            alert("Form submitted successfully");
            // You can redirect to another page or perform other actions here
          } else {
            // Display error messages and apply error styles
            displayError(response.errors);
          }
        } else {
          console.log("AJAX request error: " + xhr.status);
        }
      }
    };

    xhr.open("POST", "validation.php", true);
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xhr.send(formData);
  }

  function displayError(errors) {
    var fields = Object.keys(errors);

    fields.forEach(function(field) {
      var fieldElement = document.getElementsByName(field)[0];
      var errorElement = document.getElementById(field + "Error");

      // Apply error style to field
      fieldElement.classList.add("error-field");

      // Display error message
      errorElement.textContent = errors[field];
    });
  }

  document.getElementById("form").addEventListener("submit", validateForm);

  //password confirmation

  function checkPasswordMatch() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    const passwordMatchMessage = document.getElementById('password-match-message');

    //if (password === confirmPassword) {
      //passwordMatchMessage.textContent = 'Passwords match.';
   // } else {
      //passwordMatchMessage.textContent = 'Passwords do not match.';
    //}

    if (password === confirmPassword && password !== "") {
        passwordMatchMessage.style.color = "green";
        passwordMatchMessage.textContent = "Passwords match.";
    } else if (password === "" || confirmPassword === "") {
        passwordMatchMessage.textContent = "";
    } else {
        passwordMatchMessage.style.color = "red";
        passwordMatchMessage.textContent = "Passwords do not match.";
    }
  }