function removeAlert() {
    var alertDiv = document.getElementById("success-alert");
    if (alertDiv) {
      alertDiv.remove();
    }
  }
  
  setTimeout(removeAlert, 1500);