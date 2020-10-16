<?php ?>
<a class="button" href="/crud/index.php?task=report">All Employee |</a>
<a class="button" href="/crud/index.php?task=create">create |</a>
<!-- <a class="button" href="/crud/index.php?task=update">update |</a> -->
<a class="button" <?php echo seedDisabled(); ?> href="/crud/index.php?task=seed" style="<?php echo disPlayNone();?>">Seeds |</a>
<a class="button delete" href="/crud/index.php?task=deleteall" style="<?php echo deleteAllShow();?>">Delete All |</a>