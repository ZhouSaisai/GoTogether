<h2><?php echo $title; ?></h2>

<?php foreach ($users as $news_item): ?>

    <h3><?php echo $news_item['userId']; ?></h3>
    <div class="main">
        <?php echo $news_item['age']; ?>
    </div>

<?php endforeach; ?>