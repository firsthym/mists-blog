<?php
class td_block_7 extends td_block {
    function render($atts, $content = null) {
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

	    if (empty($td_column_number)) {
		    $td_column_number = td_global::vc_get_column_number(); // get the column width of the block from the page builder API
	    }

	    $buffy = ''; //output buffer

	    $buffy .= '<div class="' . $this->get_block_classes() . ' td-column-' . $td_column_number . '" ' . $this->get_block_html_atts() . '>';

        //get the block css
        $buffy .= $this->get_block_css();

        //get the js for this block
        $buffy .= $this->get_block_js();

        // block title wrap
        $buffy .= '<div class="td-block-title-wrap">';
            $buffy .= $this->get_block_title(); //get the block title
            $buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
        $buffy .= '</div>';

        $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
        $buffy .= $this->inner($this->td_query->posts);  //inner content of the block
        $buffy .= '</div>';

        //get the ajax pagination for this block
        $buffy .= $this->get_block_pagination();


        // block template lock
        $block_template_id = $this->get_att('block_template_id');
        if ($block_template_id != '' && $block_template_id != 'td_block_template_1') {
            $buffy .= td_util::get_template_lock();
        }


        $buffy .= '</div> <!-- ./block -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {
        $buffy = '';

        $td_block_layout = new td_block_layout();
        if (empty($td_column_number)) {
            $td_column_number = td_global::vc_get_column_number(); // get the column width of the block from the page builder API
        }

        $td_post_count = 0; // the number of posts rendered
        $td_current_column = 1; //the current column

        if (!empty($posts)) {
            foreach ($posts as $post) {
                $td_module_1 = new td_module_1($post);
                $td_module_2 = new td_module_2($post);
                $td_module_3 = new td_module_3($post);
                $td_module_4 = new td_module_4($post);

                switch ($td_column_number) {

                    case '1': //one column layout
                        if ($td_post_count == 0) { //first post
                            $buffy .= $td_module_1->render();
                        } else { //the rest
                            $buffy .= $td_module_3->render();
                        }
                        break;

                    case '2': //two column layout
                        if ($td_post_count == 0) { //first post
                            $buffy .= $td_module_4->render();
                            $td_current_column = 0;

                        } else { //the rest
                            $buffy .= $td_block_layout->open_row();
                            $buffy .= $td_block_layout->open6();
                            $buffy .= $td_module_2->render();
                            $buffy .= $td_block_layout->close6();
                        }

                        if ($td_current_column == 2) {
                            $buffy .= $td_block_layout->close_row();
                        }
                        break;

                    case '3': //three column layout
                        if ($td_post_count <= 1) { //first post
                            $buffy .= $td_block_layout->open_row();
                            $buffy .= $td_block_layout->open6();
                            $buffy .= $td_module_4->render();
                            $buffy .= $td_block_layout->close6();

                            if ($td_post_count == 1) {
                                $buffy .= $td_block_layout->close_row();
                                $td_current_column = 0;
                            }
                        } else { //the rest
                            $buffy .= $td_block_layout->open_row();
                            $buffy .= $td_block_layout->open4();
                            $buffy .= $td_module_1->render();
                            $buffy .= $td_block_layout->close4();

                            if ($td_current_column == 3) {
                                $buffy .= $td_block_layout->close_row();
                            }
                        }
                        break;
                }

                //current column
                if ($td_current_column == $td_column_number) {
                    $td_current_column = 1;
                } else {
                    $td_current_column++;
                }

                $td_post_count++;
            }
        }
        $buffy .= $td_block_layout->close_all_tags();
        return $buffy;
    }
}