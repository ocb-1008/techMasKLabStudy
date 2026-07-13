<?php
//インターフェイスファイルを読み込む
require_once 'IDrip.php';

class Matcha implements IDrip
{
	//プロパティ
	private $name = '抹茶';

	//注ぐメソッドをオーバーライド
	public function drip(){
		return $this->name;
	}

	//ミルクと一緒にそそぐメソッドをオーバーライド
	public function dripWithMilk(){
		return $this->name . 'ミルク';
	}

	//ミルクをセットする処理
	public function addMilk(){
		return '抹茶にミルクを入れました';
	}

}