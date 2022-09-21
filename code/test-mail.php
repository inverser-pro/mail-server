<?php
ini_set('display_errors',1);

// USE IT:
// https://github.com/swiftmailer/swiftmailer

$folders=explode(DIRECTORY_SEPARATOR,getenv('DOCUMENT_ROOT'));
array_pop($folders); // remove last elem
define( 'TOPLEVEL', implode(DIRECTORY_SEPARATOR,$folders).DIRECTORY_SEPARATOR);

require_once getenv('DOCUMENT_ROOT').'/sys/vendor/autoload.php';
//send email
$transport = (new Swift_SmtpTransport('send.domain.io', '465', 'ssl'))
    ->setUsername('postmaster@domain.io')
    ->setPassword('PASSWORD')
    //->setStreamOptions(array('tls' => array('allow_self_signed' => true, 'verify_peer' => false, 'verify_peer_name' => false)))
;
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
$message = (new Swift_Message('subject'))
    ->setFrom(['postmaster@domain.io' => 'no-reply'])
    ->setTo(['123@gmail.com'])
    ->addPart('12333', 'text/plain')
;
$headers = $message->getHeaders();

try {
  $mailer->send($message);
} 
catch (Swift_TransportException $e) {
  echo $e->getMessage();
}
