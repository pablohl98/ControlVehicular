
function posteliminapatru() {
  let id = document.getElementById("id").value;
    console.log("id="+ id);
  var xhr = new XMLHttpRequest();
  
  xhr.addEventListener("readystatechange", function() {
    if(this.readyState === 4) {
    }
  });
  
  xhr.open("POST", "http://localhost/practicas/control_vehicular/eliminarPatru.php?id="+ id);
  
  xhr.send();
}