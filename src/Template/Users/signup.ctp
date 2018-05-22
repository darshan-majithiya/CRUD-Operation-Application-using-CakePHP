<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
  <div class="container">
    <div class="row justify-content-center" style="margin-top:5%">
    	<div class="col-md-6 col-md-offset-5 align-self-center">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center" style="font-weight:bold;color:#116D76">Sign up</h3>
          </div>
			  	<div class="panel-body">
			    	<?= $this->Form->create($user) ?>
                    <fieldset>
			    	  	<div class="form-group">
                  <?= $this->Form->control('email', ['placeholder'=>'Enter email', 'class'=>'form-control']); ?>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			    		</div>
              <div class="form-group">
                <?= $this->Form->control('phone', ['placeholder'=>'Enter Phone Number', 'class'=>'form-control']); ?>
              </div>
			    		<div class="form-group">
                <?= $this->Form->control('password', ['placeholder'=>'Enter Password', 'class'=>'form-control', 'type'=>'password']); ?>
			    		</div><hr />
              <?= $this->Form->button(__('Sign up'), ['class'=>'btn btn-lg btn-block btn-info']); ?>
			    	</fieldset>
			      	<?= $this->Form->end() ?>
			    </div>
			</div>
		</div>
	</div>
</div>
</div>
