<?php

App::uses('Helper', 'View');

/**
 * Title helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class TitleHelper extends Helper {

	public function get($average) {
		$result = Cache::read('highest');


		$percent = round($average / $result['Tag']['Average'] * 100);

		$title = 'Wildling';

		if($percent >= 100){
			$title = 'King';
		}
		else if($percent >= 98){
			$title = 'Queen';
		}
		else if($percent >= 88){
			$title = 'Hand of the King';
		}
		else if($percent >= 87){
			$title = 'Warden of the North';
		}
		else if($percent >= 86){
			$title = 'Warden of the East';
		}
		else if($percent >= 82){
			$title = 'Warden of the West';
		}
		else if($percent >= 80){
			$title = 'Warden of the South';
		}
		else if($percent >= 76){
			$title = 'Kings Guard';
		}
		else if($percent >= 70){
			$title = 'Lord Commander of the Nights Watch';
		}
		else if($percent >= 60){
			$title = 'Lord';
		}
		else if($percent >= 50){
			$title = 'Knight';
		}
		else if($percent >= 40){
			$title = 'Man of the Nights Watch';
		}
		else if($percent >= 30){
			$title = 'Squire';
		}
		else if($percent >= 25){
			$title = 'Steward';
		}
		else if($percent >= 15){
			$title = 'Sell Sword';
		}
		else if($percent >= 10){
			$title = 'Peasant';
		}

		return $title;
	}

}
