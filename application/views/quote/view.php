<div id="quote">
	<h1 class="quote"><?=$quote->quote?></h1>
	<h2 class="author">- <?=$quote->author->name?> <span class="links small"><?=html::anchor($quote->id, 'Permalink')?></span></h2>
</div>