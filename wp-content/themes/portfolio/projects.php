<?php /* Template Name: My Projects */ ?>
<?php get_header() ?>

    <main class="layout projects">
        <?php
        $projects = pf_get_projects(9);
        if (($projects/* = dw_get_trips(3)*/)->have_posts()) : while ($projects->have_posts()) : $projects->the_post(); ?>
            <h1 class="page__title project__title"><?= __('Mes projets', 'pf') ?></h1>
            <article class="project">
                <a href="<?= get_the_permalink() ?>" class="project__link all"><?= __('Lire l’article', 'pf') ?> "<?= get_the_title() ?>"</a>
                <div class="project__card">
                    <img src="#" alt="Image du projet" class="project__img">
                    <h3 class="project__title"><?= get_the_title() ?></h3>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p class="projects__empty empty"><?= __('Il n’y a pas encore de projet pour le moment', 'pf') ?></p>
        <?php endif; ?>

        <?php include 'partials/_contact-section.php'?>
    </main>


<?php get_footer() ?>