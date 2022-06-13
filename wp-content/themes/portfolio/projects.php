<?php /* Template Name: My Projects */ ?>
<?php get_header() ?>

    <main class="layout projects">
        <h1 class="page__title projects__title"><?= __('Mes projets', 'pf') ?></h1>
        <div class="projects__container">
            <?php
            $projects = pf_get_projects(9);
            if (($projects)->have_posts()) : while ($projects->have_posts()) : $projects->the_post();
                pf_include('project', ['modifier' => 'archive']); ?>


        <?php endwhile; else : ?>
            <p class="projects__empty empty"><?= __('Il n’y a pas encore de projet pour le moment', 'pf') ?></p>
        <?php endif; ?>
        </div>

        <?php include 'partials/_contact-section.php' ?>
    </main>


<?php get_footer() ?>