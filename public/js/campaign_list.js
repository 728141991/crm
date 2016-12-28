
function showOtherMenuClick(){
    window.location.href="create_campaign.html";
}
$(function(){
  $("#showOtherMenuButton").click(showOtherMenuClick);
  $(".edit_button").click(function(){
    window.location.href="edit_campaign.html";
  });
});