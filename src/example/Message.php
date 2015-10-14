<?php

namespace example;

/**
 * @Entity @Table(name="messages")
 * @EntityListeners({"MessageListener"})
 **/
class Message
{
    /**
     * @Column(type = "integer", options = {"unsigned": true})
     * @GeneratedValue(strategy = "SEQUENCE")
     * @Id
     */
    protected $id;

    /**
     * @Column(type = "string")
     */
    protected $text;

    public function getId()
    {
        return $this->id;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
}
