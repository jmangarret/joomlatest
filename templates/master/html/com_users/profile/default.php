<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="user_profile profile<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>

	<h1>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>

<?php endif; ?>
<?php if (JFactory::getUser()->id == $this->data->id) : ?>

<?php endif; ?>
<?php echo $this->loadTemplate('core'); ?>

<?php echo $this->loadTemplate('params'); ?>
<div class="edit_btn">
<ul class="btn-toolbar pull-right">
	<li class="btn-group">
		<a class="master_btn btn" href="<?php echo JRoute::_('index.php?option=com_users&task=profile.edit&user_id=' . (int) $this->data->id);?>">
			<span class="icon-user"></span> <?php echo JText::_('COM_USERS_EDIT_PROFILE'); ?></a>
	</li>
</ul>
</div>
<?php echo $this->loadTemplate('custom'); ?>


</div>
