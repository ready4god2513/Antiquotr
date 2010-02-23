<?php foreach($quotes as $quote) { ?>

	<?=View::factory('quote/view')->set('quote', $quote)?>
	
	<?php if($quote->id % 3) { ?>
		<script type="text/javascript"><!--
			google_ad_client = "pub-7212370815157358";
			/* 300x250, created 2/19/10 */
			google_ad_slot = "5905318316";
			google_ad_width = 468;
			google_ad_height = 60;
			//-->
		</script>
		<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
	<?php } ?>
	
<?php } ?>