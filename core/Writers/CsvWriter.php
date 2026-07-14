<?php

namespace ACW\SupplierManager\Writers;

class CsvWriter
{
    public function download(array $rows, string $filename)
    {
        header('Content-Type: text/csv');
        header(
            'Content-Disposition: attachment; filename="' .
            $filename .
            '"'
        );

        $fp = fopen('php://output', 'w');

        if (!$rows) {
            fclose($fp);
            exit;
        }

        fputcsv($fp, array_keys($rows[0]));

        foreach ($rows as $row) {
            fputcsv($fp, $row);
        }

        fclose($fp);

        exit;
    }
}