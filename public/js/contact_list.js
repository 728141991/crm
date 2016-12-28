
function showOtherMenuClick(){
    window.location.href="create_contact.html";
}
$(function(){
  $("#showOtherMenuButton").click(showOtherMenuClick);
  $(".edit_button").click(function(){
  	window.location.href="edit_contact.html";
  });
});