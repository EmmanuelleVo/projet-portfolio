<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
    <main class="layout contact">
        <h1 class="page__title">Contactez-moi</h1>
        <div class="contact__container">
            <p class="contact__content">Contactez-moi via ce formulaire ou mon adresse mail.</p>
            <div class="contact__info">
                <div class="contact__data">
                    <!--TODO:SVG-->
                    
                </div>

            </div>

        </div>


        <?php if(! isset($_SESSION['feedback_contact_form']) || !$_SESSION['feedback_contact_form']['success']): ?>
        <form class="contact__form form" method="post" action="<?= get_home_url() ?>/wp-admin/admin-post.php">
            <div class="form__field">
                <label for="lastname" class="form__label">Nom</label>
                <input type="text" class="form__input" name="lastname" id="lastname" placeholder="Vo"
                       value="<?= pf_get_contact_form_field_value('lastname') ?>"
                >
                <?= pf_get_contact_form_field_error('lastname') ?>
            </div>
            <div class="form__field">
                <label for="firstname" class="form__label">Prénom</label>
                <input type="text" class="form__input" name="firstname" id="firstname" placeholder="Emmanuelle"
                       value="<?= pf_get_contact_form_field_value('firstname') ?>">
                <?= pf_get_contact_form_field_error('firstname') ?>
            </div>
            <div class="form__field">
                <label for="email" class="form__label">Email</label>
                <input type="email" class="form__input" name="email" id="email" placeholder="test@test.com"
                       value="<?= pf_get_contact_form_field_value('email') ?>">
                <?= pf_get_contact_form_field_error('email') ?>
            </div>
            <div class="form__field">
                <label for="phone" class="form__label">Numéro de téléphone</label>
                <input type="tel" class="form__input" name="phone" id="phone" placeholder="(+32)499 99 99 99"
                       value="<?= pf_get_contact_form_field_value('phone') ?>">
                <?= pf_get_contact_form_field_error('phone') ?>
            </div>
            <div class="form__field">
                <label for="message" class="form__label">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"><?= pf_get_contact_form_field_value('message') ?></textarea>
                <?= pf_get_contact_form_field_error('message') ?>
            </div>
            <div class="form__field form__actions">
                <input type="hidden" name="action" value="submit_contact_form">
                <?php wp_nonce_field('nonce_check_contact_form') ?>
                <input type="submit" class="form__submit" value="Envoyer">
            </div>
        </form>
        <?php else: ?>
            <p class="form__success">Message envoyé. Merci de m'avoir contacté.</p>
        <?php endif; ?>
    </main>

<?php get_footer();
    unset($_SESSION['feedback_contact_form']);
?>