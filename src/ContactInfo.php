<?php
class ContactInfo
{
    public $postername;
    public $email;

    function __construct($user_name, $user_email)
    {
      $this->postername = $user_name;
      $this->email = $user_email;
    }

    function setContactName($new_user_name)
    {
      $this->postername = $user_name;
    }
    function getContactName()
    {
      return $this->postername;
    }
    function setContactEmail($new_email)
    {
      $this->email = $user_email;
    }
    function getContactEmail()
    {
      return $this->email;
    }
}

?>
