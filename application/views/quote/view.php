<div class="quote-box">
	<h1 class="quote"><?=$quote->quote?></h1>
	<h2 class="author">- <?=$quote->author->name?> <span class="links small"><?=html::anchor($quote->permalink(), 'Permalink')?></span></h2>
</div>