<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.View
 * @since			baserCMS v 0.1.0
 * @license			http://basercms.net/license/index.html
 */

/**
 * [ADMIN] プラグイン　フォーム
 * @var BcAppView $this
 */
?>
<?php echo $this->BcForm->input('ResetDbUrl', ['type' => 'hidden', 'value' => $this->BcBaser->getUrl(['action' => 'reset_db'])]) ?>
<script>
$(function(){
	$("#BtnReset").click(function(){
        if(confirm('プラグインのデータを初期化します。よろしいですか？')) {
            $("#PluginAdminInstallForm").attr('action', $("#ResetDbUrl").val());
            $.bcUtil.showLoader();
        } else {
            return false;
        }
	});
	$("#BtnSave").click(function(){
		$.bcUtil.showLoader();
	});
});
</script>

<?php if ($installMessage): ?>
<div id="UpdateMessage"><?php echo $installMessage ?></div>
<?php endif ?> 

<?php echo $this->BcForm->create('Plugin', ['url' => [$this->request->data['Plugin']['name']]]) ?>
<?php echo $this->BcForm->input('Plugin.name', ['type' => 'hidden']) ?>
<?php echo $this->BcForm->input('Plugin.title', ['type' => 'hidden']) ?>
<?php echo $this->BcForm->input('Plugin.status', ['type' => 'hidden']) ?>
<?php echo $this->BcForm->input('Plugin.version', ['type' => 'hidden']) ?>

<div class="em-box">
	<?php echo h($this->BcForm->value('Plugin.name')) . ' ' . $this->BcForm->value('Plugin.version') ?>
	<?php if ($this->BcForm->value('Plugin.title')): ?>
		（<?php echo h($this->BcForm->value('Plugin.title')) ?>）
	<?php endif ?>
</div>

<div class="align-center">
	<?php echo $this->BcForm->input('Plugin.permission', ['type' => 'radio', 'options' => ['1' => '全てのユーザーで利用', '2' => '管理ユーザーのみ利用']]) ?>
</div>

<div>
	<?php echo $this->BcForm->error('Plugin.name') ?>
	<?php echo $this->BcForm->error('Plugin.title') ?>
</div>
	

<div class="submit">
<?php if ($dbInited): ?>
		<?php echo $this->BcForm->submit('プラグインのデータを初期化する', ['div' => false, 'class' => 'button', 'id' => 'BtnReset']) ?>
		<?php echo $this->BcForm->submit('有効化', ['div' => false, 'class' => 'button', 'id' => 'BtnSave']) ?>
<?php else: ?> 
		<?php echo $this->BcForm->submit('インストール', ['div' => false, 'class' => 'button', 'id' => 'BtnSave']) ?>
<?php endif; ?>
</div>

<?php echo $this->BcForm->end() ?>
