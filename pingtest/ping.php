<!DOCTYPE html>
<html>
<header>
<title>PING HOST</title>
<meta http-equiv="refresh" content="5;url=http://localhost/pingtest/ping.php"> 
<link rel="stylesheet" type="text/css" href="css/style.css">
</header>
<body>
<?php

	$host1 = @ fsockopen('186.192.82.114', 80, $numeroDoErro, $stringDoErro, 0.5);
	$host2 = @ fsockopen('200.143.247.11', 80, $numeroDoErro, $stringDoErro, 0.5);

    print '
			<table>
			  <tr>
				<th>IP</th>
				<th>NOME</th>
				<th>STATUS</th>
			  </tr>
			  <tr>';

	print '<tr>
				<td>186.192.82.114</td>
				<td>Teste1</td>';
		if ($host1) {
        print '<td class="on">ON</td>';
    } else {
        print '<td class="off">OFF</td>';;
    }
	print '</tr>';
	
	print '<tr>
				<td>200.143.247.11</td>
				<td>Teste2</td>';
		if ($host2) {
        print '<td class="on">ON</td>';
    } else {
        print '<td class="off">OFF</td>';;
    }
	print '</tr>';
	


	print '</table>';
		
	
?>

</body>
</html>