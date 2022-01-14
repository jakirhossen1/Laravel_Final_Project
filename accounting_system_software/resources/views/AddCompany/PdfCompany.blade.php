
<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table" width="100%" style="text-align: center;">
<thead>
<tr>
<th>Sl</th>
<th>Company Type</th>
<th>Business Type</th>
<th>Company Name</th>
<th>Address</th>
<th>C/R No</th>
<th>Trade License</th>
<th>Company Logo</th>
</tr>
</thead>
<tbody>

<?php 
$x=1;
foreach($qr as $row){?>
<tr>
<td><?php echo $x++;?></td>
<td><?php echo $row['company_type']?></td>
<td><?php echo $row['business_type']?></td>
<td><?php echo $row['company_name']?></td>
<td><?php echo $row['address']?></td>
<td><?php echo $row['company_registration_no']?></td>
<td><?php echo $row['trade_license']?></td>
<td><img style="height: 40px; width: 40px;" src="<?php echo URL('/').'/'.$row['picture']?>" class="img-thumbnail" /></td>
</tr>
<?php }?>
</tbody>
</table>