<?php

const IMG_SIZE_W = 175;

function get_random_item($arr) {
	return $arr[rand(0, count($arr)-1)];
}

function get_image_tag($item) {
	return "<img src=\"/images/".$item.".jpg\" width=\"".IMG_SIZE_W."px\" />\n";
}

function draw_outfit($outfit) {
	echo get_image_tag($outfit["top"]);
	if ($outfit["jumper"] != "") {
		echo get_image_tag($outfit["jumper"]);
	}
	if ($outfit["jacket"] != "") {
		echo get_image_tag($outfit["jacket"]);
	}
	echo "<br />\n";
	echo get_image_tag($outfit["trousers"]);
	echo "<br />\n";
	echo get_image_tag($outfit["shoes"]);
}

function create_outfit() {
	$tops = array(
		"white-tshirt",
		"grey-tshirt",
		"black-tshirt",
		"white-dress",
		"white-buttondown",
		"blue-buttondown",
	);

	$jumpers = array(
		"", /* nothing */
		"navy-jumper",
		"black-jumper",
		"grey-jumper"
	);

	$jackets = array(
		"", /* nothing */
		"", /* nothing */
		"navy-jacket"
	);

	$trousers = array(
		"blue-jeans",
		"grey-chinos"
	);

	$shoes = array(
		"brown-leather",
		"white-trainers"
	);

	$outfit = array();
	$outfit["top"] = get_random_item($tops);
	$outfit["jumper"] = get_random_item($jumpers);
	$outfit["jacket"] = get_random_item($jackets);
	$outfit["trousers"] = get_random_item($trousers);
	$outfit["shoes"] = get_random_item($shoes);
	return $outfit;
}

draw_outfit(create_outfit());



