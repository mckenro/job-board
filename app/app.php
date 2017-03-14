<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job.php";
    require_once __DIR__."/../src/ContactInfo.php";

    $app = new Silex\Application();

    // $app->get("/", function() {
    //     return "Home";
    // });

    $app->get("/", function() {
      return "
      <!DOCTYPE html>
      <html>
        <head>
          <link href='css/bootstrap.css' type='text/css' rel='stylesheet'>
          <link href='css/styles.css' type='text/css' rel='stylesheet'>
          <title>Job Board</title>
        </head>
        <body>
          <div class='container'>
            <div class='row'>
              <h1>Job Board</h1>
              <div class='col-md-6'>
                <form action='/Job'>
                  <div class='form-group'>
                    <label for='title'>Job Title</label>
                      <input id='title' name='title' class='form-control' type='text' required>
                  </div>
                  <div class='form-group'>
                    <label for='description'>Job Description</label>
                      <input id='description' name='description' class='form-control' type='text' required>
                  </div>
                  <button type='submit' class='btn btn-primary'>Submit Job</button>
                </form>
              </div>
              <div class='col-md-6'>
                <form action='ContactInfo'>
                  <div class='form-group'>
                    <label for='postername'>Poster's Name</label>
                      <input id='postername' name='postername' class='form-control' type='text' required>
                  </div>
                  <div class='form-group'>
                    <label for='email'>Poster's Email</label>
                      <input id='email' name='email' class='form-control' type='email' required>
                  </div>
                  <button type='submit' class='btn btn-primary'>Submit Your Contact Info</button>
                </div>
              </div>
          </div>
        </body>
      </html>";
    });

    $app->get("/view_job", function() {
        $my_job = new Job($_GET['title'], $_GET['description']);
        return $my_job;
    });

    return $app;
?>
