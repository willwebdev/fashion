<?php

namespace App\Helpers;

class RandomOutfit {
	const IMG_SIZE_W = 175;

	public function drawRandomOutfit() {
		return $this->drawOutfit($this->createOutfit());
	}
	
	private function getRandomItem($arr) {
		return $arr[rand(0, count($arr)-1)];
	}

	private function getImageTag($item) {
		return "<img src=\"/images/".$item.".jpg\" width=\"".self::IMG_SIZE_W."px\" />\n";
	}

	private function drawOutfit($outfit) {
		$s = $this->getImageTag($outfit["top"]);
		if ($outfit["jumper"] != "") {
			$s .= $this->getImageTag($outfit["jumper"]);
		}
		if ($outfit["jacket"] != "") {
			$s .= $this->getImageTag($outfit["jacket"]);
		}
		$s .= $this->getImageTag($outfit["trousers"]);
		$s .= $this->getImageTag($outfit["shoes"]);
		foreach ($outfit["accessories"] as $a)
			$s .= $this->getImageTag($a);
		return $s;
	}

	private function createOutfit() {
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

		$accessories = array(
			"brown-watch",
			"black-leather-belt"
		);

		$outfit = array();
		$outfit["top"] = $this->getRandomItem($tops);
		$outfit["jumper"] = $this->getRandomItem($jumpers);
		$outfit["jacket"] = $this->getRandomItem($jackets);
		$outfit["trousers"] = $this->getRandomItem($trousers);
		$outfit["shoes"] = $this->getRandomItem($shoes);
		$outfit["accessories"] = $accessories;
		return $outfit;
	}
}



