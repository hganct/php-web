<?php
class AboutController {
	function showIndex() {
		$titlePage = "trungtienlearn.com";
		$contentPage = "app/Views/About/index.php";
		require "app/Views/Layout/Layout.php";
	}
}