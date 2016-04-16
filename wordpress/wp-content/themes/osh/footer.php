<div class="footer large-12 columns">
    <div class="row" style="margin-top: 30px; line-height: 20px; font-family:arial,san-serif">
        <div class="small-12 columns">
            <a href="">Disclaimer</a> | <a href="">Privacy Policy</a> | <a href="">Your California Privacy
                Rights</a> | <a href="">Site map</a>
        </div>
        <div class="small-12 columns text-center">
            <?php
            global $language;


            switch ($language) {
                case "en":
                    ?>
                    <p class="contest-info">© 2016 Carter's, Inc. Carter's, Count on Carter's, Little Layette, Child of
                        Mine,
                        Just One You, Precious Firsts, If they could just stay little 'til their Carter's wear out,
                        OshKosh,
                        OshKosh B'gosh, and Genuine Kids are trademarks owned by subsidiaries of Carter's, Inc.</p>

                    <p class="contest-info">Since 1895, OshKosh B’gosh has been the leader in manufacturing American
                        kids
                        clothes. We specialize in crafting high quality, affordable clothes for boys and girls that work
                        on
                        every level of kid’s lives. From playtime to bedtime, school and beyond, OshKosh strives to
                        continue the
                        legacy of producing fun, wearable clothes for kids that are made to last. OshKosh began creating
                        kids
                        jeans fashioned to look just like Dad’s iconic overalls. Fast forward over a hundred years, and
                        OshKosh
                        kids jeans are still one of our bestselling items. Manufactured with top quality fabrics,
                        hardware and
                        attention to detail so kids can live their lives while maintaining style and comfort. Over the
                        years
                        we’ve branched out into casualwear, swimwear, outerwear, playwear, dresses and even sleepwear.
                        Kids are
                        our inspiration so we take the time to think about the things that are important in a kids’ life
                        and we
                        make exceptional clothes to meet those demands. At OshKosh B’gosh, we love kids and kids love
                        our
                        clothes.</p>

                    <?php
                    break;
                case "fr":
                    ?>

                    <p class="contest-info">fr-© 2016 Carter's, Inc. Carter's, Count on Carter's, Little Layette, Child
                        of Mine,
                        Just One You, Precious Firsts, If they could just stay little 'til their Carter's wear out,
                        OshKosh,
                        OshKosh B'gosh, and Genuine Kids are trademarks owned by subsidiaries of Carter's, Inc.</p>

                    <p class="contest-info">Since 1895, OshKosh B’gosh has been the leader in manufacturing American
                        kids
                        clothes. We specialize in crafting high quality, affordable clothes for boys and girls that work
                        on
                        every level of kid’s lives. From playtime to bedtime, school and beyond, OshKosh strives to
                        continue the
                        legacy of producing fun, wearable clothes for kids that are made to last. OshKosh began creating
                        kids
                        jeans fashioned to look just like Dad’s iconic overalls. Fast forward over a hundred years, and
                        OshKosh
                        kids jeans are still one of our bestselling items. Manufactured with top quality fabrics,
                        hardware and
                        attention to detail so kids can live their lives while maintaining style and comfort. Over the
                        years
                        we’ve branched out into casualwear, swimwear, outerwear, playwear, dresses and even sleepwear.
                        Kids are
                        our inspiration so we take the time to think about the things that are important in a kids’ life
                        and we
                        make exceptional clothes to meet those demands. At OshKosh B’gosh, we love kids and kids love
                        our
                        clothes.</p>

                    <?php
                    break;
            }
            ?>
        </div>
    </div>
</div>
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
