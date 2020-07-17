function validateForm() {
 var fname = document.getElementsByName("first_name")[0].value;
 var lname = document.getElementsByName("last_name")[0].value;
 var city = document.getElementsByName("city_name")[0].value;

 if (fname == "" || lname == "" || city == "") {
  alert("Kindly Fill in All Values");
  return false;
 }


 alert("Your Record has successfully added")
 return true;
}