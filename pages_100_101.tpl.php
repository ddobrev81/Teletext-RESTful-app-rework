<teletext user="propeople" pass="tvdanmark">
<?php foreach($output['pages'] as $pages) : ?>
<page inserter="<?php print $pages['channel']; ?>" num="<?php print $pages['num']; ?>" sub="<?php print $pages['sub']; ?>" language="<?php print $pages['lang']; ?>">
<?php if(isset($pages['line1'])): ?>
<line num="1"><<?php print $pages['line1']['color1']; ?>/><background/><white/><?php print $pages['line1']['number']; ?> <white/><background/><<?php print $pages['line1']['color2']; ?>/><?php print $pages['line1']['date']; ?></line>
<?php endif?>
<?php foreach($pages['lines'] as $k => $v) : ?>
<line num="<?php print $k; ?>"><?php if(isset($v['color'])): print "<".$v['color']."/>"; endif?><?php if($v['text']): print $v['text']; endif?></line>
<?php endforeach ?></page>
<?php endforeach ?>
</teletext>