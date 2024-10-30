<?php
function blurb_editBlurb($blurbID){
	
$theBlurb = new blurb($blurbID);
	
	?>


<div class="wrap">
    <div id="icon-tools" class="icon32">
        <br/>
    </div>
    <h2>Manage Blurbs</h2>


<form method="post" action="<?php blurbsFormTarget(); ?>">
<table class="form-table">

<tr valign="top">
<th scope="row"><label for="name">Name</label>
</th>
<td><input name="name" type="text" id="name" value="<?php echo $theBlurb->getName(); ?>" class="regular-text" />
</td>
</tr>

<tr valign="top">
<th scope="row"><label for="text">Text</label><br /><br /><span class="description">This is what will appear in your post. You can put HTML here.</span>	</th>
<td><textarea id="text" name="text" cols="33" rows="10"><?php echo $theBlurb->getText(); ?></textarea>
</td>
</tr>

</table>	
<p class="submit">
<input type="hidden" name="blurbID" value="<?php echo $blurbID; ?>" />
<input type="hidden" name="blurbAction" value="update" />
<input type="submit" value="Save Changes" />	
	
</p>	
	
</form>



</div>


<?php }
?>