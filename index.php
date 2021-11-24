<html>
<head>
<title>Calendar</title> 

<link rel="stylesheet" type="text/css" href="calendar.css" />

</head>
<body>

<div class="container">
<h1>Bruin Family Schedule for  <?php 
print date("H:i d-m-Y");
?></h1>
<table id="event_table">


	<tr> 
		<th class='hr_td'> &nbsp; </th> <th class='table_header'>Joe</th><th class='table_header'>Joanna</th><th class='table_header'>Lil Cub</th> 
	</tr> 
<tr class='even_row'> 
<td class='hr_td'><?php 
print date("h:i A",strtotime("+1hours"));?></td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'><?php 
print date("h:i A",strtotime("+2hours"));?></td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'><?php 
print date("h:i A",strtotime("+3hours"));?></td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'><?php 
print date("h:i A",strtotime("+4hours"));?></td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'><?php 
print date("h:i A",strtotime("+5hours"));?></td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'><?php 
print date("h:i A",strtotime("+6hours"));?></td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'><?php 
print date("h:i A",strtotime("+7hours"));?></td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'><?php 
print date("h:i A",strtotime("+8hours"));?></td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'><?php 
print date("h:i A",strtotime("+9hours"));?></td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'><?php 
print date("h:i A",strtotime("+10hours"));?></td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'><?php 
print date("h:i A",strtotime("+11hours"));?></td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'><?php 
print date("h:i A",strtotime("+12hours"));?></td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 

</tr>	
	
</table>

</div>
</body>
</html>

