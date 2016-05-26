<div class="footer large-12 columns">
    <div class="footer-inner">
        <div class="row">
            <div class="links small-12 medium-10 medium-offset-1 columns">
                <a href="<?php echo site_url(); ?>/disclaimer/">Disclaimer</a> <span>|</span> <a
                    href="<?php echo site_url(); ?>/privacy-policy/">Privacy Policy</a>
            </div>
            <div class="small-12 medium-10 medium-offset-1 columns text-center">
                <?php
                global $language;


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
