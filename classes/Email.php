<?php
class Email{
    public string $toEmail;
    public string $fromEmail;
    public string $sujetEmail;
    public string $messageEmail;



    public function __construct($toEmail,$fromEmail,$sujetEmail,$messageEmail)
    {
     $this->toEmail=$toEmail;
     $this->fromEmail=$fromEmail;
     $this->sujetEmail= $sujetEmail;
     $this->messageEmail=$messageEmail;
     

     $header = 'From'.$fromEmail .''. "\r\n" . 'Reply-to' .$fromEmail ."\r\n" . 'x-mailer:PHP/' .phpversion();
     mail($toEmail,$sujetEmail,$messageEmail,$header);
     imap_mail($toEmail,$fromEmail,$messageEmail,$header);
        

    }
}