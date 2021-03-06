<div class="td-footer-wrapper td-footer-template-14 <?php echo td_util::get_option('td_full_footer'); ?>">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12">
                <?php
                // footer 1 sidebar
                td_global::vc_set_custom_column_number(3);
                dynamic_sidebar('Footer 1');
                ?>

                <div class="footer-social-wrap td-social-style-2">
                    <?php
                    if(td_util::get_option('tds_footer_social') != 'no') {

                        //get the socials set by user
                        $td_get_social_network = td_options::get_array('td_social_networks');

                        if(!empty($td_get_social_network)) {
                            foreach($td_get_social_network as $social_id => $social_link) {
                                if(!empty($social_link) && !empty($social_id)) {
                                    echo td_social_icons::get_icon($social_link, $social_id, true, true);
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>