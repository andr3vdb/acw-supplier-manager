<?php

namespace ACW\SupplierManager\Repositories;

class ProductRepository
{
    /**
     * AbanteCart database object.
     *
     * @var object
     */
    protected $db;

    /**
     * Constructor.
     *
     * @param object $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Get all products.
     *
     * @return array
     */
    public function getAllProducts(): array
    {
        $sql = "
            SELECT
                p.product_id,
                p.model,
                p.sku,
                p.price,
                p.quantity,
                p.status,
                pd.name
            FROM " . DB_PREFIX . "products p
            INNER JOIN " . DB_PREFIX . "product_descriptions pd
                ON p.product_id = pd.product_id
            WHERE pd.language_id = 1
            ORDER BY pd.name ASC
        ";

        $query = $this->db->query($sql);

        return $query->rows;
    }

    /**
     * Find product by SKU.
     *
     * @param string $sku
     * @return array|null
     */
    public function findBySku(string $sku): ?array
    {
        $query = $this->db->query(
            "SELECT *
             FROM " . DB_PREFIX . "products
             WHERE sku = '" . $this->db->escape($sku) . "'
             LIMIT 1"
        );

        if ($query->num_rows) {
            return $query->row;
        }

        return null;
    }

    /**
     * Update product price.
     *
     * @param int $productId
     * @param float $price
     */
    public function updatePrice(int $productId, float $price): void
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "products
             SET price = '" . (float)$price . "'
             WHERE product_id = " . (int)$productId
        );
    }

    /**
     * Update stock quantity.
     *
     * @param int $productId
     * @param int $qty
     */
    public function updateQuantity(int $productId, int $qty): void
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "products
             SET quantity = " . (int)$qty . "
             WHERE product_id = " . (int)$productId
        );
    }
}