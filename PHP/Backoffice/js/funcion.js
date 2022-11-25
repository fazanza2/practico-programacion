function Estudiante() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("funcion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Estudiante/tabla.php?q=");
    xmlhttp.send();
  }
  
  function AEstudiante() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("formularioFuncion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Estudiante/SubirEstudiante.php");
    xmlhttp.send();
  }
  
  function MEstudiante() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("formularioFuncion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Estudiante/EditarEstudiante.php");
    xmlhttp.send();
  }
  
  
  
  function EEstudiante() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("formularioFuncion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Estudiante/EliminarEstudiante.php");
    xmlhttp.send();
  }

  function Grupos() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("funcion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Grupos/tabla.php?q=");
    xmlhttp.send();
  }
  
  function AGrupos() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("formularioFuncion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Grupos/SubirGrupos.php");
    xmlhttp.send();
  }
  
  function MGrupos() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("formularioFuncion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Grupos/EditarGrupos.php");
    xmlhttp.send();
  }
  
  
  
  function EGrupos() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("formularioFuncion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Grupos/EliminarGrupos.php");
    xmlhttp.send();
  }

  function Promedio() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("funcion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Promedios/tabla.php?q=");
    xmlhttp.send();
  }
  
  function APromedio() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("formularioFuncion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Promedios/SubirPromedios.php");
    xmlhttp.send();
  }
  
  function MPromedio() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("formularioFuncion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Promedios/EditarPromedios.php");
    xmlhttp.send();
  }
  
  
  
  function EPromedio() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var getClass = document.getElementsByClassName("formularioFuncion");
        for (i = 0; i < getClass.length; i++) {
          getClass[i].innerHTML = this.responseText;
        }
      }
    };
    xmlhttp.open("GET", "Promedios/EliminarPromedios.php");
    xmlhttp.send();
  }