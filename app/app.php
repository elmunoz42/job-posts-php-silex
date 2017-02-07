<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return
    "<!DOCTYPE html>
   <html>
   <body>
       <div class='container'>
           <h1>Job Posting</h1>
           <form action='/job-posts'>
               <div class='form-group'>
                   <label for='title'>Enter job title:</label>
                   <input id='title' name='title' class='form-control' type='text'>
               </div>
               <div class='form-group'>
                   <label for='description'>Enter description:</label>
                   <input id='description' name='description' class='form-control' type='description'>
               </div>
               <button type='submit' class='btn-success'>Submit</button>
           </form>
        </div>
    </body>
   </html>";
    });
    $app->get("/job-posts", function() {
    return "hello";
    });

    return $app;
?>
