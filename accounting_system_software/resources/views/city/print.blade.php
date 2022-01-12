<body onload="window.print()">
<img src="{{URL('/')}}assests/images/email/kyc-success.png"/>
<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table">
<thead>
<tr>
<th>Sl</th>
<th>Division</th>
<th>District</th>
<th>City</th>

</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['division_name']?></td>
<td><?php echo $row['district']?></td>
<td><?php echo $row['city_name']?></td>

</tr>
<?php }?>
</tbody>
</table>
</body>