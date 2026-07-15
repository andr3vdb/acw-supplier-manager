<?php
/*
 *   $Id$
 *
 *   AbanteCart, Ideal OpenSource Ecommerce Solution
 *   http://www.AbanteCart.com
 *
 *   Copyright © 2011-2024 Belavier Commerce LLC
 *
 *   This source file is subject to Open Software License (OSL 3.0)
 *   License details is bundled with this package in the file LICENSE.txt.
 *   It is also available at this URL:
 *   <http://www.opensource.org/licenses/OSL-3.0>
 *
 *  UPGRADE NOTE:
 *    Do not edit or add to this file if you wish to upgrade AbanteCart to newer
 *    versions in the future. If you wish to customize AbanteCart for your
 *    needs please refer to http://www.AbanteCart.com for more information.
 */
if (!defined('DIR_CORE')) {
    header('Location: static_pages/');
}
require_once(DIR_EXT.'acw_supplier_manager'.DS.'core'.DS.'custom_block_hook.php');
$controllers = [
    'storefront' => [
        'responses/extension/acw_supplier_manager',
    ],
    'admin' => [
        'pages/extension/acw_supplier_manager',
        'responses/listing_grid/acw_supplier_manager',
    ],
];

$models = [
    'storefront' => [
        'extension/acw_supplier_manager',
    ],
    'admin' => [
        'extension/acw_supplier_manager',
    ],
];

$languages = [
    'storefront' => [
        'acw_supplier_manager/acw_supplier_manager',
    ],
    'admin' => [
        'acw_supplier_manager/acw_supplier_manager',
    ],
];

$templates = [
    'admin' => [
        'pages/extension/acw_supplier_manager.tpl',
        'pages/extension/acw_supplier_manager_form.tpl',
    ],
    'storefront' => [],
];