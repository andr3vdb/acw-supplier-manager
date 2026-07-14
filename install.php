<?php

if (!defined('DIR_CORE')) {
    exit;
}

class ExtensionAcwSupplierManagerInstall
{
    public function install($registry)
    {
        $db = $registry->get('db');

        $sql = file_get_contents(
            DIR_EXT . 'acw_supplier_manager/install.sql'
        );

        foreach (explode(';', $sql) as $query) {

            $query = trim($query);

            if ($query) {

                $db->query($query);

            }
        }

        return true;
    }

    public function uninstall($registry)
    {
        return true;
    }
}