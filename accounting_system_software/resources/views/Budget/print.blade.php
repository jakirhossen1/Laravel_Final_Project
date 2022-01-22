<body onload="window.print()">
<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table" width="100%" style="text-align: center;" >
<thead>
<tr>
<th>Sl</th>
<th>Group</th>
<th>Sub Group </th>
<th>Head Name</th>
<th>Budget Type</th>
<th>Month</th>
<th>Amount</th>
<th>User Name</th>
<th>A/C Date</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['group_id']?></td>
<td><?php echo $row['sub_group_id']?></td>
<td><?php echo $row['posting_head_id']?></td>
<td><?php echo $row['budget_type']?></td>
<td><?php echo $row['month']?></td>
<td><?php echo $row['amount']?></td>
<td><?php echo $row['user_id']?></td>
<td><?php echo $row['creation_date']?></td>

</tr>
<?php }?>
</tbody>
</table>
</body>