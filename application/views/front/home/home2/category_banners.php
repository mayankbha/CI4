<!-- PAGE -->
<?php
$box_style=2;
$categories = json_decode($this->db->get_where('ui_settings',array('type'=>'home_categories'))->row()->value,true);

// <!-- Array
// (
//     [0] => Array
//         (
//             [category] => 1
//             [sub_category] => Array
//                 (
//                     [0] => 1
//                     [1] => 2
//                 )

//             [color_back] => rgba(71,4,103,1)
//             [color_text] => rgba(255,255,255,1)
//         )

// ) -->
// echo "<pre>";print_r($categories);
// die();
foreach($categories as $row){
	if($this->crud_model->if_publishable_category($row['category'])){
		echo $this->html_model->home_category_box($row, $box_style);
	}
}
?>
<!-- /PAGE -->
