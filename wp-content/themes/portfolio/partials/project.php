<article class="project project--<?= $modifier ?>">
    <div class="project__card">
        <a href="<?= get_the_permalink() ?>"
           class="project__link all">
            <span class="sro"><?= str_replace(':title', get_the_title(), __('Lire l’article ":title"', 'pf')) ?></span>
        </a>
        <div class="project__wrapper">
            <h3 class="project__title"><?= get_the_title() ?></h3>
        </div>
        <figure class="project__fig">
            <?= get_the_post_thumbnail(null, 'medium', [
                'class' => 'project__thumb',
            ]) ?>
        </figure>
    </div>
</article>