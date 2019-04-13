
document.getElementById("group2").style="display:none";
document.getElementById("group3").style="display:none";
document.getElementById("group4").style="display:none";

if(screen.width<992){
    var inputs = document.getElementsByClassName("form-check-inline");
    var cant = inputs.length;
    for(var i=0; i<cant; i++){
        document.querySelector("div[class~='form-check-inline'] label").classList.add("label-list");;
        document.querySelector("div[class~='form-check-inline']").classList.remove("form-check-inline");
        
    }
}

function continuarCal(){
    
    var edad = document.getElementById("edad").value;
    var trabajo= document.getElementById("trabajo").value;

    if(edad!="" && trabajo!=""){
        document.getElementById("calcular").submit();
    }
}

function activarSiguiente1(){
    if(document.getElementById("inputNombres").value!="" && document.getElementById("inputEmail").value!=""){
        document.getElementById("group1").style="display:none";
        document.getElementById("group2").style="display:flex";
    }   
}

function activarSiguiente2(){
    var siguiente2=false;
    $("input[name='tiempoInversion']").each(function () {
        if ($(this).prop('checked') == true) {
            siguiente2=true;
        }
    });
    if(siguiente2){
        document.getElementById("group2").style="display:none";
        document.getElementById("group3").style="display:flex";
    }
}

function activarSiguiente3(){
    var siguiente3=false;
    $("input[name='comoSupo']").each(function () {
        console.log(this);
        if ($(this).prop('checked') == true) {
            siguiente3=true;
        }
    });
    if(siguiente3){
        document.getElementById("group3").style="display:none";
        document.getElementById("group4").style="display:flex";
    }
}

function activarSiguiente4(){
    document.getElementById("formCalculadora").submit();
}