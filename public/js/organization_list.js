
function showOtherMenuClick(){
    window.location.href="create_organization.html";
}
$(function(){
  $("#showOtherMenuButton").click(showOtherMenuClick);
  $(".edit_button").click(function(){
    window.location.href="edit_organization.html";
  });
});