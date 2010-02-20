<?=form::open('authors/create')?>
	<?=form::input('required')?>
	<fieldset>
		<legend>Add a Voice</legend>
		<div class="formFields">
			<?=form::input('author')?> 
		</div>
		<div class="formFields">
			<?=form::submit('submit', 'Add Me')?>
		</div>
	</fieldset>
<?=form::close()?>