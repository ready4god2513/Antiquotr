<?php foreach($quotes as $quote) { ?>
	<?=View::factory('quote/view')->set('quote', $quote)->set('author', $author)?>
<?php } ?>