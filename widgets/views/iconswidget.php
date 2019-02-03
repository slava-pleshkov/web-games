<?php if (isset($main) && count($main)): ?>
    <ul class="icons">
		<?php foreach ($main as $item): ?>
            <li><a href="<?= $item->url ?>" class="<?= $item->icon ?>"><span class="label"><?= $item->title ?></span></a></li>
		<?php endforeach; ?>
    </ul>
<?php endif; ?>