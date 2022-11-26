function Buscar() {
    let ci = document.getElementById('ci').value;
    let pass = document.getElementById('pass').value;
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET","../PHP/Estudiante/buscar.php?ci="+ci +"&pass="+pass,true);
  xmlhttp.send();
}

function listaNota() {
    let grupo = document.getElementById('grupo').value;
    var xmlhttp = new XMLHttpRequest();
  
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tabla").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../PHP/Docente/ultimo.php?grupo="+ grupo, true);
    xmlhttp.send();
  }

  function Exonera() {
    let grupo = document.getElementById('grupo').value;
    var xmlhttp = new XMLHttpRequest();
  
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tabla").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../PHP/Docente/mostrarexonerados.php?grupo="+ grupo, true);
    xmlhttp.send();
  }

  function NoExonera() {
    let grupo = document.getElementById('grupo').value;
    var xmlhttp = new XMLHttpRequest();
  
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tabla").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../PHP/Docente/mostrarnoexoneran.php?grupo="+ grupo, true);
    xmlhttp.send();
  }