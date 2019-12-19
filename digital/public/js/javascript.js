var campos = Array.from(document.getElementById("formulario").elements);

campos.forEach(function(campo){


  campo.addEventListener('input',function(){
    if(this.name == "nombre"){
      if(this.value == '' || this.value == null || this.value.length < 3 ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o tiene menos de 3 caracteres";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "apellido"){
      if(this.value == '' || this.value == null || this.value.length < 3 ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o tiene menos de 3 caracteres";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "edad"){
      if(this.value == '' || this.value == null || this.value > 150 ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o ser menor de 150";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "email"){
      var regx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(this.value == '' || this.value == null || regx.test(String(this.value).toLowerCase()) == false ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o el mail es invalido";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "password"){
      if(this.value == '' || this.value == null){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "repassword"){
      var password =  document.getElementById("formulario").elements["password"].value;
      if(this.value == '' || this.value == null || this.value !== password ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o no coincide con la contraseña";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }
  });


  campo.addEventListener('blur',function(){

    var totalCampos = campos.length;
    var camposValidos = campos.filter(function(campo){return campo.classList.contains('is-valid')});
    var resultado = [];

    camposValidos.forEach(function(campo){
      resultado.push(campo.value);
    });

    if(this.name == "nombre"){
      if(this.value == '' || this.value == null || this.value.length < 3 ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o tiene menos de 3 caracteres";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "apellido"){
      if(this.value == '' || this.value == null || this.value.length < 3 ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o tiene menos de 3 caracteres";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "edad"){
      if(this.value == '' || this.value == null || this.value > 150 ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o ser menor de 150";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "email"){
      var regx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(this.value == '' || this.value == null || regx.test(String(this.value).toLowerCase()) == false ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o el mail es invalido";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "password"){
      if(this.value == '' || this.value == null){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }
    }

    if(this.name == "repassword"){
      var password =  document.getElementById("formulario").elements["password"].value;
      if(this.value == '' || this.value == null || this.value !== password ){
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
        var mensaje = this.parentElement.lastElementChild;
        mensaje.innerHTML = "El campo es requerido o no coincide con la contraseña";
      }
      else{
        this.classList.add('is-valid');
        this.classList.remove('is-invalid');
      }

      if(totalCampos == camposValidos.length){
        document.getElementById('formulario').classList.add('hidden');
        document.getElementById('formulario').parentElement.innerHTML =
        `<h1>Registro exitoso</h1>`;
        console.log(resultado);

      }
      else {
        document.getElementById('formulario').classList.add('d-block');
      }
    }
  });


});
