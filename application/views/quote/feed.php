<?php echo '<?xml version="1.0" encoding="UTF-8"?>'?>
<rss version="2.0">
<channel>
    <title>AntiQuotr | Did they really say that?!</title>
    <link><?=url::site()?></link>
    <?php foreach($quotes as $quote) { ?>
    <item>
        <title><?=$quote->author->name?> : <?=quote::truncate($quote->quote)?></title>
        <link><?=url::site($quote->id)?></link>
        <description><?=quote::truncate($quote->quote)?></description>
        <author><?=$quote->author->name?></author>
        <pubDate><?=date("D, d M Y H:i:s T", strtotime($quote->created_at))?></pubDate>
    </item>
    <?php } ?>
</channel>
</rss>