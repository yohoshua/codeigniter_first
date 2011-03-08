<?php $this->load->helper('form') ?>

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

<?php echo form_open('contact/create') ?>

<div><label for="name">Your name:</label><input id="name" type="text" name="name" size="20" /></div>
<div><label for="email">Your email address:</label><input id="email" type="text" name="email" size="20" /></div>
<div><label for="content">Your comments:</label><textarea id="content" name="content" cols="6" rows="8"></textarea></div>
<div><input type="submit" value="Submit"></div>

</form>
</div>

</body>
</html>
