var sel = document.getElementById("sel");
var sell = document.getElementById("sell");
var btn = document.getElementById("btn");
var btnn = document.getElementById("btnn");

btnn.addEventListener('click', function (e) {

if (sell.style.display === "none") {
    sell.style.display = "block";
    sel.style.display ="none";
  } 

})

btn.addEventListener('click', function (e) {

if (sel.style.display === "none") {
    sel.style.display = "block";
    sell.style.display ="none";
  } 

})
