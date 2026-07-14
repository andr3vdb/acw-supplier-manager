<?php

if (!defined('DIR_CORE')) {
    exit;
}

class ExtensionAcwSupplierManager extends Extension
{
    public function onControllerPagesIndex()
    {
        if ($this->baseObject->user->canAccess('pages/extension/acw_supplier_manager')) {

            $this->baseObject->view->assign(
                'acw_supplier_manager',
                array(
                    'text' => 'ACW Supplier Manager',
                    'href' => $this->baseObject->html->getSecureURL(
                        'extension/acw_supplier_manager'
                    )
                )
            );
        }
    }
}