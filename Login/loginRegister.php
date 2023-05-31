<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Typografia -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <div class="container-m">
        <div class="section1">
           
         <div class="d-flex justify-content-center align-items-center">
            <img src="img/camper.png" alt="" class="logo"></div>
            <div class="d-flex justify-content-center align-items-center"><h1 style="font-weight: 800;">BIENVENIDOS</h1></div>
            <div  class="d-flex justify-content-center align-items-center" >
                <form action = "loguearse.php" method = "POST"> 
                    <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                        <input 
                          type="text"
                          id="email"
                          name="email"
                          class="form-control"  
                        />
                      <div id="emailHelp" class="form-text">Mañana es una excusa maravillosa, ¿No crees?</div>
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                        <input 
                          type="password"
                          id="password"
                          name="password"
                          class="form-control"  
                        />
                    </div>
                 
                    <input type="submit" value="Logearse" name="Logearse" class="btn btn-primary">
                  </form>
                  

            </div>
            <div class="d-flex justify-content-center align-items-end mt-5 p-2">
                <p style="text-align: center;">Artemis aprendiendo con TODAAAA!</p>

            </div>

      
        </div>
        <div class="section2" id="section2">
             <div class="d-flex justify-content-star " >
                <h1 style="font-weight: 800;font-size:larger;">Nuevo Registro</h1></div>
                <p style="font-style: italic;">"cuando enseñar es un arte aprender es un placer"</p>
          
                
             <div  class="d-flex justify-content-center align-items-center" >
                
                <form action= "registrarse.php" method = "POST">
                    <h1 class="m-5" style="font-weight: 800;">REGISTRAR USUARIO</h1>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input 
                          type="text"
                          id="email"
                          name="email"
                          class="form-control"  
                        />
                      </div>
                    <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                        <input 
                          type="text"
                          id="username"
                          name="username"
                          class="form-control"  
                        />
                    </div>
                    <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                        <input 
                          type="password"
                          id="password"
                          name="password"
                          class="form-control"  
                        />
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Registrarse" name="registrarse">
                  </form>

            </div>
            <div class="d-flex justify-content-center align-items-end m-5"><img src="img/Diseño sin título (1).png" alt="" style="width: 50%; height: 10%; object-fit: cover;" ></div>
                  


                 
         
        </div>
      </div>

      <!-- Boostrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     
    
</body>
</html>