<section class="posts">
    <h1>Routines <span class="add"><?= $this->Html->link('+', array('action' => 'add')); ?></a></h1>

    <? foreach ($routines as $routine): ?>
    
    <article class="post" id="post-<?= $routine['Routine']['id']; ?>">
        <h2><?php echo $this->Html->link($routine['Routine']['title'], array('action' => 'view', $routine['Routine']['id'])); ?></h2>
        
        <div class="content">
            Every <?= $routine['Routine']['frequency']?> days... <?= $routine['Routine']['body']; ?>
        </div>

        <footer class="meta">
            <?= $this->Html->link('Edit', array('action' => 'edit', $routine['Routine']['id'])); ?>
        </footer>
    </article>

    <?php endforeach; ?>
    <? unset($routine); ?>
</section>