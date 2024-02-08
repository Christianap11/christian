<html>
  <head>
    <title>PHP Test</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100" style="background-color: #508bfc;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <h3 class="mb-5">Sign in</h3>
                <form method="get" action="comprobacion.php">
                  <div class="form-outline mb-4">
                    <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="name"/>
                    <label class="form-label" for="typeEmailX-2">User</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="con"/>
                    <label class="form-label" for="" >Password</label>

                  </div>

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-start mb-4">
                  </div>

                  <label class="form-label text-danger" for="" >Usuario o contraseña incorrecta</label>
                  <br/> <br/>
                  <button class="btn btn-primary btn-lg btn-blocktext-danger" type="submit">Login</button>
                  
                  
                
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>