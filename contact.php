<?php

if (!$_POST)
{
echo '<div align="center"><img src="images/contact.jpg" width="449" height="64" alt="Contact" /><br /><br />
<form name="form1" method="post" action="">
  <table border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td>From: </td>
      <td>
        <input name="from" type="text" id="from" size="30" /></td>
    </tr>
    <tr>
      <td>To: </td>
      <td>
        <select name="to" id="to">
          <option value="dlang@longwoodcsd.com" selected="selected">D. Lang / Team Advisor</option>
          <option value="KoopaKoder@koopakoder.com">Kevin J Breslin / Web Design</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Message: </td>
      <td>
        <textarea name="message" cols="30" rows="5" id="message"></textarea>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="submit" id="submit" value="Submit" />
      </td>
    </tr>
  </table>
</form>
</div>';
}

else
{
	if (mail($_POST['to'], "New message from " . $_POST['from'] . " on Longwood Robotics.", $_POST['message']))
	{
		echo '<div align="center">Your message was delivered!</div>';
	}
	else
	{
		echo '<div align="center">Your message was not delivered correctly... Try again later!</div>';
	}
}

?>
