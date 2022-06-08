<?php get_header() ?>

    <main class="layout">

        <section class="layout__intro intro">
            <div class="circle__animation">
                <div class="circle__one circle left"></div>
                <div class="circle__two circle left"></div>
                <div class="circle__three circle right"></div>
                <div class="circle__four circle right"></div>
                <div class="circle__five circle left"></div>
                <div class="circle__six circle left"></div>
                <div class="circle__seven circle left"></div>
                <div class="circle__eight circle left"></div>
                <div class="circle__nine circle right"></div>
                <div class="circle__ten circle right"></div>
            </div>
            <div class="intro__container big-screen">
                <h2 class="intro__title"><span class="intro__name">Emmanuelle Vo,</span> <span
                            class="intro__job"><?= __('Web Designer', 'pf') ?></span></h2>
                <div class="intro__link">
                    <a href="<?= get_permalink(pf_get_template_page('about')) ?>"
                       class="intro__button button"><?= __('En savoir plus', 'pf') ?></a>
                </div>
            </div>
        </section>

        <section class="layout__last-project last-project">
            <div class="big-screen">

                <h2 class="last-project__title"><?= __('Mes projets', 'pf') ?></h2>
                <?php
                $projects = pf_get_projects(1);
                if (($projects)->have_posts()) : while ($projects->have_posts()) : $projects->the_post();
                    pf_include('project', ['modifier' => 'index']); ?>

                <?php endwhile; else : ?>
                    <p class="last-project__empty empty"><?= __('Il n’y a pas encore de projet pour le moment', 'pf') ?></p>
                <?php endif; ?>
                <a href="<?= get_post_type_archive_link('project') ?>"
                   class="last-project__button projects__all button"><?= __('Voir tous mes projets', 'pf') ?></a>
            </div>
        </section>
        <div class="big-screen">
            <?php include 'partials/_contact-section.php' ?>
        </div>
    </main>

<?php get_footer() ?>