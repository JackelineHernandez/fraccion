
document.getElementById("group2").style="display:none";
document.getElementById("group3").style="display:none";

var ruta=window.location.href;
if(ruta.indexOf("registrado")!=-1){
    document.getElementById("group1").style="display:none";
    document.getElementById("group4").style="display:block";
}else{
    document.getElementById("group4").style="display:none";
}

var header=document.getElementsByClassName("header")[0];
var newDiv = document.createElement("div");
newDiv.className ="row col sectionName";
newDiv.innerHTML = "<h2>Registro Fracción</h2>"
header.appendChild(newDiv);   
  
document.getElementById("inputNombres").onchange = activarSiguiente1;
document.getElementById("inputApellidos").onchange = activarSiguiente1;
document.getElementById("inputDia").onchange = activarSiguiente2;
document.getElementById("inputMes").onchange = activarSiguiente2;
document.getElementById("inputAno").onchange = activarSiguiente2;

document.getElementById("inputPais").onchange = activarSiguiente3;
document.getElementById("inputNumero").onchange = activarSiguiente3;
document.getElementById("inputEmail").onchange = activarSiguiente3;


function activarSiguiente1(){
    if(document.getElementById("inputNombres").value!="" && document.getElementById("inputApellidos").value!=""){
        document.querySelector("a[id='enlaceSiguiente1'] img").src="svg/arrowRightIcoBlue.svg";
        document.querySelector("a[id='enlaceSiguiente1'] span").style="color: #0B3861";
        document.querySelector("a[id='enlaceSiguiente1']").style="pointer-events: all";
    }   
}

function activarSiguiente2(){
    var e = document.getElementById("inputDia");
    var dia = e.options[e.selectedIndex].value;

    e = document.getElementById("inputMes");
    var mes = e.options[e.selectedIndex].value;

    e = document.getElementById("inputAno");
    var ano = e.options[e.selectedIndex].value;

    if(dia!=0 && mes!=0 && ano!=0){
        document.querySelector("a[id='enlaceSiguiente2'] img").src="svg/arrowRightIcoBlue.svg";
        document.querySelector("a[id='enlaceSiguiente2'] span").style="color: #0B3861";
        document.querySelector("a[id='enlaceSiguiente2']").style="pointer-events: all";
    }
}

function activarSiguiente3(){
    pais= document.getElementById("inputPais").value;
    telefono = document.getElementById("inputNumero").value;
    email = document.getElementById("inputEmail").value;
    if(pais!="" && telefono!="" && email!=""){
        document.querySelector("a[id='enlaceSiguiente3'] img").src="svg/arrowRightIcoBlue.svg";
        document.querySelector("a[id='enlaceSiguiente3'] span").style="color: #0B3861";
        document.querySelector("a[id='enlaceSiguiente3']").style="pointer-events: all";
    }   
}

document.getElementById("enlaceSiguiente1").addEventListener("click", function(e){
    if(document.getElementById("inputNombres").value!="" && document.getElementById("inputApellidos").value!=""){
        document.getElementById("group1").style="display:none";
        document.getElementById("group2").style="display:block";
        imagen=document.getElementById("enlaceSiguiente1 img");
    }else{
        alert("Debe ingresar todos los datos");
    }
});

document.getElementById("enlaceSiguiente2").addEventListener("click", function(e){
    var e = document.getElementById("inputDia");
    var dia = e.options[e.selectedIndex].value;

    e = document.getElementById("inputMes");
    var mes = e.options[e.selectedIndex].value;

    e = document.getElementById("inputAno");
    var ano = e.options[e.selectedIndex].value;

    if(dia!=0 && mes!=0 && ano!=0){
        document.getElementById("group1").style="display:none";
        document.getElementById("group2").style="display:none";
        document.getElementById("group3").style="display:block";
    }else{
        alert("Debe ingresar todos los datos");
    }
});

document.getElementById("enlaceSiguiente3").addEventListener("click", function(e){
    pais= document.getElementById("inputPais").value;
    telefono = document.getElementById("inputNumero").value;
    email = document.getElementById("inputEmail").value;
    if(pais!="" && telefono!="" && email!=""){
        /*document.getElementById("group1").style="display:none";
        document.getElementById("group2").style="display:none";
        document.getElementById("group3").style="display:none";
        document.getElementById("group4").style="display:block";*/
        document.getElementById("formRegistro").submit();
    }else{
        alert("Debe ingresar todos los datos");
    }
});

document.getElementById("enlaceSiguiente4").addEventListener("click", function(e){
        location.href="/";
    
});

