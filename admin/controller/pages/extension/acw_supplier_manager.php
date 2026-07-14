<?php
if (!defined('DIR_CORE')) {
    die('Restricted Access');
}

class ControllerPagesExtensionAcwSupplierManager extends AController
{
    public $data = [];

    public function main()
    {
        $this->document->setTitle('ACW Supplier Manager');

        $this->data['heading_title'] = 'ACW Supplier Manager';
        $this->data['text_version']  = 'Version 0.1.0';

        $this->data['buttons'] = [
            [
                'title' => 'Export Products',
                'icon'  => 'fa-download',
                'url'   => $this->html->getSecureURL('extension/acw_supplier_manager/export')
            ],
            [
                'title' => 'Import Supplier File',
                'icon'  => 'fa-upload',
                'url'   => $this->html->getSecureURL('extension/acw_supplier_manager/import')
            ],
            [
                'title' => 'Settings',
                'icon'  => 'fa-cog',
                'url'   => $this->html->getSecureURL('extension/acw_supplier_manager/settings')
            ]
        ];

        $this->view->batchAssign($this->data);

        $this->processTemplate(
            'pages/extension/acw_supplier_manager/dashboard.tpl'
        );
    }
}
