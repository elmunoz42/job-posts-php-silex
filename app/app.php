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
                   <input id='description' name='description' class='form-control' type='text'>
               </div>
               <div class='form-group'>
                   <label for='contact_name'>Enter contact name:</label>
                   <input id='contact_name' name='contact_name' class='form-control' type='text'>
               </div>
               <div class='form-group'>
                   <label for='contact_phone_number'>Enter contact phone number:</label>
                   <input id='contact_phone_number' name='contact_phone_number' class='form-control' type='number'>
               </div>
               <div class='form-group'>
                   <label for='contact_email'>Enter contact email:</label>
                   <input id='contact_email' name='contact_email' class='form-control' type='email'>
               </div>
               <button type='submit' class='btn-success'>Submit</button>
           </form>
        </div>
    </body>
   </html>";
    });
    $app->get("/job-posts", function() {

    $contact_input = new Contact($_GET["contact_name"],$_GET["contact_phone_number"], $_GET["contact_email"]);
    $job_input = new Job_opening($_GET["title"], $_GET["description"], $contact_input);

    return "<h1>Job opening</h1>
            <li> $job_input->title </li>
            <li> $job_input->description </li>
            <li> $contact_input->name </li>
            <li> $contact_input->phone_number </li>
            <li> $contact_input->email </li>";

    });

    return $app;
?>
