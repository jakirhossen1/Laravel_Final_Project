<table border="1" cellspacing="0" cellpadding="0" class="datatable-init nowrap table" width="100%" style="text-align: center;" >
    <thead>
        
    	<tr>
            <th colspan="3"><h3 style="background: #f6f1f1;padding: 5px;text-align: center;">Trial Balance Of Accounting Software on <?php echo date("d-M-Y");?></h3></th>
        </tr>

        <tr>
            <th>Particulars</th>
            <th>Amount(Debit)</th>
            <th>Amount(Credit)</th>
        </tr>
       
    </thead>
    <tbody>

        <?php 

        	$crTotal = 0;
        	$drTotal = 0;

        ?>
        @foreach($trialData as $trial)
        <tr>
            <th>{{$trial->postling_head_id}}</th>

            <th>
            <?php
            	$drTotal += $trial->debit_amount;
            	echo $trial->debit_amount;
        	?>
            </th>

         <th>
         	<?php
            	$crTotal += $trial->credit_amount;
            	echo $trial->credit_amount;
        	?>
        </th>

        </tr>
        @endforeach

        <tr>
            <th>Total</th>

            <th>{{$drTotal}}</th>

            <th>{{$crTotal}}</th>
            
        </tr>
    </tbody>
</table>
						       