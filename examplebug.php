<?php

use example\MessageListener;
use example\Message;

require_once 'bootstrap.php';

$resolver = $entityManager->getConfiguration()->getEntityListenerResolver();
$resolver->register(new MessageListener());

$message = new Message();
$message->setText('testing');

$entityManager->persist($message);
$entityManager->flush();
$entityManager->refresh($message);

//update 1 listener called
$message->setText('update 1');
$entityManager->persist($message);
$entityManager->flush();

$resolver = $entityManager->getConfiguration()->getEntityListenerResolver();
$resolver->clear();
$resolver = $entityManager->getConfiguration()->setEntityListenerResolver($resolver);

//update 2 listener called - but its been cleared
$message->setText('update 2');
$entityManager->persist($message);
$entityManager->flush();
$entityManager->refresh($message);






