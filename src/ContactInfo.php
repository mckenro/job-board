<?php
class ContactInfo
{
    public $phone;
    public $email;
    public $address;

    function __construct($user_phone, $user_email, $user_address)
    {
      $this->phone = $user_phone;
      $this->email = $user_email;
      $this->address = $user_address;
    }

    function setContactPhone($new_phone)
    {
      $this->phone = $user_phone;
    }
    function getContactPhone()
    {
      return $this->phone;
    }
    function setContactEmail($new_email)
    {
      $this->email = $user_email;
    }
    function getContactEmail()
    {
      return $this->email;
    }
    function setContactAddress($new_address)
    {
      $this->address = $user_address;
    }
    function getContactAddress()
    {
      return $this->address;
    }
}

?>
