<html>
   <head>
      <title>Checkbox response</title>
      <style type="text/css">
          p.like {background-color:yellow;}
          p.dislike {background-color:orange;}
      </style>
   </head>
   <body>
   <?php
// We'll start here...
	$likes_checks = $_REQUEST["theCheckbox"] ?? "off";
	echo("<p>You selected: $likes_checks.</p>\n");
	if ($likes_checks == "on")
	{
		echo("<p class=like>I agree. Checkboxes rock!</p>\n");
	}
	else
	{
		echo("<p class=dislike>What, are you nuts?</p>\n");
	}
  ?>
  </body>
</html>
