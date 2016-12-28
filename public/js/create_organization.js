function goBackToContactListClick(){
    window.location.href="organization_list.html";
}
$(function(){
  $("#goBackToOrganizationListButton").click(goBackToContactListClick);
});