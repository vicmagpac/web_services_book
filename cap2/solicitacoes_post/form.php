<?php
	if (empty($_POST)) {
?>
		<form name="user" method="post">
			Email:
			<input type="text" length="60" name="email" />
			Display name:
			<input type="text" length="60" name="display_email" />
			<input type="submit" value="Go" />
		</form>
<?php
	} else {
		echo "New user email: " . filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	}
?>
