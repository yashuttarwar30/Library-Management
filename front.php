<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-color: antiquewhite;">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SSY Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-20">
           
            <li class="nav-item" >
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <div class="container my-4 px-0 py-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active "> 
          <img src="https://www.educ.cam.ac.uk/images/library/2021/carousel-welcome-slide1.jpg" class="d-block w-100" alt="..." style="
          width: 120px;
          height: 500px;
          ">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>First slide label</h5> -->
            <!-- <p>Nothing is pleasanter than exploring a library.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="d-block w-100" alt="..." style="
          width: 120px;
          height:500px;">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Albert Einstein </h5>
            <p>The only thing that you absolutely have to know, is the location of the library.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="..." style="
          width: 120px;
          height:500px;">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>R. David Lankes </h5>
            <p>Bad libraries build collections, good libraries build services, great libraries build communities.</p> -->
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>


  <div class="container">
    <h1 class="my-4 text-center">Select Operation</h1>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://i.ytimg.com/vi/RdQekSP2DoA/maxresdefault.jpg" class="d-block w-100" alt="..." style="height : 235px;">
              <div class="card-body text-center">
              
                <h3>Admin</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <form  action="/library/adminlogin.php" method="post">
                            <div class="form-group">
                                <button class="btn btn-sm btn-outline-secondary">VIEW</button>
                            </div>
    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="http://www.lnipe.edu.in/wordpress/wp-content/uploads/2020/05/Student-Portal.jpg" class="d-block w-100" alt="..." style="
                height: 235px;">
              <div class="card-body text-center">
                <h3>Student</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <form  action="/library/index.php" method="post">
                            <div class="form-group">
                                <button class="btn btn-sm btn-outline-secondary">VIEW</button>
                            </div>
    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://hmmpl.org/wp-content/uploads/2017/11/Library-Events.jpg" class="d-block w-100" alt="..." style="
                    height: 235px;
                ">
              <div class="card-body text-center">
                <h3>Library Info</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group text-center">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </body>
</html>