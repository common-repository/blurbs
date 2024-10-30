<?php
class blurb_installer
{
    function checkInstall()
    {
        if (!get_option('blurbsVersion'))
        {
            $this->runInstall();
        }
        else
        {
            $this->runUpdate();
        }
    }

    function runUpdate()
    {
        //Update Loop
        $numberOfUpdateLoops = 0;
        while (get_option('blurbsVersion') < BLURBS_VERSION && $numberOfUpdateLoops < 100)
        {
			//echo 'updated';
            $numberOfUpdateLoops++;
			
			if(BLURBS_VERSION ==  0.17){
				update_option('blurbsVersion', 0.17);
			}
        }
        
		if ( isset ($message))
        {
            adminAlert($message);
        }
    }

    function runInstall()
    {
        add_option("blurbsVersion", 0.15);
        global $wpdb;
        $query = "CREATE TABLE `".$wpdb->prefix."blurb` (
  			`blurbID` INT NOT NULL AUTO_INCREMENT,
  			`name` TEXT,
			`text` LONGTEXT,
  			PRIMARY KEY (`blurbID`)
			)
			CHARACTER SET utf8;";

        $wpdb->query($query);
		adminAlert("Blurbs was successfully installed");
    }



}

?>
