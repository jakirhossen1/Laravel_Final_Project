<body onload="window.print()">
<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table" width="100%" style="text-align: center;" >
<thead>
<tr>
<th>Sl</th>
<th>Business Type</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['business_type']?></td>
</tr>
<?php }?>
</tbody>
</table>
</body>