<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table" width="100%" style="text-align: center;" >
<thead>
<tr>
<th>Sl</th>
<th>Group Name</th>
<th>Ledger Name</th>
</tr>
</thead>
<tbody>
<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['group_id']?></td>
<td><?php echo $row['ledger_name']?></td>
</tr>
<?php }?>
</tbody>
</table>