function showAlert() {
  var confirmLogout = confirm("Are you sure you want to log out?");
  if (confirmLogout) {
      window.location.href = "index.html";
  } else {
      return false;
        }
    }