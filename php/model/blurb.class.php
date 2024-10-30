<?php

class blurb extends blurbDB
{
    var $ID;
    var $text;
    var $name;

    function __construct($id = null, $autoload = true)
    {
        if (! empty($id))
        {
            $this->setID($id);
            if ($autoload)
            {
                $this->read();
            }
        }


    }

    function blurb($id = null)
    {
        $this->__construct($id);
    }


    /**
     * Returns $ID.
     * @see blurb::$ID
     */
    function getID()
    {
        return $this->ID;
    }

    /**
     * Sets $ID.
     * @param object $ID
     * @see blurb::$ID
     */
    function setID($ID)
    {
        $this->ID = $ID;
    }


    /**
     * Returns $text.
     * @see blurb::$text
     */
    function getText()
    {
        return html_entity_decode($this->text);
    }

    /**
     * Sets $text.
     * @param object $text
     * @see blurb::$text
     */
    function setText($text)
    {
        $this->text = attribute_escape($text);
    }

    /**
     * Returns $name.
     * @see blurb::$name
     */
    function getName()
    {
        return $this->name;
    }

    /**
     * Sets $name.
     * @param object $name
     * @see blurb::$name
     */
    function setName($name)
    {
        $this->name = $name;
    }

}

?>
