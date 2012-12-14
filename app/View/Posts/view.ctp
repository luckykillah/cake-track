<article class="post single">
	<header>
		<h1><?php echo h($post['Post']['title']); ?></h1>
		<p><em><?= date('n.j', time($post['Post']['created'])); ?></em></p>
	</header>

	<div class="content">
		<?= $post['Post']['body']; ?>
	</div>

	<footer>
		<? foreach($post['Category'] as $cat): ?>
			<?= $this->Html->link($cat['title'] , array('controller' => 'categories', 'action' => 'view', $cat['id'])); ?>
		<? endforeach ?>
	</footer>

</article>