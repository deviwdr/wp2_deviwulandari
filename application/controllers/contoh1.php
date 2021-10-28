<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contoh1 extends CI_Controller {

	
	public function index()
	{
		echo "<h1>Perkenalkan</h1>";
		echo "Nama saya Devi Wulandari<p>
			Saya tinggal di daerah Bakan maja timur<p>
			Olahraga yang saya sukai adalah Bulu Tangkis";
	}
}