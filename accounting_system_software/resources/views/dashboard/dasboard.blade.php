<!-- content @s -->
<div class="nk-content ">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="components-preview wide-md mx-auto">
					<div class="nk-block nk-block-lg">
						<div class="card card-preview">  
							<div class="card-inner">
								<div class="main">
									<div>
										<i class="fas fa-user"></i>
										<h3>Total Users: {{$user}}</h3>
									</div>
									<div>
										<i class="fab fa-bitcoin"></i>
										<h3>Debit Amount: {{$debit}}</h3>
									</div>
									<div>
										<i class="fab fa-btc"></i>
										<h3>Credit Amount: {{$credit}}</h3>
									</div>
									<div>
										<i class="fas fa-file-alt"></i>
										<h3>Total voucher: {{$voucher}}</h3>
									</div>
								</div>
							    
							</div>
						</div><!-- .card-preview -->
					</div> <!-- nk-block -->
				</div><!-- .components-preview -->
			</div>
		</div>
	</div>
</div>

<style type="text/css">
    .main{
        display: flex;
    }
    .main div {
        margin: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 10px;
        min-height: 120px;
        background: #f8f4f4;
        min-width: 210px;
        text-align: center;
        box-shadow: inset -1px -2px 0px 0px;
        border: 1px solid #a79797;
    }

    .main div i {
        font-size: 36px;
        color: #196cad;
    }

    .main div h3{
        font-size: 18px;
        text-align: center;
        margin-top: 20px;
    }

    .main div h4{
        font-size: 15px;
        text-align: center;
    }
</style>




