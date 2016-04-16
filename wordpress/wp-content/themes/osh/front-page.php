<?php
get_header();
?>

<?php echo get_field('form_title_'.$language); ?>
<?php echo get_field('form_content_'.$language); ?>
<?php echo get_field('thank_you_'.$language); ?>
<?php
echo do_shortcode( '[contact-form-7 id="4" title="English Form"]');






?>



<div class="small-12 large-push-1 large-10 columns end" style="z-index:999;">
    <div id='registration-form'>
        <form id="agfrom" action="submit.php" method="POST">

            <div id='form1' class="small-12 columns">
                <div class="row">
                    <div class="small-12 columns">
                        <h2>#CartersComingSoon</h2>
                        <p>Enter for a chance to win a Carter’s Oshkosh baby shower at one of our many new
                            Canadian locations. Winners will also receive a $250.00 gift card to spend at any
                            Carter’s Oshkosh store, and prizes for each of your 10 guests.<br>
                            Fill out the form below to start.</p>
                    </div>
                    <div class="small-12 columns">
                        <p style="position: relative; top: 7px; font-size: 11px;">Fill in the required
                            fields.</p>
                    </div>

                    <div class="large-6 columns">
                        <div class="required"></div>
                        <span>*</span>
                        <input id="user_firstname" name="user[firstname]" type="text"
                               g_placeholder="First Name"/>
                    </div>

                    <div class="large-6 columns">
                        <div class="required"></div>
                        <span>*</span>
                        <input id="user_lastname" name="user[lastname]" type="text" g_placeholder="Last Name"/>
                    </div>

                    <div class="large-6 columns">
                        <div class="required"></div>
                        <span>*</span>
                        <input id="user_email" name="user[email]" type="text" g_placeholder="E-mail Address"/>
                    </div>

                    <div class="large-6 columns">
                        <div class="required"></div>
                        <span>*</span>
                        <input id="user_postal" name="user[postal]" type="text"
                               g_placeholder="Postal Code"/>
                    </div>


                    <div class="large-12 columns">
                        <p>Or you could nominate a friend for a
                            chance to win her a Carter’s Oshkosh baby shower.
                        </p>
                    </div>


                    <div class="large-6 columns">
                        <div class="required"></div>
                        <span>*</span>
                        <input id="user_email" name="user[email]" type="text" g_placeholder="Nominee Name"/>
                    </div>

                    <div class="large-6 columns">
                        <div class="required"></div>
                        <div id="custom-selector-container-store">
                            <span>*</span>
                            <select id="user_store" name="user[store]" class="styled">
                                <option value="0" selected disabled>Select a store</option>
                                <option value="CA">Canada</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="form-item-agreement gchbx clearfix rulecbox">
                                <div class="required"></div>
                                <span class="checkbox-ast" style="margin-top:2px;">*</span>
                                <input id="agreement" type="checkbox" name="user_agreement" value="agreement"
                                       style="color:#000;"/>
                                <label style="font-family: arial,sans-serif;">Agree to <a
                                        href="rules_and_regulations.php" target="_blank">Rules and Regulations</a></label>
                            </div>
                            <div class="form-item-agreement gchbx clearfix rulecbox">
                                <div class="required"></div>
                                <span class="checkbox-ast" style="margin-top:2px;">*</span>
                                <input id="agreement" type="checkbox" name="user_agreement" value="agreement"
                                       style="color:#000;"/>
                                <label style="font-family: arial,sans-serif;">I would like to receive emails on promotions and new products</label>
                            </div>

                            <div id="enter-button" class="" style="text-align:center;">
                                <a href="submit.php" id='submit' class="button">Submit <img
                                        src="<?php echo get_template_directory_uri() ?>/images/arrow.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<div class="footer large-12 columns">
    <div class="row" style="margin-top: 30px; line-height: 20px; font-family:arial,san-serif">
        <div class="small-12 columns">
            <a href="">Disclaimer</a> | <a href="">Privacy Policy</a> | <a href="">Your California Privacy
                Rights</a> | <a href="">Site map</a>
        </div>

        <div class="small-12 columns text-center">
            <p class="contest-info">© 2016 Carter's, Inc. Carter's, Count on Carter's, Little Layette, Child of
                Mine, Just One You, Precious Firsts, If they could just stay little 'til their Carter's wear out,
                OshKosh, OshKosh B'gosh, and Genuine Kids are trademarks owned by subsidiaries of Carter's, Inc.</p>

            <p class="contest-info"> Since 1895, OshKosh B’gosh has been the leader in manufacturing American kids
                clothes. We specialize
                in crafting high quality, affordable clothes for boys and girls that work on every level of kid’s
                lives. From playtime to bedtime, school and beyond, OshKosh strives to continue the legacy of
                producing fun, wearable clothes for kids that are made to last. OshKosh began creating kids jeans
                fashioned to look just like Dad’s iconic overalls. Fast forward over a hundred years, and OshKosh
                kids jeans are still one of our bestselling items. Manufactured with top quality fabrics, hardware
                and attention to detail so kids can live their lives while maintaining style and comfort. Over the
                years we’ve branched out into casualwear, swimwear, outerwear, playwear, dresses and even sleepwear.
                Kids are our inspiration so we take the time to think about the things that are important in a kids’
                life and we make exceptional clothes to meet those demands. At OshKosh B’gosh, we love kids and kids
                love our clothes.</p>
        </div>
    </div>
</div>


<?php get_footer(); ?>
