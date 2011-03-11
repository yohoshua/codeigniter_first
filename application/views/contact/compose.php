

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>new</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Joshua Yang">
	<!-- Date: 2011-03-08 -->
</head>
<body>

<div>

<div style="background:red" id="notice"><ul><?php echo validation_errors(); ?></ul></div>

<?php echo form_open('contact/create') ?>

<div><label for="name">Your name:</label><input id="name" type="text" name="name" size="20" value="<?php echo set_value('name'); ?>" /></div>
<div><label for="email">Your email address:</label><input id="email" type="text" name="email" size="20" value="<?php echo set_value('email'); ?>" /></div>
<div><label for="content">Your comments:</label><textarea id="content" name="content" cols="6" rows="8"><?php echo set_value('content'); ?></textarea></div>
<div><input type="submit" value="Submit"></div>

</form>
</div>

</body>
</html>
