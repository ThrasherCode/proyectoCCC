alert(entra);
var button = document.getElementById("btnRegMod");
var nombre = document.getElementById("id_nombre");
var app1 = document.getElementById("id_apellido1");
var app2 = document.getElementById("id_apellido2");
var estatus = document.getElementById("id_estatus");
var span1 = document.getElementById("span1");
var span2=document.getElementById("span2");
var span3=document.getElementById("span3");

button.addEventListener("click",validarDoce);
var soloLetras=/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/;



function validarDoce() {

 alert("datos"+" "+button.value+" "+nombre.value+" "+app1.value+" "+app2.value+" "+estatus.value);

 if (soloLetras.test(nombre.value+app1.value+app2.value+estatus.value)){
 	alert("si es valido");
 	span1.classList.add("spInvisible");
 	span2.classList.add("spInvisible");
 	span3.classList.add("spInvisible");
 	nombre.classList.remove("errorInput");
 }else{

 	alert("no es valido");
 	nombre.classList.add("errorInput");
 	span1.classList.remove("spInvisible");
 	span2.classList.remove("spInvisible");
 	span3.classList.remove("spInvisible");
 	//span2.classList.add("");
 	//span3.classList.add("");


 }
}

function checkVacio(){
 

}




