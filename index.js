
function postActualizar () {
  let id = document.getElementById("id").value;
  let nombre = document.getElementById("nombre").value;
  let ape_pat = document.getElementById("ape_pat").value;
  let ape_mat = document.getElementById("ape_mat").value;
  let comandancia = document.getElementById("comandancia").value;
  let email = document.getElementById("email").value;
  let celular = document.getElementById("celular").value;
    //console.log("id="+ id +"&nombre=" + nombre +"&ape_pat=" + ape_pat +"&ape_mat=" + ape_mat +"&comandancia=" + comandancia +"&email=" + email +"&celular=" + celular);
  var xhr = new XMLHttpRequest();
  
  xhr.addEventListener("readystatechange", function() {
    if(this.readyState === 4) {
    }
  });
  
  xhr.open("POST", "http://localhost/practicas/control_vehicular/actualizarAgente.php?id="+ id +"&nombre=" + nombre +"&ape_pat=" + ape_pat +"&ape_mat=" + ape_mat +"&comandancia=" + comandancia +"&email=" + email +"&celular=" + celular);
  
  xhr.send();
}