<!DOCTYPE html>
<html lang="en">
<head>
  <title>Amanda Mangiarelli - Web Developer</title>
  <meta charset="utf-8">
  <meta name="description" content="Amanda Mangiarelli is a junior web developer based in Rock Hill, SC">
  <meta name="keywords" content="web developer, web designer, web developers in charlotte, fullstack dev">
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="icon" href="img/favicon.ico"/>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand fadeInLeft" href="#"><img src="img/logo.svg" alt="Logo" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span style="color: white"><i class="fas fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse fadeInRight" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="other/AmandaMangiarelliResume2022.pdf">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <main role="main">
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Hi there!</h1>
        <p class="lead text-muted jumbotext">I'm Amanda Mangiarelli, a junior web developer based in Rock Hill, SC and a recent graduate of Winthrop University looking for full time work.</p>
      </div>
    </section>

    <div id="projects" class="album py-5 bg-light">
      <div class="container">
      <h1>Projects</h1>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 border-dark shadow-sm">
              <img class="card-img-top" src="img/sce.png" alt="Southern Charm Events Thumbnail">
              <div class="card-body">
                <h5>Southern Charm Events</h5>
                <p class="card-text">An event management website for Southern Charm Events Venue in Rock Hill. </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="http://18.212.12.177/" target="_blank" class="btn btn-sm btn-outline-dark">View Demo</a>
                    <a href="https://github.com/amandamangiarelli/SouthernCharmEvents" target="_blank" class="btn btn-sm btn-outline-dark">Source Code</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 border-dark shadow-sm">
              <img class="card-img-top" src="img/timer.png" alt="Task Timer Thumbnail">
              <div class="card-body">
                <h5>Task Timer</h5>
                <p class="card-text">A timer app to log and track your tasks. </p><br>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="http://tasktimer.mangiarelli.net/" target="_blank" class="btn btn-sm btn-outline-dark">View Demo</a>
                    <a href="https://github.com/amandamangiarelli/tasktimer" target="_blank" class="btn btn-sm btn-outline-dark">Source Code</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 border-dark shadow-sm">
              <img class="card-img-top" src="img/weather.png" alt="Weather App Thumbnail">
              <div class="card-body">
                <h5>Pixel Weather</h5>
                <p class="card-text">A weather app with a stylish pixel aesthetic made using React and OpenWeatherMap API. </p><br>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="https://pixelweather.netlify.app/" target="_blank" class="btn btn-sm btn-outline-dark">View Demo</a>
                    <a href="https://github.com/amandamangiarelli/pixelweather" target="_blank" class="btn btn-sm btn-outline-dark">Source Code</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="https://github.com/amandamangiarelli" target="_blank" class="btn btn-sm btn-dark btn-more">View More On GitHub</a>
    </div>
  </div>
        
  <div id="contact" class="album py-5 contact-me">
    <div class="container">
      <h1>Contact Me</h1>
      <p>For inquiries, please fill out the form or email me at <a href="mailto:mangiarelliamanda@gmail.com">mangiarelliamanda@gmail.com</a>!</p>
      <form method="POST" action="form.php" id="contact-form">
      <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
        <div class="row">
          <div class="form-group col-sm-6">
            <label for="emailAddress">Email: </label>
            <input type="email" class="form-control" id="emailAddress" 
            name="emailAddress" placeholder="Email..." required>
          </div>
          <div class="form-group col-sm-6">
            <label for="subjectLine">Subject: </label>
            <input type="text" class="form-control" id="subjectLine" name="subjectLine" placeholder="Subject..." required>
          </div>
        </div>
        <div class="form-group">
          <label for="message">Message: </label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message..." required></textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-sm btn-dark contact-btn" value="Send"/>
      </form>
    </div>
  </div>


  </main>

  <footer class="text-muted">
    <div class="container centered">
      <a href="https://www.linkedin.com/in/amandamangiarelli" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
      <a href="https://www.github.com/amandamangiarelli" target="_blank"><i class="fab fa-github-square fa-2x"></i></a>
      <a href="mailto:mangiarelliamanda@gmail.com"><i class="fas fa-envelope-square fa-2x"></i></a>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>