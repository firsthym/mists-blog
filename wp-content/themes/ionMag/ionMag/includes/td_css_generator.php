<?php
function td_css_generator() {

    $raw_css = "
    <style>
    /* ------------------------------------------------------ */
    /* tagDiv Free Theme */

    /* ------------------------------------------------------ */
    /* GENERAL Theme Colors */

    /* THEME ACCENT COLOR */
    /* @theme_color */
    .td-icon-search,
    .td-header-wrap .td-drop-down-search .btn:hover,
    .td-header-wrap .td-drop-down-search .result-msg a,
    .td-header-top-menu .top-header-menu a:hover,
    .td-header-top-menu .top-header-menu .current-menu-item > a,
    .td-header-top-menu .top-header-menu .current-menu-ancestor > a,
    .td-header-top-menu .top-header-menu .current-category-ancestor > a,
    .sf-menu > li:hover > a,
    .sf-menu > .sfHover > a,
    .sf-menu > .current-menu-item > a,
    .sf-menu > .current-menu-ancestor > a,
    .sf-menu > .current-category-ancestor > a,
    .sf-menu ul .td-menu-item > a:hover,
    .sf-menu ul .sfHover > a,
    .sf-menu ul .current-menu-ancestor > a,
    .sf-menu ul .current-category-ancestor > a,
    .sf-menu ul .current-menu-item > a,
    .td_mega_menu_sub_cats .cur-sub-cat,
    .td_module_mega_menu:hover .entry-title a,
    .td-theme-wrap .td_module_mega_menu:hover .td-item-details .entry-title a,
    .td-theme-wrap .td_mega_menu_sub_cats .block-mega-child-cats .cur-sub-cat,
    .td-theme-wrap .td_block_mega_menu .td-next-prev-wrap a:hover,
    .td-header-menu-search .td-search-btns-wrap:hover .td-icon-search,
    a,
    cite a:hover,
    .td-theme-wrap blockquote p,
    .td_module_wrap:hover .entry-title a,
    .td-next-prev-wrap a:hover,
    .td_ajax_load_more:hover,
    .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td_block_template_14 .td-pulldown-filter-display-option:hover i,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more span,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more i,
    .td-subcat-filter .td-subcat-list a:hover,
    .td-subcat-filter .td-subcat-dropdown a:hover,
    .td-module-comments a:hover,
    .td-wrapper-pulldown-filter .td-pulldown-filter-item .td-cur-simple-item,
    .td-wrapper-pulldown-filter .td-pulldown-filter-link:hover,
    .td-wrapper-pulldown-filter .td-pulldown-category-filter-link:hover,
    .td_quote_on_blocks,
    .td_block_author a:hover,
    .td-social-sharing-buttons:hover .td-social-but-text,
    .td-post-small-box a:hover,
    .td-post-next-prev-content span,
    .td-post-next-prev-content a:hover,
    .td-author-name a:hover,
    .td-author-url a:hover,
    .logged-in-as a:hover,
    .comment-reply-link,
    #cancel-comment-reply-link:hover,
    #searchsubmit:hover,
    .search-submit:hover,
    .td-search-header .td-search-query,
    .td-review-overall i,
    .td-review-final-score,
    .widget a:hover,
    .widget_calendar tfoot a:hover,
    .widget_calendar tbody a,
    .td_social_type .td_social_button a:hover,
    .td-subfooter-menu li.menu-item > a:hover,
    .td-subfooter-menu li.sfHover > a,
    .td-subfooter-menu li.current-menu-ancestor > a,
    .td-subfooter-menu li.current-category-ancestor > a,
    .td-subfooter-menu li.current-menu-item > a,
    .td-mega-menu-page .wpb_content_element ul li a :hover,
    .td-smart-list-dropdown-wrap .td-smart-list-button:hover,
    .td-instagram-user a,
    .footer-text-wrap .footer-email-wrap a,
    .td-sub-footer-copy i,
    .td-footer-outer-wrapper a:hover,
    .td-footer-outer-wrapper .td_social_type .td_social_button a:hover,
    .td_block_authors .td_authors_wrap:hover .td-authors-name a,
    .td_block_authors .td_authors_wrap.td-active .td-authors-name a,
    .td_block_authors .td-authors-url a:hover,
    .widget .current-menu-item a,
    .td-tags span,
    .archive .widget_archive .current,
    .archive .widget_archive .current a,
    .widget_categories li:hover > a,
    .widget_search input[type=submit]:hover,
    .td-read-more:hover,
    .td_outlined_btn,
    .global-block-template-14 .td_block_related_posts .td-next-prev-wrap a:hover,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
    .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
    .woocommerce-account .woocommerce-MyAccount-navigation a:hover,
    .woocommerce a.added_to_cart:hover,
    #bbpress-forums li.bbp-header .bbp-reply-content span a:hover,
    #bbpress-forums .bbp-forum-freshness a:hover,
    #bbpress-forums .bbp-topic-freshness a:hover,
    #bbpress-forums .bbp-forums-list li a:hover,
    #bbpress-forums .bbp-forum-title:hover,
    #bbpress-forums .bbp-topic-permalink:hover,
    #bbpress-forums .bbp-topic-started-by a:hover,
    #bbpress-forums .bbp-topic-started-in a:hover,
    #bbpress-forums .bbp-body .super-sticky li.bbp-topic-title .bbp-topic-permalink,
    #bbpress-forums .bbp-body .sticky li.bbp-topic-title .bbp-topic-permalink,
    .widget_display_replies .bbp-author-name,
    .widget_display_topics .bbp-author-name {
      color: @theme_color;
    }
    
    .td-related-title a:hover,
    .td-related-title .td-cur-simple-item,
    .td-post-comments a:hover,
    .td_mod_related_posts:hover .entry-title > a {
      color: @theme_color !important;   
    }

    input[type=submit]:hover,
    .td-theme-wrap .dropcap,
    .entry-title:after,
    .td-post-category:hover,
    .block-title:after,
    .td-wrapper-pulldown-filter .td-pulldown-filter-list:before,
    .td-subcat-filter .td-subcat-dropdown ul:before,
    .td_block_author .td-author-name:after,
    .td_block_template_5 .td-block-title:after,
    .td_block_template_9 .td-block-title:after,
    .td_block_template_15 .td-block-title:before,
    .global-block-template-3 .td-related-title .td-cur-simple-item,
    .global-block-template-3 .td-related-title a:hover,
    .global-block-template-4 .td-related-title .td-cur-simple-item,
    .global-block-template-4 .td-related-title a:hover,
    .td-a-rec-id-sidebar .td-adspot-title:after,
    .td-g-rec-id-sidebar .td-adspot-title:after,
    .single-post .page-nav > div,
    .td-category a:hover,
    .td-post-source-via:before,
    .td-author-name:after,
    .td-related-title .td-cur-simple-item:after,
    .td-comments-title-wrap h4:after,
    .comment-reply-title:after,
    .page-nav .current,
    .td-404-title:after,
    .td-rating-bar-wrap div,
    .widget_calendar #today,
    .td_social_type:hover .td-sp:before,
    .td-smart-list-button:hover,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before,
    .td-category-header .entry-category a:hover,
    .td_3D_btn,
    .td_shadow_btn,
    .td_default_btn,
    .td_round_btn, 
    .td_outlined_btn:hover,
    .td-theme-wrap .sf-menu .td-mega-menu .td-post-category:hover,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active :after,
    .single-product .product .related h2:not(.woocommerce-loop-product__title):after,
    .single-product .product .upsells h2:after,
    .woocommerce-cart .woocommerce .cross-sells h2:after,
    .woocommerce .product a.button:hover,
    .woocommerce .product #respond input#submit:hover,
    .woocommerce .checkout input#place_order:hover,
    .woocommerce .woocommerce.widget .button:hover,
    .single-product .product .summary .cart .button:hover,
    .woocommerce-cart .woocommerce .shipping-calculator-form .button:hover,
    .woocommerce-checkout .woocommerce input.button:hover,
    .woocommerce-page .woocommerce a.button:hover,
    .woocommerce-account div.woocommerce .button:hover,
    .td-footer-wrapper .widget_product_search input[type=\"submit\"]:hover,
    .woocommerce-cart .woocommerce table.cart .button:hover, .woocommerce-cart .woocommerce .shipping-calculator-form .button:hover, 
    #bbpress-forums button:hover,
    .bbp_widget_login .button:hover,
    #bbpress-forums .bbp-pagination .current,
    #bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a {
      background-color: @theme_color;
    }
    
    .woocommerce .woocommerce-message .button:hover,
    .woocommerce .woocommerce-error .button:hover,
    .woocommerce .woocommerce-info .button:hover {
    background-color: @theme_color !important;
    }
    
    .woocommerce.widget.widget_layered_nav_filters ul li a {
        background: none repeat scroll 0 0 @theme_color !important;
    }
    
    .woocommerce .product .onsale,
    .woocommerce.widget .ui-slider .ui-slider-handle {
        background: none @theme_color;
    }
    
    @media (min-width: 1019px) {
      .td-big-grids .td-big-grid-post:hover .td-post-category {
        background-color: @theme_color;
      }
    }
    
    .td-theme-wrap .td_quote_box,
    .widget_calendar #today,
    .td-tags span,
    .widget_categories li:hover > a span:before,
    .td_outlined_btn,
     #bbpress-forums .bbp-pagination .current {
      border-color: @theme_color;
    }
    
    .global-block-template-4 .td-related-title .td-cur-simple-item:before {
        border-color: @theme_color transparent transparent transparent;
    }
    
    
    /* BACKGROUND COLOR */
    /* @site_background_color */
    body {
      background-color: @site_background_color;
    }


    /* BLOCK HEADER TEXT COLOR */
    /* @text_header_color */
    div .block-title label,
    div .block-title span,
    div .block-title a,
    .td-theme-wrap div .td-block-title label,
    .td-theme-wrap div .td-block-title span,
    .td-theme-wrap div .td-block-title a,
    .td_block_template_6 .td-block-title:after,
    .td-footer-wrapper div .td_block_template_6 .td-block-title:after,
    .td_block_template_13 .td-block-title > span,
    .td_block_template_13 .td-block-title > a,
    .td_block_template_14 .td-wrapper-pulldown-filter .td-pulldown-filter-display-option,
    .td_block_template_14 .td-wrapper-pulldown-filter .td-pulldown-filter-display-option i,
    .td_block_template_14 .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td_block_template_14 .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,
    div .td-trending-now-title {
      color: @text_header_color;
    }
    .block-title:after {
      background-color: @text_header_color;
    }
    .td_block_wrap .td-related-title .td-cur-simple-item,
    .td-related-title a:hover {
      color: @theme_color !important;
    }
    .global-block-template-3 .td-related-title .td-cur-simple-item,
    .global-block-template-3 .td-related-title a:hover,
    .global-block-template-4 .td-related-title .td-cur-simple-item,
    .global-block-template-4 .td-related-title a:hover {
      color: @text_header_color !important;
    }

    
    /* BLOCK HEADER BACKGROUND COLOR */
    /* @header_color */
    .block-title label,
    .block-title span,
    .block-title a,
    .td_block_template_3 .td-block-title > *,
    .td_block_template_4 .td-block-title > *,
    .td_block_template_5 .td-block-title:after,
    .td_block_template_7 .td-block-title > *,
    .td_block_template_9 .td-block-title:after,
    .td_block_template_10 .td-block-title::before,
    .td_block_template_11 .td-block-title::before,
    .td_block_template_11 .td-block-title::after,
    .td_block_template_14 .td-block-title,
    .td_block_template_15 .td-block-title:before,
    .td_block_template_17 .td-block-title:before,
    .td-trending-now-title,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before {
      background-color: @header_color;
    }
    .td_block_template_17 .td-block-title:after {
      border-color: @header_color;
    }
    .td_block_template_4 .td-block-title > *:before,
    .td_block_template_17 .td-block-title > *:after {
      border-color: @header_color transparent transparent transparent;
    }
    .block-title label,
    .block-title span,
    .block-title a,
    .td-trending-now-title,
    .td-weather-information:before,
    .td-weather-week:before {
      color: #fff;
    }
    .block-title label,
    .block-title span,
    .block-title a {
      margin: 0;
      padding: 8px 10px;
    }
    .block-title:after {
      display: none;
    }
    .td-wrapper-pulldown-filter .td-pulldown-filter-list {
      margin-top: -2px;
    }
    .block-title {
      font-size: 13px;
      font-weight: 500;
      margin-bottom: 22px;
    }


    /* ------------------------------------------------------ */
    /* Top Menu Colors */
    
    /* TOP MENU BACKGROUND COLOR */
    /* @top_menu_color */
    body .td-header-wrap .td-header-top-menu {
      background-color: @top_menu_color;
    }
    
    /* TOP MENU TEXT COLOR */
    /* @top_menu_text_color */
    .td-header-wrap .td-header-top-menu,
    .td-header-wrap .td-header-top-menu a,
    .td-header-wrap .td-header-sp-top-widget .td-icon-search {
      color: @top_menu_text_color;
    }
    .td-header-wrap .td-header-top-menu:before,
    .td-header-wrap .td-header-sp-top-widget .td-search-btns-wrap:before,
    .td-header-wrap .td-header-sp-top-widget .td-social-icon-wrap:first-of-type:before,
    .td-header-wrap .td-header-sp-top-widget .td-social-icon-wrap:after {
        background-color: @top_menu_text_color;
    }
    
    /* TOP MENU TEXT HOVER COLOR */
    /* @top_menu_text_hover_color */
    .td-header-wrap .td-header-top-menu .top-header-menu a:hover,
    .td-header-wrap .td-header-top-menu .top-header-menu .current-menu-item > a,
    .td-header-wrap .td-header-top-menu .top-header-menu .current-menu-ancestor > a,
    .td-header-wrap .td-header-top-menu .top-header-menu .current-category-ancestor > a,
    .td-header-wrap .td-header-sp-top-widget .td-icon-search:hover,
    .td-header-wrap .td-icon-search {
      color: @top_menu_text_hover_color;
    }
    
    /* TOP MENU SOCIAL ICONS COLOR */
    /* @top_social_icons_color */
    .td-header-wrap .td-header-sp-top-widget .td-social-icon-wrap a {
      color: @top_social_icons_color;
    }
    
    /* TOP MENU SOCIAL ICONS HOVER COLOR */
    /* @top_social_icons_hover_color */
    .td-header-wrap .td-header-sp-top-widget .td-social-icon-wrap:hover i {
      color: @top_social_icons_hover_color;
    }

    /* TOP BORDER COLOR */
    /* @top_border_color */
    .td-header-wrap .td-header-top-menu:before,
    .td-header-wrap .td-header-sp-top-widget .td-search-btns-wrap:before,
    .td-header-wrap .td-header-sp-top-widget .td-social-icon-wrap:first-of-type:before,
    .td-header-wrap .td-header-sp-top-widget .td-social-icon-wrap:after {
      background-color: @top_border_color;
      opacity: 1;
    }


    /* ------------------------------------------------------ */
    /* Main Menu Colors */
    /* MENU BACKGROUND COLOR */
    /* @menu_color */
    .td-theme-wrap .td-header-menu-wrap {
      background-color: @menu_color;
    }
    .td-theme-wrap .td-header-menu-wrap-full {
      background-color: transparent;
    }
    .td-header-menu-wrap:before,
    .td-header-menu-wrap:after {
      display: none;
    }
    .sf-menu ul ul {
      margin-top: -15px;
      padding: 15px 0;
    }

    /* @menu_sticky_color */
    .td-theme-wrap .td-header-menu-wrap.td-affix {
        background-color: @menu_sticky_color;
    }


    /* MENU TEXT COLOR */
    /* @menu_text_color */
    .sf-menu > li > a,
    .td-header-menu-social .td-social-icon-wrap a,
    .td-header-menu-search #td-header-search-button .td-icon-search {
      color: @menu_text_color;
    }
    .td-header-menu-social + .td-header-menu-search .td-search-btns-wrap a:before {
      background-color: @menu_text_color;
    }
    
    /* MENU ACTIVE & HOVER COLOR */
    /* @submenu_hover_color */
    .sf-menu > li:hover > a,
    .sf-menu > .sfHover > a,
    .sf-menu > .current-menu-item > a,
    .sf-menu > .current-menu-ancestor > a,
    .sf-menu > .current-category-ancestor > a,
    .td-theme-wrap .sf-menu ul .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu ul .sfHover > a,
    .td-theme-wrap .sf-menu ul .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-category-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-menu-item > a,
    .td_mega_menu_sub_cats .cur-sub-cat,
    .td_module_mega_menu:hover .entry-title a,
    .td-header-main-menu .td-search-btns-wrap:hover .td-icon-search {
      color: @submenu_hover_color;
    }
    .td-mega-menu-page .wpb_content_element ul li a:hover {
      color: @submenu_hover_color !important;
    }
    .td-header-main-menu .td-post-category:hover {
      background-color: @submenu_hover_color;
    }

    /* MENU BORDER COLOR */
    /* @menu_border_color */
    @media (min-width: 768px) {
        .td-header-menu-wrap:before,
        .td-header-menu-wrap:after {
          background-color: @menu_border_color;
          opacity: 1;
          display: block;
        }
    }
    

    /* ------------------------------------------------------ */
    /* Sub Menu Colors */
    /* @sub_menu_background */
    .td-theme-wrap .sf-menu .td-normal-menu ul {
        background-color: @sub_menu_background;
    }

    /* @sub_menu_text_color */
    .td-theme-wrap .sf-menu .td-normal-menu .td-menu-item > a {
        color: @sub_menu_text_color;
    }

    /* @sub_menu_hover_color */
    .td-theme-wrap .sf-menu .td-normal-menu .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu .td-normal-menu .sfHover > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-category-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-item > a {
        color: @sub_menu_hover_color;
    }

    /* @sub_menu_hover_background */
    .td-theme-wrap .sf-menu .td-normal-menu .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu .td-normal-menu .sfHover > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-category-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-item > a {
        background-color: @sub_menu_hover_background;
    }

    /* @sub_menu_border_color */
    .td-theme-wrap .sf-menu ul:after {
        background-color: @sub_menu_border_color;
    }


    /* ------------------------------------------------------ */
    /* MEGA MENU COLORS */
    /* @mega_menu_background */
    .td-theme-wrap .td-mega-menu ul,
    .td-theme-wrap .td_block_mega_menu .td-next-prev-wrap > a {
        background-color: @mega_menu_background;
    }
    /* @mega_menu_color */
    .td-theme-wrap .td_module_mega_menu .entry-title a,
    .td-theme-wrap .td_mega_menu_sub_cats a,
    .td-theme-wrap .td-mega-span .td-item-details > span,
    .td-theme-wrap .td-mega-span .td-item-details > div,
    .td-theme-wrap .td_block_mega_menu .td-next-prev-wrap > a {
        color: @mega_menu_color;
    }
    @media (min-width: 1141px) {
        .td_stretch_content .td_block_mega_menu:before {
            background-color: @mega_menu_subcategories_background;
        }
    }
    .td-theme-wrap .td_mega_menu_sub_cats .mega-menu-cat-all:before {
        background-color: @mega_menu_subcategories_border;
        opacity: 0.2;
    }
    /* @mega_menu_subcategories_border */
    .td-theme-wrap .td-mega-menu ul:after {
        background-color: @mega_menu_subcategories_border;
    }
    /* @mega_menu_accent_color */
    .td-theme-wrap .td_module_mega_menu:hover .td-item-details .entry-title a,
    .td-theme-wrap .td_mega_menu_sub_cats .block-mega-child-cats .cur-sub-cat,
    .td-theme-wrap .td_block_mega_menu .td-next-prev-wrap a:hover {
        color: @mega_menu_accent_color;
    }
    .td-theme-wrap .sf-menu .td-mega-menu .td-post-category:hover {
        background-color: @mega_menu_accent_color;
    }


    /* ------------------------------------------------------ */
    /* LIVE SEARCH COLORS */
    /* @live_search_background */
    .td-theme-wrap .td-header-menu-search .td-search-box-wrap,
    .td-theme-wrap #td-header-search,
    .td-header-wrap .td-drop-down-search .td-aj-search-results {
        background-color: @live_search_background;
    }
    /* @live_search_border_color */
    .td-theme-wrap .header-search-wrap .td-aj-search-results,
    .td-theme-wrap .td-header-menu-search .td-drop-down-search #td-header-search,
    .td-theme-wrap .td-header-menu-search .td-drop-down-search .btn {
        border-color: @live_search_border_color !important;
    }
    .td-theme-wrap .td-header-menu-search .td-search-box-wrap,
    .td-theme-wrap .td-header-menu-search .td-drop-down-search .td-aj-search-results {
        -webkit-box-shadow: inset 0 0 0 1px @live_search_border_color;
        -moz-box-shadow: inset 0 0 0 1px @live_search_border_color;
        box-shadow: inset 0 0 0 1px @live_search_border_color;
    }
    /* @live_search_text_color */
    .td-theme-wrap .td-aj-search-results .td-module-title a,
    .td-theme-wrap .td-aj-search-results .td-post-date,
    .td-theme-wrap #td-header-search,
    .td-theme-wrap .td-header-menu-search .td-drop-down-search .btn,
    .td-theme-wrap .td-header-menu-search .result-msg a {
        color: @live_search_text_color;
    }
    .td-theme-wrap .td-aj-search-results .td_module_wrap:hover .entry-title a,
    .td-theme-wrap .header-search-wrap .result-msg a:hover,
    .td-theme-wrap .td-header-menu-search .td-drop-down-search .btn:hover {
        color: #42bdcd;
    }
    /* @live_search_accent_color */
    .td-theme-wrap .td-header-menu-search .td-drop-down-search .btn:hover,
    .td-theme-wrap .td-aj-search-results .td_module_wrap:hover .entry-title a,
    .td-theme-wrap .td-header-menu-search .result-msg a {
        color: @live_search_accent_color !important;
    }
    .td-theme-wrap .td-aj-search-results .td_module_wrap .td-post-category:hover {
        background-color: @live_search_accent_color;
    }


    /* ------------------------------------------------------ */
    /* MOBILE MENU / MOBILE SEARCH COLORS */
    /* @mobile_menu_color */
    @media (max-width: 767px) {
        .td-header-wrap .td-header-menu-wrap {
            background-color: @mobile_menu_color !important;
        }
    }

    /* @mobile_icons_color */
    @media (max-width: 767px) {
        #td-top-mobile-toggle i,
        .td-header-menu-search i {
            color: @mobile_icons_color !important;
        }
    }

    /* @mobile_background_color */
    .td-menu-background:before,
    .td-search-background:before {
        background: @mobile_background_color;
    }
    
    /* @mobile_gradient_one_mob */
    .td-menu-background:before,
    .td-search-background:before {
        background: @mobile_gradient_one_mob;
        background: -moz-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, @mobile_gradient_one_mob), color-stop(100%, @mobile_gradient_two_mob));
        background: -webkit-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: -o-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobileu_gradient_two_mob 100%);
        background: -ms-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: linear-gradient(to bottom, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='@mobile_gradient_one_mob', endColorstr='@mobile_gradient_two_mob', GradientType=0 );
    }

    /* @mobile_text_active_color */
    .td-mobile-content .current-menu-item > a,
    .td-mobile-content .current-menu-ancestor > a,
    .td-mobile-content .current-category-ancestor > a,
    #td-mobile-nav .td-menu-login-section a:hover,
    #td-mobile-nav .td-register-section a:hover,
    #td-mobile-nav .td-menu-socials-wrap a:hover i,
    .td-search-close a:hover i {
        color: @mobile_text_active_color;
    }

    /* @mobile_button_background_mob */
    #td-mobile-nav .td-register-section .td-login-button,
    .td-search-wrap-mob .result-msg a {
        background-color: @mobile_button_background_mob;
    }

    /* @mobile_button_color_mob */
    #td-mobile-nav .td-register-section .td-login-button,
    .td-search-wrap-mob .result-msg a {
        color: @mobile_button_color_mob;
    }

    /* @mobile_text_color */
    .td-mobile-content li a,
    .td-mobile-content .td-icon-menu-right,
    .td-mobile-content .sub-menu .td-icon-menu-right,
    #td-mobile-nav .td-menu-login-section a,
    #td-mobile-nav .td-menu-logout a,
    #td-mobile-nav .td-menu-socials-wrap .td-icon-font,
    .td-mobile-close .td-icon-close-mobile,
    .td-search-close .td-icon-close-mobile,
    .td-search-wrap-mob,
    .td-search-wrap-mob #td-header-search-mob,
    #td-mobile-nav .td-register-section,
    #td-mobile-nav .td-register-section .td-login-input,
    #td-mobile-nav label,
    #td-mobile-nav .td-register-section i,
    #td-mobile-nav .td-register-section a,
    #td-mobile-nav .td_display_err,
    .td-search-wrap-mob .td_module_wrap .entry-title a,
    .td-search-wrap-mob .td_module_wrap:hover .entry-title a,
    .td-search-wrap-mob .td-post-date {
        color: @mobile_text_color;
    }
    .td-search-wrap-mob .td-search-input:before,
    .td-search-wrap-mob .td-search-input:after,
    #td-mobile-nav .td-menu-login-section .td-menu-login span {
        background-color: @mobile_text_color;
    }
    #td-mobile-nav .td-menu-logout a:before {
        border-color: @mobile_text_color;
    }

    #td-mobile-nav .td-register-section .td-login-inputs:after {
        background-color: @mobile_text_color;
    }

    /* @mobile_background_image */
    .td-menu-background,
    .td-search-background {
        background-image: url('@mobile_background_image');
    }

    /* @mobile_background_repeat */
    .td-menu-background,
    .td-search-background {
        background-repeat: @mobile_background_repeat;
    }

    /* @mobile_background_size */
    .td-menu-background,
    .td-search-background {
        background-size: @mobile_background_size;
    }

    /* @mobile_background_position */
    .td-menu-background,
    .td-search-background {
        background-position: @mobile_background_position;
    }


    /* @login_text_color */
    .white-popup-block,
    .mfp-content .td-login-panel-title,
    .mfp-content .td-login-inputs,
    .mfp-content .td-login-input,
    .mfp-content .td-login-info-text,
    .mfp-content #register-link,
    .mfp-content #login-form .mfp-close:before,
    .mfp-content .td-back-button i {
        color: @login_text_color;
    }
    .mfp-content .td-login-inputs:after {
        background-color: @login_text_color;
    }
    .mfp-content #register-link:before {
        border-color: @login_text_color;
    }
    /* @login_button_background */
    .mfp-content .td-login-button {
        background-color: @login_button_background;
    }
    /* @login_button_color */
    .mfp-content .td-login-button {
        color: @login_button_color;
    }
    /* @login_hover_background */
    .mfp-content .td-login-button:active,
    .mfp-content .td-login-button:hover {
        background-color: @login_hover_background;
    }
    /* @login_hover_color */
    .mfp-content .td-login-button:active,
    .mfp-content .td-login-button:hover,
    .mfp-content .td-login-info-text a:hover{
        color: @login_hover_color;
    }
    /* @login_gradient_one */
    .white-popup-block:after {
        background: @login_gradient_one;
        background: -moz-linear-gradient(45deg, @login_gradient_one 0%, @login_gradient_two 100%);
        background: -webkit-gradient(left bottom, right top, color-stop(0%, @login_gradient_one), color-stop(100%, @login_gradient_two));
        background: -webkit-linear-gradient(45deg, @login_gradient_one 0%, @login_gradient_two 100%);
        background: -o-linear-gradient(45deg, @login_gradient_one 0%, @login_gradient_two 100%);
        background: -ms-linear-gradient(45deg, @login_gradient_one 0%, @login_gradient_two 100%);
        background: linear-gradient(45deg, @login_gradient_one 0%, @login_gradient_two 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='@login_gradient_one', endColorstr='@login_gradient_two', GradientType=0 );
    }


    /* ------------------------------------------------------ */
    /* HEADER COLORS */

    /* @header_wrap_color */
    .td-full-layout .td-header-wrap,
    body .td-header-logo-wrap {
      background-color: @header_wrap_color;
    }
    
    /* TEXT LOGO COLOR */
    /* @text_logo_color */
    .td-header-wrap .td-logo-text-container .td-logo-text {
        color: @text_logo_color;
    }

    /* TEXT LOGO TAGLINE COLOR */
    /* @text_logo_tagline_color */
    .td-header-wrap .td-logo-text-container .td-tagline-text {
        color: @text_logo_tagline_color;
    }
    
   
    /* ------------------------------------------------------ */
    /* HEADER BACKGROUND */
    
    /* @header_background_image */
    .td-header-bg:before {
        background-image: url('@header_background_image');
    }
    .td-header-wrap .td-header-top-menu,
    .td-header-logo-wrap {
        background-color: transparent;
    }

    /* @header_background_repeat */
    .td-header-bg:before {
        background-repeat: @header_background_repeat;
    }

    /* @header_background_size */
    .td-header-bg:before {
        background-size: @header_background_size;
    }

    /* @header_background_position */
    .td-header-bg:before {
        background-position: @header_background_position;
    }

    /* @header_background_opacity */
    .td-header-bg:before {
        opacity: @header_background_opacity;
    }


    /* ------------------------------------------------------ */
    /* POSTS COLORS */
    
    /* POST TITLE COLOR */
    /* @post_title_color */
    .td-post-header .entry-title {
      color: @post_title_color;
    }
    .td-post-header .entry-title:after {
      background-color: @post_title_color;
    }
    
    /* POST AUTHOR NAME COLOR */
    /* @post_author_name_color */
    .td-post-header .td-post-author-name a {
      color: @post_author_name_color;
    }
    
    /* POST TEXT COLOR */
    /* @post_content_color */
    .td-post-content,
    .td-post-content p {
    	color: @post_content_color;
    }

    /* POST H COLOR */
    /* @post_h_color */
    .td-post-content h1,
    .td-post-content h2,
    .td-post-content h3,
    .td-post-content h4,
    .td-post-content h5,
    .td-post-content h6 {
    	color: @post_h_color;
    }

    /* POST BLOCKQUOTE COLOR */
    /* @post_blockquote_color */
    .post blockquote p,
    .page blockquote p {
    	color: @post_blockquote_color;
    }
    .post .td_quote_box,
    .page .td_quote_box {
        border-color: @post_blockquote_color;
    }


    /* ------------------------------------------------------ */
    /* PAGES COLORS */
    
    /* PAGE TITLE COLOR */
    /* @page_title_color */
    .td-page-title,
     .woocommerce-page .page-title {
    	color: @page_title_color;
    }
    
    .td-page-title:after {
        background-color: @page_title_color; 
    }

    /* PAGE TEXT COLOR */
    /* @page_content_color */
    .td-page-content,
    .td-page-content p,
    .td-page-content .td_block_text_with_title,
     .woocommerce-page .page-description > p {
    	color: @page_content_color;
    }

    /* PAGE H COLOR */
    /* @page_h_color */
    .td-page-content h1,
    .td-page-content h2,
    .td-page-content h3,
    .td-page-content h4,
    .td-page-content h5,
    .td-page-content h6 {
    	color: @page_h_color;
    }
    .td-page-content .widgettitle {
        color: #fff;
    }


    /* ------------------------------------------------------ */
    /* FOOTER COLORS */
    
    /* FOOTER BACKGROUND COLOR */
    /* @footer_color */
    .td-footer-outer-wrapper {
      background-color: @footer_color;
    }
    
    /* FOOTER TEXT COLOR */
    /* @footer_text_color */
    .td-footer-wrapper,
    .td-footer-wrapper .block-title a,
    .td-footer-wrapper .block-title span,
    .td-footer-wrapper .block-title label,
    .td-footer-wrapper .rss-date,
    .td-footer-wrapper cite,
    .td-footer-outer-wrapper a,
    .td-footer-outer-wrapper .td_social_type .td_social_button a,
    .footer-social-wrap .td-social-icon-wrap a,
    .footer-social-wrap .td-social-icon-wrap a span,
    .td-sub-footer-copy {
      color: @footer_text_color;
    }
    .td-footer-wrapper .td-post-category {
      color: #fff;
    }
    .td-subfooter-menu li:after,
    .footer-social-wrap:after,
    .td-subfooter-menu:after {
      background-color: @footer_text_color;
    }
    .td-footer-outer-wrapper .widget_categories li span:before,
    .td-footer-outer-wrapper .td_social_type .td_social_button a,
    .td-footer-outer-wrapper .td-social-style2 .td_social_type,
    .td-footer-outer-wrapper .td-social-style2 .td_social_type .td-sp:before,
    .td-footer-outer-wrapper .td-social-style8 .td_social_type .td-social-box,
    .td-social-style-2 .td-icon-font:after {
      border-color: @footer_text_color;
    }

    /* FOOTER WIDGET HEADER TEXT COLOR */
    /* @footer_widget_text_color */
    .td-footer-wrapper .block-title a,
    .td-footer-wrapper .block-title span,
    .td-footer-wrapper .block-title label,
    .td-footer-wrapper .td_block_wrap .td-block-title label,
    .td-footer-wrapper .td_block_wrap .td-block-title span,
    .td-footer-wrapper .td_block_wrap .td-block-title a,
    .td-footer-wrapper .td_block_template_6 .td-block-title:after,
    .td-footer-wrapper div .td_block_template_6 .td-block-title:after,
    .td-footer-wrapper .td_block_template_13 .td-block-title > span,
    .td-footer-wrapper .td_block_template_13 .td-block-title > a,
    .td-footer-wrapper .td_block_template_14 .td-wrapper-pulldown-filter .td-pulldown-filter-display-option,
    .td-footer-wrapper .td_block_template_14 .td-wrapper-pulldown-filter .td-pulldown-filter-display-option i,
    .td-footer-wrapper .td_block_template_14 .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-footer-wrapper .td_block_template_14 .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i {
      color: @footer_widget_text_color;
    }
    
    .td-footer-wrapper .block-title:after {
      background-color: @footer_widget_text_color;
    }


    /* ------------------------------------------------------ */
    /* SUBFOOTER COLORS */
    
    /* SUBFOOTER BACKGROUND COLOR */
    /* @footer_bottom_color */
    .td-sub-footer-container {
      background-color: @footer_bottom_color;
    }
    
    /* SUBFOOTER TEXT COLOR */
    /* @footer_bottom_text_color */
    .td-sub-footer-container,
    .td-subfooter-menu li a,
    .td-sub-footer-copy {
      color: @footer_bottom_text_color;
    }
    .td-subfooter-menu li:after {
      background-color: @footer_bottom_text_color;
    }
    
    /* SUBFOOTER MENU HOVER COLOR */
    /* @footer_bottom_hover_color */
    .td-subfooter-menu .menu-item > a:hover,
    .td-subfooter-menu .sfHover > a,
    .td-subfooter-menu .current-menu-ancestor > a,
    .td-subfooter-menu .current-category-ancestor > a,
    .td-subfooter-menu .current-menu-item > a,
    .td-sub-footer-copy i {
      color: @footer_bottom_hover_color;
    }


    /* ------------------------------------------------------ */
    /* FOOTER BACKGROUND */
    
    /* @footer_background_image */
    .td-footer-outer-wrapper:before {
        background-image: url('@footer_background_image');
    }

    /* @footer_background_repeat */
    .td-footer-outer-wrapper:before {
        background-repeat: @footer_background_repeat;
    }

    /* @footer_background_size */
    .td-footer-outer-wrapper:before {
        background-size: @footer_background_size;
    }

    /* @footer_background_position */
    .td-footer-outer-wrapper:before {
        background-position: @footer_background_position;
    }

    /* @footer_background_opacity */
    .td-footer-outer-wrapper:before {
        opacity: @footer_background_opacity;
    }


    /* ------------------------------------------------------ */
    /* LOGIN MODAL BACKGROUND */

    /* @login_background_image */
    .white-popup-block:before {
        background-image: url('@login_background_image');
    }

    /* @login_background_repeat */
    .white-popup-block:before {
        background-repeat: @login_background_repeat;
    }

    /* @login_background_size */
    .white-popup-block:before {
        background-size: @login_background_size;
    }

    /* @login_background_position */
    .white-popup-block:before {
        background-position: @login_background_position;
    }

    /* @login_background_opacity */
    .white-popup-block:before {
        opacity: @login_background_opacity;
    }
    
    
    


    /* ------------------------------------------------------ */
    /* FONTS */
    
    /* @top_menu */
    .top-header-menu > li > a,
    .td-weather-top-widget .td-weather-now .td-big-degrees,
    .td-weather-top-widget .td-weather-header .td-weather-city,
    .top-header-menu .td-icon-logout,
    .td-header-sp-top-menu .td_data_time,
    .td-header-sp-top-widget .td-search-btns-wrap i,
    .td-header-sp-top-widget .td-social-icon-wrap i {
       @top_menu
    }
    /* @top_sub_menu */
    .top-header-menu .sub-menu a {
    	@top_sub_menu
    }
    /* @main_menu */
    .td-theme-wrap .sf-menu > li > a,
    .td-header-menu-social .td-social-icon-wrap i,
    .td-theme-wrap .td-header-menu-search #td-header-search-button .td-icon-search {
        @main_menu
    }
    /* @top-menu-height */
    .td-header-sp-top-menu,
    #td-outer-wrap .td-header-sp-top-widget,
    .top-header-menu > li {
        line-height: @top-menu-height
    }

    /* @main-menu-height */
    .td-header-logo-inmenu .td-main-logo img,
    .td-header-logo-inmenu .td-header-sp-logo {
        max-height: @main-menu-height
    }
    .td-header-logo-inmenu .td-header-sp-logo a {
        line-height: @main-menu-height
    }

    /* @main_sub_menu */
    .sf-menu ul .td-menu-item a {
        @main_sub_menu
    }
	/* @mega_menu */
    .td-mega-span .entry-title {
        @mega_menu
    }
    /* @mega_menu_categ */
    .td_mega_menu_sub_cats .block-mega-child-cats a {
        @mega_menu_categ
    }
    
    
    /* @blocks_title */
    .td-block-title > label,
    .td-block-title > span,
    .td-block-title > a,
    .block-title > label,
    .block-title > span,
    .block-title > a,
    .widgettitle,
    .td-related-title a {
        @blocks_title
    }
    /* @blocks_author */
    .td_module_wrap .td-post-author-name a {
        @blocks_author
    }
    /* @blocks_date */
    .td_module_wrap .td-post-date .entry-date {
        @blocks_date
    }
    /* @blocks_comment */
    .td-module-comments a {
        @blocks_comment
    }
    /* @blocks_category */
    .td-big-grids .td-post-category,
    .td_module_wrap .td-post-category {
        @blocks_category
    }
    /* @blocks_filter */
    .td_block_wrap .td-wrapper-pulldown-filter {
        @blocks_filter
    }
    /* @blocks_excerpt */
    .td-excerpt {
        @blocks_excerpt
    }
    
    
    /* modules_general */
	.td_module_wrap .entry-title {
		@modules_general
	}
	/* @module_1 */
    .td_module_1 .entry-title  {
    	@module_1
    }
    /* @module_2 */
    .td_module_2 .entry-title  {
    	@module_2
    }
    /* @module_3 */
    .td_module_3 .entry-title  {
    	@module_3
    }
    /* @module_4 */
    .td_module_4 .entry-title  {
    	@module_4
    }
    /* @module_5 */
    .td_module_5 .entry-title  {
    	@module_5
    }
    /* @module_6 */
    .td_module_6 .entry-title  {
    	@module_6
    }
    /* @module_mx2 */
    .td_module_mx2 .entry-title {
    	@module_mx2
    }
    
    
    /* big grids modules */
    /* @module_mx1 */
    .td_module_mx1 .entry-title {
        @module_mx1
    }
    /* @module_mx3 */
    .td_module_mx3 .entry-title {
        @module_mx3
    }
    /* @module_mx4 */
    .td_module_mx4 .entry-title,
    .td_block_big_grid_3.td-grid-style-1 .entry-title {
        @module_mx4
    }
    
    
    /* mobile_general */
	#td-mobile-nav,
	#td-mobile-nav .wpb_button,
	.td-search-wrap-mob {
		@mobile_general
	}
    /* @mobile_menu */
    .td-mobile-content li a {
        @mobile_menu
    }
    /* @mobile_sub_menu */
    .td-mobile-content .sub-menu a {
        @mobile_sub_menu
    }
    
    
    /* post_general */
	.post .td-post-header .entry-title {
		@post_general
	}
    /* @post_title */
    .td-post-template-default .td-post-header .entry-title {
        @post_title
    }
    /* @post_content */
    .td-post-content p,
    .td-post-content {
        @post_content
    }
    /* @post_blockquote */
    .post blockquote p,
    .page blockquote p,
    .td-post-text-content blockquote p {
        @post_blockquote
    }
    /* @post_box_quote */
    .post .td_quote_box p,
    .page .td_quote_box p {
        @post_box_quote
    }
    /* @post_pull_quote */
    .post .td_pull_quote p,
    .page .td_pull_quote p {
        @post_pull_quote
    }
    /* @post_lists */
    .td-post-content li {
        @post_lists
    }
    /* @post_h1 */
    .td-post-content h1 {
        @post_h1
    }
    /* @post_h2 */
    .td-post-content h2 {
        @post_h2
    }
    /* @post_h3 */
    .td-post-content h3 {
        @post_h3
    }
    /* @post_h4 */
    .td-post-content h4 {
        @post_h4
    }
    /* @post_h5 */
    .td-post-content h5 {
        @post_h5
    }
    /* @post_h6 */
    .td-post-content h6 {
        @post_h6
    }
    /* @post_category */
    .post .td-category a {
        @post_category
    }
    /* @post_author */
    .post header .td-post-author-name,
    .post header .td-post-author-name a {
        @post_author
    }
    /* @post_date */
    .post header .td-post-date .entry-date {
        @post_date
    }
    /* @post_comment */
    .post header .td-post-views-text,
    .post header .td-post-views span,
    .post header .td-post-comments {
        @post_comment
    }
    /* @via_source_tag */
    .post .td-post-source-tags a,
    .post .td-post-source-tags span {
        @via_source_tag
    }
    /* @post_next_prev_text */
    .post .td-post-next-prev-content span {
        @post_next_prev_text
    }
    /* @post_next_prev */
    .post .td-post-next-prev-content a {
        @post_next_prev
    }
    /* @box_author_name */
    .post .author-box-wrap .td-author-name a {
        @box_author_name
    }
    /* @box_author_url */
    .post .author-box-wrap .td-author-url a {
        @box_author_url
    }
    /* @box_author_description */
    .post .author-box-wrap .td-author-description {
        @box_author_description
    }
    /* @post_related */
    .td_block_related_posts .entry-title a {
        @post_related
    }
    /* @post_share */
    .post .td-post-share-title {
        @post_share
    }
    /* @post_image_caption */
	.wp-caption-text,
	.wp-caption-dd {
		@post_image_caption
	}
    /* @post_subtitle_small */
    .td-post-template-default .td-post-sub-title {
        @post_subtitle_small
    }
    
    
    /* @page_title */
    .td-page-title,
    .td-category-header .entry-title,
    .woocommerce-page .page-title {
    	@page_title
    }
    /* @page_content */
    .td-page-content,
    .td-page-content p,
    .td-page-content .td_block_text_with_title,
    .woocommerce-page .page-description > p {
    	@page_content
    }
    /* @page_h1 */
    .td-page-content h1 {
    	@page_h1
    }
    /* @page_h2 */
    .td-page-content h2 {
    	@page_h2
    }
    /* @page_h3 */
    .td-page-content h3 {
    	@page_h3
    }
    /* @page_h4 */
    .td-page-content h4 {
    	@page_h4
    }
    /* @page_h5 */
    .td-page-content h5 {
    	@page_h5
    }
    /* @page_h6 */
    .td-page-content h6 {
    	@page_h6
    }
    
    /* @footer_text_about */
	.footer-text-wrap {
		@footer_text_about
	}
	/* @footer_copyright_text */
	.td-sub-footer-copy {
		@footer_copyright_text
	}
	/* @footer_menu_text */
	.td-sub-footer-menu li a {
		@footer_menu_text
	}
    
    
    /* @breadcrumb */
    .entry-crumbs a,
    .entry-crumbs span,
    #bbpress-forums .bbp-breadcrumb a,
    #bbpress-forums .bbp-breadcrumb .bbp-breadcrumb-current {
    	@breadcrumb
    }
    /* @pagination */
    .page-nav a,
    .page-nav span {
    	@pagination
    }
    /* @dropcap */
    .td-theme-wrap .dropcap {
    	@dropcap
    }
    /* @default_widgets */
    .widget_archive a,
    .widget_calendar,
    .widget_categories a,
    .widget_nav_menu a,
    .widget_meta a,
    .widget_pages a,
    .widget_recent_comments a,
    .widget_recent_entries a,
    .widget_text .textwidget,
    .widget_tag_cloud a,
    .widget_search input,
    .widget_display_forums a,
    .widget_display_replies a,
    .widget_display_topics a,
    .widget_display_views a,
    .widget_display_stats,
    .widget_categories li span,
    .woocommerce .product-categories a {
    	@default_widgets
    }
    /* @default_buttons */
	input[type=\"submit\"],
	.td-read-more a,
	.td_ajax_load_more,
	.vc_btn,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce #respond input#submit {
		@default_buttons
	}
	
	/* @woocommerce_products */
	.woocommerce .product a .woocommerce-loop-product__title,
	.woocommerce .widget.woocommerce .product_list_widget a,
	.woocommerce-cart .woocommerce .product-name a {
		@woocommerce_products
	}
	/* @woocommerce_product_title */
	.woocommerce .product .summary .product_title {
		@woocommerce_product_title
	}
	
	
	/* @body_text */
    body, p {
    	@body_text
    }
    
    /* @bbpress_header */
    #bbpress-forums .bbp-header .bbp-forums,
    #bbpress-forums .bbp-header .bbp-topics,
    #bbpress-forums .bbp-header {
    	@bbpress_header
    }
    /* @bbpress_titles */
    #bbpress-forums .hentry .bbp-forum-title,
    #bbpress-forums .hentry .bbp-topic-permalink {
    	@bbpress_titles
    }
    /* @bbpress_subcategories */
    #bbpress-forums .bbp-forums-list li {
    	@bbpress_subcategories
    }
    /* @bbpress_description */
    #bbpress-forums .bbp-forum-info .bbp-forum-content {
    	@bbpress_description
    }
    /* @bbpress_author */
    #bbpress-forums div.bbp-forum-author a.bbp-author-name,
    #bbpress-forums div.bbp-topic-author a.bbp-author-name,
    #bbpress-forums div.bbp-reply-author a.bbp-author-name,
    #bbpress-forums div.bbp-search-author a.bbp-author-name,
    #bbpress-forums .bbp-forum-freshness .bbp-author-name,
    #bbpress-forums .bbp-topic-freshness a:last-child {
    	@bbpress_author
    }
    /* @bbpress_replies */
    #bbpress-forums .hentry .bbp-topic-content p,
    #bbpress-forums .hentry .bbp-reply-content p {
    	@bbpress_replies
    }
    /* @bbpress_notices */
    #bbpress-forums div.bbp-template-notice p {
    	@bbpress_notices
    }
    /* @bbpress_pagination */
    #bbpress-forums .bbp-pagination-count,
    #bbpress-forums .page-numbers {
    	@bbpress_pagination
    }
    /* @bbpress_topic */
    #bbpress-forums .bbp-topic-started-by,
    #bbpress-forums .bbp-topic-started-by a,
    #bbpress-forums .bbp-topic-started-in,
    #bbpress-forums .bbp-topic-started-in a {
    	@bbpress_topic
    }

    </style>
    ";



    $td_css_compiler = new td_css_compiler($raw_css);
    // the template directory uri
    $td_css_compiler->load_setting_raw('get_template_directory_uri', get_template_directory_uri());


    // get $typography array from db and added to generated css
    $td_typography_array = td_fonts::td_get_typography_sections_from_db();
    if(is_array($td_typography_array) and !empty($td_typography_array)) {

        foreach ($td_typography_array as $section_id => $section_css_array) {
            $td_css_compiler->load_setting_array(array($section_id => $section_css_array));
        }
    }

    // read line-height for the main-menu to align the logo in menu
    $td_menu_height = td_options::get_array('td_fonts');
    if (!empty($td_menu_height['main_menu']['line_height'])) {
        $td_css_compiler->load_setting_raw('main-menu-height', $td_menu_height['main_menu']['line_height']);
    }


    // read line-height for the top-menu to align the social icons in top menu
    $td_top_menu_height = td_options::get_array('td_fonts');
    if (!empty($td_top_menu_height['top_menu']['line_height'])) {
        $td_css_compiler->load_setting_raw('top-menu-height', $td_top_menu_height['top_menu']['line_height']);
    }


    // load the user settings

    // general
    $td_css_compiler->load_setting('theme_color');
    $td_css_compiler->load_setting('site_background_color');
    $td_css_compiler->load_setting('header_color');
    $td_css_compiler->load_setting('text_header_color');

    // header
    $td_css_compiler->load_setting('top_menu_color');
    $td_css_compiler->load_setting('top_menu_text_color');
    $td_css_compiler->load_setting('top_menu_text_hover_color');
    $td_css_compiler->load_setting('top_social_icons_color');
    $td_css_compiler->load_setting('top_social_icons_hover_color');
    $td_css_compiler->load_setting('top_border_color');

    // main menu
    $td_css_compiler->load_setting('menu_color');
    $td_css_compiler->load_setting('menu_sticky_color');
    $td_css_compiler->load_setting('submenu_hover_color');
    $td_css_compiler->load_setting('menu_text_color');
    $td_css_compiler->load_setting('menu_border_color');

    // sub menu
    $td_css_compiler->load_setting('sub_menu_background');
    $td_css_compiler->load_setting('sub_menu_text_color');
    $td_css_compiler->load_setting('sub_menu_hover_color');
    $td_css_compiler->load_setting('sub_menu_hover_background');
    $td_css_compiler->load_setting('sub_menu_border_color');

    // meag menu
    $td_css_compiler->load_setting('mega_menu_background');
    $td_css_compiler->load_setting('mega_menu_color');
    $td_css_compiler->load_setting('mega_menu_next_color');
    $td_css_compiler->load_setting('mega_menu_subcategories_border');
    $td_css_compiler->load_setting('mega_menu_accent_color');

    // live search
    $td_css_compiler->load_setting('live_search_background');
    $td_css_compiler->load_setting('live_search_border_color');
    $td_css_compiler->load_setting('live_search_text_color');
    $td_css_compiler->load_setting('live_search_date_color');
    $td_css_compiler->load_setting('live_search_button_text_color');
    $td_css_compiler->load_setting('live_search_accent_color');

    // mobile menu
    $td_css_compiler->load_setting('mobile_menu_color');
    $td_css_compiler->load_setting('mobile_icons_color');
    $td_css_compiler->load_setting('mobile_text_color');
    $td_css_compiler->load_setting('mobile_text_active_color');
    $td_css_compiler->load_setting('mobile_background_color');
    // menu gradient color
    $td_css_compiler->load_setting('mobile_gradient_one_mob');
    $td_css_compiler->load_setting('mobile_gradient_two_mob');
    //color one is empty
    if (empty($td_css_compiler->settings['mobile_gradient_one_mob']) && !empty($td_css_compiler->settings['mobile_gradient_two_mob'])) {
        $td_css_compiler->load_setting_raw('mobile_gradient_one_mob', '#333145');
    }
    //color two is empty
    if (!empty($td_css_compiler->settings['mobile_gradient_one_mob']) && empty($td_css_compiler->settings['mobile_gradient_two_mob'])) {
        $td_css_compiler->load_setting_raw('mobile_gradient_two_mob', '#b8333e');
    }

    // header background
    $td_css_compiler->load_setting('header_background_image');
    $td_css_compiler->load_setting('header_background_repeat');
    $td_css_compiler->load_setting('header_background_size');
    $td_css_compiler->load_setting('header_background_position');
    $td_css_compiler->load_setting('header_background_opacity');

    // sign in/join color
    $td_css_compiler->load_setting('login_text_color');
    $td_css_compiler->load_setting('login_button_background');
    $td_css_compiler->load_setting('login_button_color');
    $td_css_compiler->load_setting('login_hover_background');
    $td_css_compiler->load_setting('login_hover_color');
    // login gradient color
    $td_css_compiler->load_setting('login_gradient_one');
    $td_css_compiler->load_setting('login_gradient_two');
    //color one is empty
    if (empty($td_css_compiler->settings['login_gradient_one']) && !empty($td_css_compiler->settings['login_gradient_two'])) {
        $td_css_compiler->load_setting_raw('login_gradient_one', 'rgba(42, 128, 203, 0.8)');
    }
    //color two is empty
    if (!empty($td_css_compiler->settings['login_gradient_one']) && empty($td_css_compiler->settings['login_gradient_two'])) {
        $td_css_compiler->load_setting_raw('login_gradient_two', 'rgba(66, 189, 205, 0.8)');
    }

    $td_css_compiler->load_setting('mobile_button_background_mob');
    $td_css_compiler->load_setting('mobile_button_color_mob');

    // header colors
    $td_css_compiler->load_setting('header_wrap_color');
    $td_css_compiler->load_setting('text_logo_color');
    $td_css_compiler->load_setting('text_logo_tagline_color');

    // footer colors
    $td_css_compiler->load_setting('footer_color');
    $td_css_compiler->load_setting('footer_text_color');
    $td_css_compiler->load_setting('footer_widget_text_color');

    // subfooter colors
    $td_css_compiler->load_setting('footer_bottom_color');
    $td_css_compiler->load_setting('footer_bottom_text_color');
    $td_css_compiler->load_setting('footer_bottom_hover_color');
    
    // post colors
    $td_css_compiler->load_setting('post_title_color');
    $td_css_compiler->load_setting('post_author_name_color');
    $td_css_compiler->load_setting('post_content_color');
    $td_css_compiler->load_setting('post_h_color');
    $td_css_compiler->load_setting('post_blockquote_color');

    // page colors
    $td_css_compiler->load_setting('page_title_color');
    $td_css_compiler->load_setting('page_content_color');
    $td_css_compiler->load_setting('page_h_color');

    // mobile menu/search background
    $td_css_compiler->load_setting('mobile_background_image');
    $td_css_compiler->load_setting('mobile_background_repeat');
    $td_css_compiler->load_setting('mobile_background_size');
    $td_css_compiler->load_setting('mobile_background_position');

    // footer background
    $td_css_compiler->load_setting('footer_background_image');
    $td_css_compiler->load_setting('footer_background_repeat');
    $td_css_compiler->load_setting('footer_background_size');
    $td_css_compiler->load_setting('footer_background_position');
    $td_css_compiler->load_setting('footer_background_opacity');

    // sign in/join background
    $td_css_compiler->load_setting('login_background_image');
    $td_css_compiler->load_setting('login_background_repeat');
    $td_css_compiler->load_setting('login_background_size');
    $td_css_compiler->load_setting('login_background_position');
    $td_css_compiler->load_setting('login_background_opacity');

    /**
     * add td_fonts_css_buffer from database into the source of the page
     *
     * td_fonts_css_buffer : used to store the css generated for custom font files in the database
     */
    $td_fonts_css_buffer = td_fonts::td_add_fonts_css_buffer();

    //output the style
    return $td_fonts_css_buffer . $td_css_compiler->compile_css();

}