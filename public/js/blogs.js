
var header=document.getElementsByClassName("header");
newDiv = document.createElement("div");
newDiv.className = "row firstNotice";

newDiv2 = document.createElement("div");
newDiv2.className = "col-12 offset-0 col-lg-5 offset-lg-6";

newDiv3 = document.createElement("div");
newDiv3.className = "col-12";
newDiv3.innerHTML="<span>Noticia</span>";
newDiv2.appendChild(newDiv3);

newDiv4 = document.createElement("div");
newDiv4.className = "col-12";
newDiv4.innerHTML="<span>"+document.getElementById("fecha_creacion").value+"</span>";
newDiv2.appendChild(newDiv4);

newDiv5 = document.createElement("div");
newDiv5.className = "col-12";
newDiv5.innerHTML="<h2>"+document.getElementById("titulo").value+"</h2>";
newDiv2.appendChild(newDiv5);

newDiv6 = document.createElement("div");
newDiv6.className = "col-12";
newDiv6.innerHTML="<a href="+document.getElementById("href").value+"'><span>Ver más    <img src='svg/arrowRightIcoWhite.svg'></span></a>";
newDiv2.appendChild(newDiv6);

newDiv.appendChild(newDiv2);
header[0].appendChild(newDiv);
console.log(header[0]);