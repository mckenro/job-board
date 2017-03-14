
$job_create = new Job($_GET["title"], $_GET["description"]);

$jobs = array($job_create);

 <!DOCTYPE html>
 <html>
 <head>
   <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
   <link href="css/styles.css" type="text/css" rel="stylesheet">
   <title>Job Postings</title>
 </head>
   <body>
     <div classs="container">
       <h1>Current Openings:</h1>
         <?php
         foreach ($jobs as $listing) {
           $job_title = $listing->jobTitle();
           $job_description = $listing->getJobDesctiption();
           echo "<p>Title:</p> ".($user_parcel->volume())." cubic inches</p>
             <ul>
               <li>length: $parcel_length </li>
               <li>width: $parcel_width </li>
               <li>height: $parcel_height </li>
               <li>weight: $parcel_weight </li>
             </ul>";
         }
           echo "<h3>The price to ship this parcel will be: $".($user_parcel->userPrice())."</h3>";
         ?>
     </div>
   </body>
 </html>
