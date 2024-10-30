<?php
/**
 * Class that allows model classes to implement CRUD functions
 */
class blurbDB
{
   
    function add()
    {
        global $wpdb;
        $wpdb->insert($this->getDBPrefix().get_class($this), $this->toArray());
        return $wpdb->insert_id;
    }

    function create()
    {
        return $this->add();
    }

    function read()
    {
        global $wpdb;
        $query = $wpdb->prepare("SELECT * FROM ".$this->getDBPrefix().get_class($this)." WHERE ".get_class($this)."ID=%d", $this->getID());
        $results = $wpdb->get_results($query, ARRAY_A);
        
		
		foreach ($results[0] as $property=>$value)
        {
            $this->$property = $value;
        }
    }

    function update()
    {
        global $wpdb;
        $wpdb->update($this->getDBPrefix().get_class($this), $this->toArray(), array (get_class($this).'ID'=>$this->getID()));
    }

    function delete()
    {
        global $wpdb;
        $query = "delete from ".$this->getDBPrefix().get_class($this)." where ".get_class($this).'ID = '.$this->getID();
        $wpdb->query($wpdb->prepare($query));
    }

    function getDBPrefix()
    {
        global $wpdb;
        return $wpdb->prefix.'';
    }

    function toArray()
    {
        $array = array ();

        foreach ($this as $property=>$value)
        {
            if (!is_array($value) && $property != "ID")
            {
                $array[$property] = $value;
            }
        }

        return $array;
    }
}
?>
