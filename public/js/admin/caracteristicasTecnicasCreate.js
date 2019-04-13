function collapseCaracteristicasBlock(){
    document.getElementById("collapseCaracteristicas").style.display="block";
}

function customRadioInline1Active(){
    document.getElementById('customRadioInline1').checked="true";
}

function customRadioInline2Active(){
    document.getElementById('customRadioInline2').checked="true";
}

function caracTecnicaEditShow(editCaracteristicaId){
    $("#caracTecnicaEdit"+editCaracteristicaId).modal('show'); 
}