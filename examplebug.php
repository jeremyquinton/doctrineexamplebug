<?php

use example\MessageListener;
use example\Message;

require_once 'bootstrap.php';

$listener = new MessageListener();

$resolver = $entityManager->getConfiguration()->getEntityListenerResolver();
$resolver->register($listener);
$entityManager->getConfiguration()->setEntityListenerResolver($resolver);

$message = new Message();
$message->setText('testing');

$entityManager->persist($message);
$entityManager->flush();
$entityManager->refresh($message);

//update 1 listener called
$message->setText('update 1');
$entityManager->persist($message);
$entityManager->flush();

//resolver cleared of listener
$resolver = $entityManager->getConfiguration()->getEntityListenerResolver();
$resolver->clear();
$entityManager->getConfiguration()->setEntityListenerResolver($resolver);

//update 2 listener called - but its been cleared
$message->setText('update 2');
$entityManager->persist($message);
$entityManager->flush();
$entityManager->refresh($message);
