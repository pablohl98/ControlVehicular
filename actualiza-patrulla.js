
function postactualizapatru() {
  let id = document.getElementById("id").value;
  let nombre = document.getElementById("nombre").value;
  let marca = document.getElementById("marca").value;
  let modelo = document.getElementById("modelo").value;
  console.log("id="+ id +"&nombre=" + nombre +"&marca=" + marca +"&modelo=" + modelo);
  var xhr = new XMLHttpRequest();
  
  xhr.addEventListener("readystatechange", function() {
    if(this.readyState === 4) {
    }
  });
  
  xhr.open("POST", "C:/wamp64/www/control_vehicular/actualizarPatrulla.php?id="+ id +"&nombre=" + nombre +"&marca=" + marca +"&modelo=" + modelo);
  
  xhr.send();
}