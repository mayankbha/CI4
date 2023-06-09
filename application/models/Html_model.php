<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class Html_model extends CI_Model
{
    

    function __construct()
    {
        parent::__construct();
    }


    function product_box($product_data = array(), $type = '', $style = '')
    {
        $this->load->view('front/components/product_boxes/product_box_'.$type.'_'.$style,$product_data);

    }

	function home_category_box($category_data = array(), $style = '')
    {
        $this->load->view('front/components/home_category_box/category_box_'.$style,$category_data);

    }
    function home3_category_box($category_data = array(), $style = '')
    {
        $this->load->view('front/components/home3_category_box/category_box_'.$style,$category_data);

    }

	function widget($name = '')
    {
        $this->load->view('front/components/widget/'.$name);

    }


    function get_first_num_of_words($string, $num_of_words)
    {
        $string = preg_replace('/\s+/', ' ', trim($string));
        $words = explode(" ", $string); // an array

        // if number of words you want to get is greater than number of words in the string
        if ($num_of_words > count($words)) {
            // then use number of words in the string
            $num_of_words = count($words);
        }

        $new_string = "";
        for ($i = 0; $i < $num_of_words; $i++) {
            $new_string .= $words[$i] . " ";
        }

        return trim($new_string);
    }

}
