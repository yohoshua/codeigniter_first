<?php echo form_open('contact/ajaxcreate') ?>

<div><label for="name">Your name:</label><input id="name" type="text" name="name" size="20" value="<?php echo set_value('name'); ?>" /></div>
<div><label for="to">To:</label>
	<select id="to" name="to">
		<option value="1">Josh Yang</option>
		<option value="2">Chris Walker</option>
	</select>
<div><label for="email">Your email address:</label><input id="email" type="text" name="email" size="20" value="<?php echo set_value('email'); ?>" /></div>
<div><label for="content">Your comments:</label><textarea id="content" name="content" cols="6" rows="8"><?php echo set_value('content'); ?></textarea></div>
<div><input type="submit" value="Submit"></div>

</form>