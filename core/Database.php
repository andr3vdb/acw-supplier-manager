<?php

namespace ACW\SupplierManager;

use mysqli;

class Database
{
    private mysqli $db;

    public function __construct(mysqli $db)
    {
        $this->db = $db;
    }

    public function query(string $sql)
    {
        return $this->db->query($sql);
    }

    public function escape(string $value): string
    {
        return $this->db->real_escape_string($value);
    }

    public function lastId(): int
    {
        return $this->db->insert_id;
    }
}
