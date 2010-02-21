<?=form::open('quote/create')?>
	<?=form::input('required')?>
	<fieldset>
		<legend>This Had Better Be Good</legend>
		<div class="formFields">
			<?=form::textarea('quote')?>
		</div>
		<div class="formFields">
			<?=form::dropdown('author', $authors)?>
		</div>
		<div class="formFields">
			<?=form::submit('submit', 'Let\'s do it')?>
		</div>
	</fieldset>
<?=form::close()?>