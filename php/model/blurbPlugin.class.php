<?php
class blurbPlugin extends blurbBaseClass
{
    function menuAction()
    {
        $this->checkInstall();
        add_management_page('Blurbs', 'Blurbs', 2, 'blurbs.php', array ($this, 'managePage'));
    }

    function managePage()
    {
        $this->runAction();
    }

    function initActions()
    {
    	
		wp_enqueue_script('scriptaculous');
    }

}
?>
