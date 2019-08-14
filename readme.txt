/******************************************************************************************
Note: Use this code in list.phtml. If you want to show favourite list link on the list page.
/******************************************************************************************

<?php if (Mage::helper('favouritelist')->isAllow()) : ?>

	<a title="<?php echo $this->__('Add to FavouriteList') ?>" href="<?php echo Mage::helper('favouritelist')->getUrl($_product) ?>" class="link-favourite">
		<?php echo $this->__('Add to Favourite List') ?>
	</a>

<?php endif; ?>