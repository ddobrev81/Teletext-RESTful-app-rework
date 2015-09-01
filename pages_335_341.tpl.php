<?php foreach($output['pages'] as $pages) : ?>
<page inserter="<?php print $pages['channel']; ?>" num="<?php print $pages['num']; ?>" sub="<?php print $pages['sub']; ?>" language="<?php print $pages['lang']; ?>">
<line num="1"><<?php print $pages['line1']['color1']; ?>/><background/><white/><?php print $pages['line1']['number']; ?> <white/><background/><<?php print $pages['line1']['color2']; ?>/><?php print $pages['line1']['date']; ?></line>
<?php foreach($pages['lines'] as $k => $v) : ?>
<line num="<?php print $k; ?>"><white/><?php if($v['start_time']): print $v['start_time']; endif?><cyan/><?php if($v['title']): print $v['title']; endif?><yellow/><?php if($v['description']): print $v['description']; endif?></line>
<?php endforeach ?></page>
<?php endforeach ?>