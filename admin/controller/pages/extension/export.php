<?php
if (!defined('DIR_CORE')) {
    die('Restricted Access');
}

use ACW\SupplierManager\Services\ExportService;
use ACW\SupplierManager\Writers\CsvWriter;

class ControllerPagesExtensionExport extends AController
{
    public function main()
    {
        if (!$this->user->canAccess('extension/export')) {
            $this->session->data['error'] = 'Permission denied';
            redirect($this->html->getSecureURL('index/home'));
        }

        require_once DIR_EXT . 'acw_supplier_manager/core/Repositories/ProductRepository.php';
        require_once DIR_EXT . 'acw_supplier_manager/core/Writers/CsvWriter.php';
        require_once DIR_EXT . 'acw_supplier_manager/core/Services/ExportService.php';

        $repository = new \ACW\SupplierManager\Repositories\ProductRepository($this->db);
        $writer = new CsvWriter();

        $service = new ExportService(
            $repository,
            $writer
        );

        $service->exportCsv();
    }
}