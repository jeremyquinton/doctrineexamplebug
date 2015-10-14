<?php

namespace example;

class MessageListener
{
    public function preUpdate($something)
    {
        echo "listener gets called" . PHP_EOL;
        echo $something->getText() . PHP_EOL;
    }

}