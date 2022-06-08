<?php get_header(); ?>
    <main class="layout projects">
        <section class="layout__projects projects">
            <h2 class="projects__title"><?= __('Tous mes projets', 'pf'); ?>archive</h2>
            <nav class="projects__filters">
                <h3 class="sro"><?= __('Filtrer les résultats', 'pf'); ?></h3>
                <?php foreach(get_terms(['taxonomy' => 'country', 'hide_empty' => true]) as $term) : ?>
                    <a href="?country=<?= $term->slug; ?>"><?= $term->name; ?></a>
                <?php endforeach; ?>
            </nav>
            <div class="projects__container">
                <?php
                if(have_posts()): while(have_posts()): the_post();
                    include(__DIR__ . '/partials/project.php');
                endwhile; else: ?>
                    <p class="projects__empty"><?= __('Il n’y a aucun projet pour le moment.', 'pf'); ?></p>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>