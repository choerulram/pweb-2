// hapus alert
function removeAlert() {
    //  mengambil elemen dengan "success-alert"
    var alertDiv = document.getElementById("success-alert");

    // jika elemen alert ada 
    if (alertDiv) {
      alertDiv.remove();
    }
  }
  
  // set waktu dijalankan adalah 1500 milidetik (1,5 detik)
  setTimeout(removeAlert, 1500);