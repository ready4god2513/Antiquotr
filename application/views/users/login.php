<?=form::open('sessions/authenticate')?>
	<fieldset>
		<legend>Login</legend>		
		
		<div class="formFields">
			<?=form::label('username', 'Username')?>
			<?=form::input('username')?>
		</div>
		
		<div class="formFields">
			<?=form::label('password', 'Password')?>
			<?=form::password('password')?>
		</div>
		
		<div class="formFields">
			<?=form::submit('submit', 'Login')?>
		</div>
	</fieldset>
<?=form::close()?>