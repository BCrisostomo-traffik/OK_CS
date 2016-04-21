<div class="footer large-12 columns">
    <div class="footer-inner">
        <div class="row">
            <div class="links small-12 medium-10 medium-offset-1 columns">
                <a href="">Disclaimer</a> <span>|</span> <a href="">Privacy Policy</a> <span>|</span><a href="">Your
                    California Privacy
                    Rights</a> <span>|</span> <a href="">Site map</a>
            </div>
            <div class="small-12 medium-10 medium-offset-1 columns text-center">
                <?php
                global $language;


                switch ($language) {
                    case "en":
                        ?>
                        <p class="contest-info">Carter’s, Inc. is a well-established company with history dating back to 1865. We are the largest branded marketer of baby and children’s clothing in the U.S., with two of the most recognized and enduring brand names in the nation, Carter’s and OshKosh B’gosh. Our heritage of quality, innovation, and value has earned us the trust of generations of families. Carter's and OshKosh B'gosh clothing and accessories are sold at company-owned retail stores, national department stores and large retailers across the U.S. and Canada, as well as online, available for shipping within North America and around the world. To learn more about Carter's | OshKosh B'gosh, visit cartersoshkosh.ca.
                        </p>


                        <?php
                        break;
                    case "fr":
                        ?>

                        <p class="contest-info">fr-© 2016 Carter's, Inc. Carter's, Count on Carter's, Little Layette,
                            Child
                            of Mine,
                            Just One You, Precious Firsts, If they could just stay little 'til their Carter's wear out,
                            OshKosh,
                            OshKosh B'gosh, and Genuine Kids are trademarks owned by subsidiaries of Carter's, Inc.</p>

                        <p class="contest-info">Since 1895, OshKosh B’gosh has been the leader in manufacturing American
                            kids
                            clothes. We specialize in crafting high quality, affordable clothes for boys and girls that
                            work
                            on
                            every level of kid’s lives. From playtime to bedtime, school and beyond, OshKosh strives to
                            continue the
                            legacy of producing fun, wearable clothes for kids that are made to last. OshKosh began
                            creating
                            kids
                            jeans fashioned to look just like Dad’s iconic overalls. Fast forward over a hundred years,
                            and
                            OshKosh
                            kids jeans are still one of our bestselling items. Manufactured with top quality fabrics,
                            hardware and
                            attention to detail so kids can live their lives while maintaining style and comfort. Over
                            the
                            years
                            we’ve branched out into casualwear, swimwear, outerwear, playwear, dresses and even
                            sleepwear.
                            Kids are
                            our inspiration so we take the time to think about the things that are important in a kids’
                            life
                            and we
                            make exceptional clothes to meet those demands. At OshKosh B’gosh, we love kids and kids
                            love
                            our
                            clothes.</p>

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
    <img class="" src="<?php echo get_template_directory_uri() ?>/images/kids.png"> </div>
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
