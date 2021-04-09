var b1 = document.querySelector("#button1");

b1.addEventListener("click", function(){
  var x1 = document.querySelector(".p1");
  x1.innerHTML = "Hello";
})


var b2 = document.querySelector("#button2");
b2.addEventListener("click", function(){
   var x = document.querySelector("#input1");
   var x1 = document.querySelector(".p2");
   x1.innerHTML = "Hello " + x.value;
})