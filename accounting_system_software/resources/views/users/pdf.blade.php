
<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table" width="100%" style="text-align: center;" >
<thead>
<tr>
<th>Sl</th>

<th>User Name</th>
<th>Full Name</th>
<th>Email</th>
<th>Phone</th>
<th>Picture</th>
<th>A/C Date</th>
<th>Status</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>

<td><?php echo $row['user_name']?></td>
<td><?php echo $row['full_name']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['phone']?></td>
<td><img style="height: 80px; width: 80px;" src="<?php echo URL('/').'/'.$row['picture']?>" class="img-thumbnail" /></td>
<td><?php echo $row['account_creation_date']?></td>
<td><?php echo $row['status']?></td>
</tr>
<?php }?>
</tbody>
</table>