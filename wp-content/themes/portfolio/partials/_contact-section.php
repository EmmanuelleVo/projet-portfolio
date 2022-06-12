<section class="contact-section">
    <div class="circle__animation">
        <div class="circle__one circle left"></div>
        <div class="circle__two circle left"></div>
        <div class="circle__three circle right"></div>
        <div class="circle__four circle right"></div>
        <div class="circle__seven circle left"></div>
        <div class="circle__eight circle left"></div>
    </div>
    <h2 class="contact-section__title sro"><?= __('Contactez-moi', 'pf') ?></h2>
    <div class="contact-section__container">
        <p class="contact-section__content hidden"><?= __('Démarrons un projet ensemble, n’hésitez pas à me ', 'pf') ?>
            <a href="<?= get_permalink(pf_get_template_page('contact')) ?>" class="contact-section__link"><?= __('contacter', 'pf') ?></a>
        </p>

    </div>
</section>