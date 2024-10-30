<?php
class blurbDA
{
    function getAllBlurbs()
    {
        global $wpdb;
        $query = "select * from ".$wpdb->prefix."blurb";
        $results = $wpdb->get_results($query, ARRAY_A);
        $returnedArrayOfResults = array ();

        if (! empty($results))
        {
            $i = 0;

            foreach ($results as $result)
            {
                $tempBlurb = new blurb();
                $tempBlurb->setID($result['blurbID']);
                $tempBlurb->setText($result['text']);
                $tempBlurb->setName($result['name']);
                $returnedArrayOfResults[$i] = $tempBlurb;

                $i++;
            }
        }

        return $returnedArrayOfResults;
    }

    function blurbExists($blurbID)
    {
        global $wpdb;
        $query = "select * from ".$wpdb->prefix."blurb WHERE blurbID=".$blurbID;
        $results = $wpdb->get_results($query, ARRAY_A);
        if (count($results) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function blurbExistsByName($blurbName)
    {
        global $wpdb;
        $query = "select * from ".$wpdb->prefix."blurb WHERE blurbID like '".$blurbID."'";
        $results = $wpdb->get_results($query, ARRAY_A);

        if (count($results) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    function getBlurbByName($blurbName)
    {
        global $wpdb;
        $query = "select * from ".$wpdb->prefix."blurb WHERE blurbID like '".$blurbID."'";
        $results = $wpdb->get_results($query, ARRAY_A);

        $blurb = new blurb($results[0]['ID']);
        $blurb->setText($results[0]['text']);
        $blurb->setName($results[0]['name']);
       
	    return $blurb;
    }

}

?>
