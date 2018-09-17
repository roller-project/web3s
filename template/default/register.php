<div class="container">
	<br><br>
	<h2 class="text-center">Unlock Account</h2>
	<br>
	<div class="row">
		<div class="col">

			<div class="card card-body" style="border:0px; padding-top: 0;">
			<h5 style="margin-bottom: 30px;"><i class="ti-unlock"></i> Account Info</h5>
			
			<?php echo form_open("register.html");?>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control"  placeholder="Password">
			  </div>

			  	

				<div class="text-left">
					<button type="submit" class="btn btn-primary col-lg-5">Register</button>
					<a href="<?php echo store_url("login.html");?>" class="btn btn-outline-info">Login</a>
				</div>
			</div>
			</form>
		</div>
		<div class="col">
			
				<h5><i class="ti-wallet"></i> Create Roller Wallet</h5>
				
				<br>
				<br>
				<div class="card card-body">
				<small id="emailHelp" class="form-text text-muted">Select your roller wallet security unlock.</small>
				
				<div class="custom-file">
				    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
				    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
				    <div class="invalid-feedback">Example invalid custom file feedback</div>
				   
				</div>

				<div class="form-group">
				    <label for="exampleInputEmail1">Wallet Password</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter wallet password">
				    <small id="emailHelp" class="form-text text-muted">Wallet using with Roller Blockchain. <a href="https://roller.today" target="_bank">Click here</a> see detail</small>
				</div>

				<div class="text-left">
					<button type="submit" class="btn btn-info">Unlock</button>
					<a href="<?php echo store_url("createwallet.html");?>" class="btn btn-outline-info">Create Wallet</a>
				</div>

			</div>
		</div>
	</div>
	<br>
	
</div>