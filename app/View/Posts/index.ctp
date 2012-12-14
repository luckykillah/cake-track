<section class="posts">
    <h1>Life <span class="add"><?= $this->Html->link('+', array('action' => 'add')); ?></a></h1>

    <? foreach ($posts as $post): ?>
    
    <article class="post" id="post-<?= $post['Post']['id']; ?>">
        <h2><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?></h2>
        
        <div class="content">
            <?= $post['Post']['body']; ?>
        </div>

        <footer class="meta">
            <? /* echo $this->Form->postLink( 'Delete', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?')); */ ?>
            <?= $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
            | <?= $post['Post']['created']; ?>
        </footer>
    </article>

    <? endforeach; ?>
    <? unset($routine); ?>
</section>