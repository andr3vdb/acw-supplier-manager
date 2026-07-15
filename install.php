<?php
/*------------------------------------------------------------------------------
  ACW Supplier Manager
------------------------------------------------------------------------------*/

if (!defined('DIR_CORE')) {
    header('Location: static_pages/');
    exit;
}

//------------------------------------------------------
// Add menu icon
//------------------------------------------------------
$rm = new AResourceManager();
$rm->setType('image');

$language_id = $this->language->getContentLanguageID();

$data = [];
$data['resource_code'] = '<i class="fa fa-truck"></i>&nbsp;';
$data['name'] = [$language_id => 'ACW Supplier Manager'];
$data['title'] = [$language_id => ''];
$data['description'] = [$language_id => ''];

$resource_id = $rm->addResource($data);

//------------------------------------------------------
// Add admin menu
//------------------------------------------------------
$menu = new AMenu("admin");

$menu->insertMenuItem([
    "item_id"         => "acw_supplier_manager",
    "parent_id"       => "catalog",
    "item_text"       => "acw_supplier_manager_name",
    "item_url"        => "extension/acw_supplier_manager",
    "item_icon_rl_id" => $resource_id,
    "item_type"       => "extension",
    "sort_order"      => 99,
]);

//------------------------------------------------------
// Clear cache
//------------------------------------------------------
$this->cache->remove('*');