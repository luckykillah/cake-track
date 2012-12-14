<h1>Categories</h1>

<ul>
	<? foreach ($categories as $category): ?>
	<li>
		<h2><?= $this->Html->link($category['Category']['title'],
array('controller' => 'categorys', 'action' => 'view', $category['Category']['id'].': '.$category['Category']['title'])); ?></h2>
	</li>
	<? endforeach; ?>
	<? unset($post); ?>
</ul>