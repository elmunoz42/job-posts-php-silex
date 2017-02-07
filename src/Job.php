<?php
class Job_opening {
    public $title;
    public $description;
    public $contact;

    function __construct($opening_title, $opening_description, $opening_contact){
        $this->title = $opening_title;
        $this->description = $opening_description;
        $this->contact = $opening_contact;
    }
}
class Contact{
    public $name;
    public $phone_number;
    public $email;

    function __construct ($contact_name, $contact_phone_number, $contact_email){
        $this->name = $contact_name;
        $this->phone_number = $contact_phone_number;
        $this->email = $contact_email;
    }

}
?>
