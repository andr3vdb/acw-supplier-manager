<?php

namespace ACW\SupplierManager;

class Logger
{
    private string $logfile;

    public function __construct()
    {
        $this->logfile = DIR_ROOT .
            "/extensions/acw_supplier_manager/logs/import.log";
    }

    public function write(string $message): void
    {
        file_put_contents(
            $this->logfile,
            "[" . date("Y-m-d H:i:s") . "] " .
            $message .
            PHP_EOL,
            FILE_APPEND
        );
    }
}
