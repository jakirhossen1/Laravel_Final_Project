<!-- content @s -->
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="components-preview wide-md mx-auto">
					<div class="nk-block nk-block-lg">
						<div class="card card-preview">  
							<div class="card-inner">
   
							    <a href="tb_pdf" class="btn btn-danger">PDF</a>
							    <a href="tb_print" class="btn btn-success">Print</a>
							    <p></p>

								<table cellpadding="0" cellspacing="0" border="2" style="text-align:center;">
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

					        	
							</div>
						</div><!-- .card-preview -->
					</div> <!-- nk-block -->
				</div><!-- .components-preview -->
			</div>
		</div>
	</div>
</div>













