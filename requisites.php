<html>
	<head>
	<title>WEB-site of the Alekseev Nikta's and Savvin Anton's website rieltors</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	 <body>
		<?php
		$link = mysqli_connect('0.0.0.0', 'anton', '','DB')
	    		or die('Error: ' . mysqli_connect_error());
		printf('<P>Apartments</P> %s',"\n");
		$SQLquery = 'select requisites.id, BIC, bank_account, id_bank_account, human.name from requisites inner join human requisites.human = human.id';
		$SQLresult = mysqli_query($link,$SQLquery);
		printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
		printf('<TR> %s',"\n");
		printf('	<TH>BIC</TH> %s',"\n");
		printf('	<TH>bank_account</TH> %s',"\n");
		printf('	<TH>id_bank_account, </TH> %s',"\n");
		printf('	<TH>Floor</TH> %s',"\n");
		printf('	<TH>Owner human </TH> %s',"\n");
		printf('</TR> %s',"\n");
		while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
		{
			printf('<TR>');
			printf('<TD> %s </TD> <TD> %s </TD>'<TD> %s </TD> <TD> %s </TD><TD> %s </TD>,$result[1],$result[2],$result[3],$result[4],$result[5]);
			printf('</TR> %s',"\n");
		}
		printf('</table> %s',"\n");
		mysqli_free_result($SQLresult);
		mysqli_close($link);
	?>
		<a href="index.html"> <P>GO BACK</P> </a>
	</body>
</html>