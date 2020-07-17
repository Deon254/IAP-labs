$(document).ready(function () {
 /* Returns nummber of minutes ahead or behind green wich meridian*/

 var offset = new Date().getTimezoneOffset();

 /*return number of milliseconds since 1970/01/01:*/
 var timestamp = new Date().getTime();

 /*Convert our time to universal Time coordinated / Universal Coordinated time */

 var utc_timestamp = timestamp + (60000 * offset);

 //Passing the values to hidden inputs upon form submission
 $("#submit").click(function (event) {
  $('#utc_timestamp').val(utc_timestamp);
  $('#time_zone_offset').val(offset)
 });

});