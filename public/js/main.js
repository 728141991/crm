<<<<<<< HEAD
$('select').material_select();
=======
$('select').material_select();
var urlStr=window.location.pathname;
console.log(urlStr);
if(urlStr.indexOf('contact')!==-1){
    document.getElementById('contact').style.color='#1B1E32';
    document.getElementById('contact').style.backgroundColor='#6DACEB';
}
if(urlStr.indexOf('organization')!==-1){
    document.getElementById('organization').style.color='#1B1E32';
    document.getElementById('organization').style.backgroundColor='#6DACEB';
}

var item1=document.getElementById('item1');
var item2=document.getElementById('item2');
var item3=document.getElementById('item3');
var detail_item1=document.getElementById('detail_item1');
var detail_item2=document.getElementById('detail_item2');
var detail_item3=document.getElementById('detail_item3');
item1.addEventListener("click",item1Fun);
item2.addEventListener("click",item2Fun);
item3.addEventListener("click",item3Fun);
function item1Fun(){
    detail_item1.style.display="block";
    detail_item2.style.display="none";
    detail_item3.style.display="none";
}
function item2Fun(){
    detail_item1.style.display="none";
    detail_item2.style.display="block";
    detail_item3.style.display="none";
}
function item3Fun(){
    detail_item1.style.display="none";
    detail_item2.style.display="none";
    detail_item3.style.display="block";
}

function overClose(){
    document.getElementById('aaaaa').style.display="none";
}
function overOpen(){
    document.getElementById('aaaaa').style.display="block";
}
document.getElementById('overClose').addEventListener('click',overClose);
document.getElementById('chocie-more').addEventListener('click',overOpen);
>>>>>>> panshan
