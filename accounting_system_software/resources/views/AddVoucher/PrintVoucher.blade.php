<body onload="window.print()">

<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table" width="100%" style="text-align: center;" >
<thead>
<tr>
<th>Sl</th>
<th>Voucher No</th>
<th>Date</th>
<th>Head Name</th>
<th>Company Name</th>
<th>Check No</th>
<th>Status</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['voucher_no']?></td>
<td><?php echo $row['voucher_date']?></td>
<td><?php echo $row['postling_head_id']?></td>
<td><?php echo $row['company_id']?></td>
<td><?php echo $row['check_no']?></td>
<td><?php echo $row['voucher_status']?></td>
</tr>
<?php }?>
</tbody>
</table>
</body>