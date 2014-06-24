<?php echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($items as $item): ?>
    <?php foreach ($item['models'] as $model): ?>
        <url>  
            <?php
            /* У модели Post нет методов getPermaLink(), поэтому ссылку на пост получаем с помощью getLink().
            * Тоже самое с change_date.
            * Также различие в типе полей для хранения даты, поэтому используем strtotime во втором случае.
            */
            if (get_class($model) === 'Post') { ?>
                <loc><?php echo $host;?><?php echo $model->getLink();?></loc>
                <lastmod><?php echo date(DATE_W3C, $model->update_date); ?></lastmod>
            <?php } else { ?>
                <loc><?php echo $model->getPermaLink();?></loc>
                <lastmod><?php echo date(DATE_W3C, strtotime($model->change_date)); ?></lastmod>
            <?php } ?>
            <changefreq><?php echo $item['changefreq']; ?></changefreq>
            <priority><?php echo $item['priority']; ?></priority>
        </url>
        <?php endforeach; ?>
    <?php endforeach; ?>
</urlset>