<?php
/*------------------------------------------------------------------------------
  ACW Supplier Manager - Uninstall
------------------------------------------------------------------------------*/

if (!defined('DIR_CORE')) {
    header('Location: static_pages/');
    exit;
}

// Remove admin menu
$menu = new AMenu("admin");
$menu->deleteMenuItem("acw_supplier_manager");

// Clear cache
$this->cache->remove('*');