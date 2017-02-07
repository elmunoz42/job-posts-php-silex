<?php
class jobOpening {
    public $title;
    public $description;
    public $contact;

    function __construct($opening_title, $opening_description, $openining_contact){
        $this->title = $opening_title;
        $this->description = $opening_description;
        $this->contact = $openining_contact;
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
