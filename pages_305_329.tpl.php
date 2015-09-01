<teletext user="propeople" pass="tvdanmark">
<?php foreach($output['pages'] as $pages) : ?>
<page inserter="<?php print $pages['channel']; ?>" num="<?php print $pages['num']; ?>" sub="<?php print $pages['sub']; ?>" language="<?php print $pages['lang']; ?>">
<line num="1"><magenta/><background/><white/><?php print $pages['line1']['number']; ?> <white/><background/><magenta/><?php print $pages['line1']['date']; ?></line>
<?php foreach($pages['lines'] as $k => $v) : ?>
<line num="<?php print $k; ?>"><<?php print $v['color']; ?>/><?php if($v['text']): print $v['text']; endif?></line>
<?php endforeach ?></page>
<?php endforeach ?>
</teletext>