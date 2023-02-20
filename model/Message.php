<?php

class Message
{
    private string $name;
    private string $email;
    private string $message;
    private DateTime $date;
    private string $dateString;
    private string $timeString;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;

        $this->date = new DateTime();
        $this->dateString = $this->date->format('Y-m-d');
        $this->timeString = $this->date->format('H:i:s');
    }
}
