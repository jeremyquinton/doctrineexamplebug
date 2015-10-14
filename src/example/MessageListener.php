<?php

namespace example;

class MessageListener
{
    /** @PreUpdate */
    public function preUpdatee($something)
    {
        echo "listener gets called" . PHP_EOL;
        echo $something->getText() . PHP_EOL;
    }

}