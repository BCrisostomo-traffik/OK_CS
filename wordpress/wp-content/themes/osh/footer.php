<div class="footer large-12 columns">
    <div class="footer-inner">
        <div class="row">
            <div class="links small-12 medium-10 medium-offset-1 columns">

                <?php
                global $language;

                switch ($language) {
                case "en":
                    ?>
                    <a href="<?php echo site_url(); ?>/disclaimer/">Disclaimer</a> <span>|</span> <a
                    href="<?php echo site_url(); ?>/privacy-policy/">Privacy Policy</a>
                    <?php
                    break;
                case "fr":
                ?>
                <a href="<?php echo site_url(); ?>/disclaimer/?lang=<?php echo $language; ?>">Avis de non-responsabilité</a> <span>|</span> <a
                    href="<?php echo site_url(); ?>/privacy-policy/?lang=<?php echo $language; ?>">Politique de confidentialité</a>
              <?php  }
                ?>


            </div>
            <div class="small-12 medium-10 medium-offset-1 columns text-center">
                <?php


                switch ($language) {
                    case "en":
                        ?>
                        <p class="contest-info">Carter’s, Inc. is a well-established company with history dating back to
                            1865. We are the largest branded marketer of baby and children’s clothing in the U.S., with
                            two of the most recognized and enduring brand names in the nation, Carter’s and OshKosh
                            B’gosh. Our heritage of quality, innovation, and value has earned us the trust of
                            generations of families. Carter's and OshKosh B'gosh clothing and accessories are sold at
                            company-owned retail stores, national department stores and large retailers across the U.S.
                            and Canada, as well as online, available for shipping within North America and around the
                            world. To learn more about Carter's | OshKosh B'gosh, visit cartersoshkosh.ca.
                        </p>


                        <?php
                        break;
                    case "fr":
                        ?>

                        <p class="contest-info">Carter’s, Inc. est une entreprise bien établie dont l’histoire remonte à
                            1865. Nous sommes la première marque de vêtements pour bébés et jeunes enfants aux
                            États-Unis, avec deux marques parmi les plus connues au pays : Carter’s et OshKosh B’gosh.
                            Nos traditions de qualité, d’innovation et de rapport qualité-prix ont fait de nous la
                            marque de confiance des familles depuis plusieurs générations. Les vêtements et accessoires
                            Carter's et OshKosh B'gosh sont vendus dans nos propres magasins, dans les grands magasins
                            et les grands détaillants aux États-Unis et au Canada, ainsi qu’en ligne avec un service de
                            livraison en Amérique du Nord et dans le monde entier. Pour en savoir plus sur Carter's |
                            OshKosh B'gosh, visitez cartersoshkosh.ca.
                        </p>

                        <?php
                        break;
                }
                ?>
            </div>
            <div class="small-12 medium-10 medium-offset-1 columns text-center">
            </div>
        </div>
    </div>
</div>
</div>
<div class="kids">
    <img class="" src="<?php echo get_template_directory_uri() ?>/images/kids.png"></div>
</div>

<script src="<?php echo get_template_directory_uri() ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/foundation/foundation.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/foundation/foundation.reveal.js"></script>

<script>
    $(document).foundation();
</script>
<?php wp_footer(); ?>

</body>
</html>
