<?php
class blurbBaseClass extends blurb_installer
{
    function runAction()
    {
        if ( isset ($_POST['blurbAction']))
        {
            $action = $_POST['blurbAction'];
        }
        else
        {
            $action = null;
        }


        switch($action)
        {
            case 'add':
                $blurb = new blurb(null);
                $blurb->setName('New Blurb');
                $blurb->setText('');
                $blurb->add();
                blurb_manageBlurbs();
                break;

            case 'delete':
                if ( isset ($_POST['blurbID']))
                {
                    $blurb = new blurb($_POST['blurbID']);
                    $blurb->delete();
                }
                blurb_manageBlurbs();
            break;

            case 'edit':
                if ( isset ($_POST['blurbID']))
                {
                    blurb_editBlurb($_POST['blurbID']);
                }
                else
                {
                    blurb_manageBlurbs();
                }
            break;

            case 'update':
                if ( isset ($_POST['blurbID']))
                {
                    $theBlurb = new blurb($_POST['blurbID'], false);
                    if(!empty($_POST['text'])){
                    	$theBlurb->setText($_POST['text']);
                    }
					else{
						$message = "The text you have entered is invalid!";
					}
					
					if(!empty($_POST['name'])){
						$theBlurb->setName($_POST['name']);
					}
					else{
						$message = "The name you have entered in invalid!";
					}
                    
                }

                if (!isset($message))
                {
                    $theBlurb->update();
                    blurb_manageBlurbs();
                }
                else
                {
                    adminAlert($message);
                }
            break;

            default:
                blurb_manageBlurbs();
                break;
    }
}

}

?>
