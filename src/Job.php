<?php
  require_once __DIR__."/ContactInfo.php";
    class Job
    {
        public $title;
        public $description;
        // include contact info here;

        function __construct($job_title, $job_description)
        {
          $this->title = $job_title;
          $this->description = $job_description;
        }

        function setJobTitle($new_title)
        {
          $this->title = $job_title;
        }
        function getJobTitle()
        {
          return $this->title;
        }

        function setJobDescription($new_description)
        {
          $this->description = $job_description;
        }
        function getJobDescription()
        {
          return $this->description;
        }
    }
?>
