<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.main')
    <link rel="stylesheet" href="{{ asset('/css/login.css')}}">
</head>
<body>
    <div class="sidenav">
       
        <div class="login-main-text">
           <a href = "{{route('creditcard.index')}}"><h2>CreditFly</h2></a>
           <p>Login or register from here to access.</p>
        </div>
     </div>
     <div class="main">
        <div class="col-md-6 col-sm-12" id = "login">
           <div class="login-form">
            <form action="{{route('auth.do-login')}}" method="POST">
               @csrf
                 <div class="form-group">
                    <h5>Correo electronico</h5>
                    <input type="text" name = "email" class="form-control" placeholder="Correo electronico">
                 </div>
                 <br>
                 <div class="form-group">
                    <h5>Contraseña</h5>
                    <input type="password" name = "password" class="form-control" placeholder="Contraseña">
                 </div>
                 <br>
                 <button type="submit" class="btn btn-black">Ingresar</button>
                 <button type= "button" onclick = "showRegister()" class="btn btn-secondary">Registrarse</button>   
            </form>
            <br>
      
           </div>
        </div>
        <div class="col-md-6 col-sm-12" id = "registration" style="display: none">
         <div class="login-form">
          <form action="{{route('auth.do-register')}}" method="POST">
             @csrf
               <div class="form-group">
                  <h5>Nombre</h5>
                  <input type="text" name = "name" class="form-control" placeholder="Nombre">
               </div>
               <br>
               <div class="form-group">
                  <h5>Correo electronico</h5>
                  <input type="email" name = "email" class="form-control" placeholder="Correo electronico">
               </div>
               <br>
               <div class="form-group">
                  <h5>Contraseña</h5>
                  <input type="password" name = "password" class="form-control" placeholder="Contraseña">
               </div>
               <br>
               <div class="form-group">
                  <h5>Confirmar Contraseña</h5>
                  <input type="password" name = "password_confirmation" class="form-control" placeholder="Confirmar Contraseña">
               </div>
               <br>
               <button type="submit" class="btn btn-black">Registrarse</button>
               
          </form>
         
         </div>
      </div>
     </div>
</body>
<script>
   function showRegister(){
      document.getElementById("registration").style.display = "block";
      document.getElementById("login").style.display = "none"
   }
   function showLogin(){
      document.getElementById("registration").style.display = "none";
      document.getElementById("login").style.display = "block"
   }
   

</script>
</html>