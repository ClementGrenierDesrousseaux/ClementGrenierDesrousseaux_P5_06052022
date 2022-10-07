<?php

namespace App\Entity;

class ContactMessage extends DatabaseConnector
{
    private DatabaseConnector $Database;

    function __construct()
    {
        $this->Database = new DatabaseConnector();
    }

    function postContactMessage($contactEmail, $contactName, $contactContent) {

        $sql = "INSERT INTO contactForm (emailUserContactForm, nameUserContactForm, contentUserContactForm) VALUES (?,?,?)";
        $stmt = $this->Database->prepare($sql);
        $stmt->execute([$contactEmail, $contactName, $contactContent]);
    }

    function getContactMessage(): bool|array
    {

        $sql = "SELECT * FROM contactForm ORDER BY dateUserContactForm DESC";
        $stmt = $this->Database->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
