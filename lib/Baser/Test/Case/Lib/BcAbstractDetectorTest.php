<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.Test.Case.Lib
 * @since			baserCMS v 4.0.9
 * @license			http://basercms.net/license/index.html
 */
App::uses('BcAbstractDetector', 'Lib');

/**
 * BcAbstractDetectorクラスのテスト
 *
 * @package Baser.Test.Case.Lib
 */
class BcAbstractDetectorTest extends BaserTestCase {

/**
 * setUp
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * tearDown
 *
 * @return void
 */
	public function tearDown() {
		parent::tearDown();
	}

/**
 * 名前をキーとしてインスタンスを探す
 */
	public function testFind() {
		$this->markTestIncomplete('このテストは、まだ実装されていません。');
	}

/**
 * 設定ファイルに存在する全てのインスタンスを返す
 */
	public function testFindAll() {
		$this->markTestIncomplete('このテストは、まだ実装されていません。');
	}

/**
 * 現在の環境の判定キーの値に合致するインスタンスを返す
 */
	public function testFindCurrent() {
		$this->markTestIncomplete('このテストは、まだ実装されていません。');
	}

}