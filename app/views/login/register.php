<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Registration</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/account_check" method="post">
								 
			    <fieldset>
					<div class="form-group">
					  <label for="username" class="col-lg-2 control-label">Username </label>
					  <div class="col-lg-10">
						<input type="text" class="form-control" name="username" placeholder="Enter Username">
					  </div>
					</div>
					<div class="form-group">
					  <label for="password" class="col-lg-2 control-label">Password (Password must be greater than 5 chars)	</label>
<div class="col-lg-10">
<input type="password" class="form-control" name="password" placeholder="Enter Password">
</div>
					</div>

					<div class="form-group">
										<div class="col-lg-10 col-lg-offset-2">
											<button type="submit" class="btn btn-primary">REGISTER</button>
										</div>
					</div>
			    </fieldset>
			</form>
			<div>
		
			</div>
			<?php if(!empty($data['reg_error']))
						{foreach($data['reg_error'] as $registration_error) {?>

<div class="alert alert-dismissible alert-danger">
							<?php	echo "Oops..".$registration_error ?>
		</div>










		<?php
		}
		}
		
		
		
		else if(!empty($data['success']))
		{?>
				<div class="alert alert-dismissible alert-success"> 


								<?php	echo "Awesome..".$data['success'] ?>
		</div>

							<?php 
						}?>
        </div>
    </div>

    <?php require_once '../app/views/templates/footer.php' ?>
