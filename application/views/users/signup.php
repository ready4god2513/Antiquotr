<?=form::open('users/register')?>
	<fieldset>
		<legend>Register</legend>		
		
		<div class="formFields">
			<?=form::label('username', 'Username')?>
			<?=form::input('username')?>
		</div>
		
		<div class="formFields">
			<?=form::label('password', 'Password')?>
			<?=form::password('password')?>
		</div>
		
		<div class="formFields">
			<?=form::submit('submit', 'Register')?>
		</div>
	</fieldset>
<?=form::close()?>