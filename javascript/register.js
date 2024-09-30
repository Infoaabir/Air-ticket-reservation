
var input = document.querySelector("#phoneNumber");
var iti = window.intlTelInput(input, {
  initialCountry: "us",  // Set the initial country (you can customize it)
  separateDialCode: true,
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
});
