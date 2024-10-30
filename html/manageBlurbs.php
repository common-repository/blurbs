<?php
function blurb_manageBlurbs()
{
?>
<div class="wrap">
    <div id="icon-tools" class="icon32">
        <br/>
    </div>
    <h2>Manage Blurbs</h2>
	
<div class="tablenav">
<form method="post" action="<?php blurbsFormTarget(); ?>" style="display: inline;">	
<p class="search-box">
	<input type="hidden" name="blurbAction" value="add" />
	<input type="submit" value="Add Blurb" class="button-secondary"/>
</p>
</form>	
</div>
	
    <table class="widefat">
        <thead>
            <th style="width: 25px">
                ID
            </th>
            <th>
                Name
            </th>
            <th style="width: 50px">
                Edit
            </th>
            <th style="width: 50px">
                Delete
            </th>
        </thead>
        <tbody>
            <?php
            $blurbDA = new blurbDA();
            $blurbs = $blurbDA->getAllBlurbs();
            if (! empty($blurbs))
            {
            
                foreach ($blurbs as $blurb)
                {
            ?>
            <tr>
                <td>
                    <?php
                    echo $blurb->getID();
                    ?>
                </td>
                <td>
                    <?php
                    echo $blurb->getName();
                    ?>
                </td>
                <td><a href="#" onclick="$(editBlurb<?php echo $blurb->getID(); ?>).submit();">Edit</a>
                	
					<form id="editBlurb<?php echo $blurb->getID(); ?>" method="post" action="<?php blurbsFormTarget(); ?>">
						<input type="hidden" name="blurbID" value="<?php echo $blurb->getID(); ?>" />
						<input type="hidden" name="blurbAction" value="edit" />
					</form>
                </td>
                <td>
                	<a href="#" onclick="if(confirm('You are about to delete this blurb. You can\'t undo this action. Do you wish to continue?')){$('deleteBlurb<?php echo $blurb->getID(); ?>').submit();}">Delete</a>
					<form method="post" id="deleteBlurb<?php echo $blurb->getID(); ?>" action="<?php blurbsFormTarget(); ?>">
					<input type="hidden" name="blurbID" value="<?php echo $blurb->getID(); ?>" />
					<input type="hidden" name="blurbAction" value="delete" />
					</form>
                </td>
            </tr>
            <?php
            }
            }
            else
            {
            ?>
            <tr>
                <td colspan="4" align="center">
                    No blurbs found
                </td>
            </tr>
            <?php
            
            }
            ?>
        </tbody>
    </table>
</div>
<?php
}
?>
