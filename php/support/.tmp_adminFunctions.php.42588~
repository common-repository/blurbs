<?php
function blurbsFormTarget()
{
    echo $GLOBALS['PHP_SELF'].'?page=blurbs.php';
}

function getBlurb($blurbID)
{
    //Check if our blurb exists before we go get it
    $blurbDA = new blurbDA();
    if ($blurbDA->blurbExists($blurbID))
    {
        $tempBlurb = new blurb($blurbID);
        return stripslashes(html_entity_decode($tempBlurb->text));
    }

}

function blurb($blurbID)
{
    echo getBlurb($blurbID);
}

function getWholeBlurb($blurbID)
{
    //Check if our blurb exists before we go get it
    $blurbDA = new blurbDA();
    if ($blurbDA->blurbExists($blurbID))
    {
        $tempBlurb = new blurb($blurbID);
        return $tempBlurb;
    }
}

function getWholeBlurbByName($blurbName)
{
    //Check if our blurb exists before we go get it
    $blurbDA = new blurbDA();
    if ($blurbDA->blurbExistsByName($blurbID))
    {
        $tempBlurb = $blurbDA->getBlurbByName($blurbName);
        return $tempBlurb;
    }
}

function blurb_extractShortCodes($attributes)
{
    extract(shortcode_atts( array ('id'=>null, 'show'=>'text'), $attributes));

    if ( isset ($attributes['id']))
    {
        //If someone knows what they want to show
        if ( isset ($attributes['show']))
        {
            //If they say they want to show the name instead...
            if (strcmp($attributes['show'], 'name') == 0)
            {
                $blurb = getWholeBlurb($attributes['id']);
                echo $blurb->getName();
            }
        }
        else
        {
            echo blurb($attributes['id']);
        }
    }
    else
    {
        echo 'You need to provide an ID to show a blurb';
    }

}

?>
