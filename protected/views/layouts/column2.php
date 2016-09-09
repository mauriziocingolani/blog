<?php $this->beginContent('/layouts/main'); ?>
<div class="container">
	<div class="col-md-8">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="col-md-4">
		<div id="sidebar">
			<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

			<?php $this->widget('TagCloud', array(
				'maxTags'=>Yii::app()->params['tagCloudCount'],
			)); ?>

			<?php $this->widget('RecentComments', array(
				'maxComments'=>Yii::app()->params['recentCommentCount'],
			)); ?>
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>