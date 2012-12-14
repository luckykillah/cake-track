<h1><?php echo h($routine['Routine']['title']); ?></h1>

<p><small>Created: <?php echo $routine['Routine']['created']; ?></small></p>

<p><?php echo h($routine['Routine']['body']); ?></p>

<pre><? print_r($routine); ?></pre>