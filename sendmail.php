<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// Créer une nouvelle instance de PHPMailer
$mail = new PHPMailer();

// Utiliser SMTP
$mail->isSMTP();

// Informations SMTP
$mail->Host = 'mail.domaine.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'adresse@mail.com';
$mail->Password = 'mot_de_passe';

// Adresse expéditeur
$mail->setFrom('adresse@mail.com', 'Prénom Nom');

// Adresse destinataire
$mail->addAddress('destinataire@mail.com', 'Prénom Nom');

// Objet du mail
$mail->Subject = 'Objet du mail';

// Message
$mail->msgHTML('Bonjour, Ceci est le contenu du mail.');

// Envoi du message
if (!$mail->send()) {
    echo 'Erreur : ' . $mail->ErrorInfo;
} else {
    echo 'Le mail a été envoyé !';
}
