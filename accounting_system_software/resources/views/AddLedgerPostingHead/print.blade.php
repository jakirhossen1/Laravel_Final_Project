<body onload="window.print()">
<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table" width="100%" style="text-align: center;" >
<thead>
<tr>
<th>Sl</th>
<th>Group Name</th>
<th>Sub Group Name</th>
<th>Head Name</th>
<th>Posting Date</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['ledger_group_id']?></td>
<td><?php echo $row['ledger_sub_group_id']?></td>
<td><?php echo $row['posting_head_name']?></td>
<td><?php echo $row['posting_head_date']?></td>

</tr>
<?php }?>
</tbody>
</table>
</body>