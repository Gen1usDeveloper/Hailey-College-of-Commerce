// Assuming you have a form with the id "myForm"
const form = document.getElementById('form-body');

// Event handler for form submission
form.addEventListener('submit', handleSubmit);

function handleSubmit(event) {
  event.preventDefault();

  // Get form data
  const formData = new FormData(form);

  // Create an AJAX request
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'admission_form.php'); // Replace 'process_form.php' with the actual URL or filename of your PHP script

  // Set up the callback function for AJAX request
  xhr.onload = function() {
    if (xhr.status === 200) {
      const response = xhr.responseText;

      // Display an alert based on the response
      if (response === 'success') {
        showAlert('Form submitted successfully!', 'success');
      } else {
        showAlert('Error submitting the form. Please try again.', 'error');
      }
    } else {
      showAlert('Error submitting the form. Please try again.', 'error');
    }
  };

  // Send the form data
  xhr.send(formData);
}

// Function to display an alert message
function showAlert(message, type) {
  // Create a new alert element
  const alertElement = document.createElement('div');
  alertElement.className = `alert alert-${type}`;
  alertElement.textContent = message;

  // Get the form container element
  const formContainer = document.getElementById('formContainer');

  // Insert the alert element at the top of the form container
  formContainer.insertBefore(alertElement, formContainer.firstChild);

  // Scroll to the top of the form container to show the alert
  formContainer.scrollTop = 0;
}
