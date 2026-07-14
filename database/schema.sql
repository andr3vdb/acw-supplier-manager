CREATE TABLE IF NOT EXISTS acw_supplier_profiles
(
    id INT AUTO_INCREMENT PRIMARY KEY,

    supplier_name VARCHAR(100) NOT NULL,

    file_type VARCHAR(10) NOT NULL,

    sku_column VARCHAR(50),

    description_column VARCHAR(50),

    cost_column VARCHAR(50),

    stock_column VARCHAR(50),

    brand_column VARCHAR(50),

    category_column VARCHAR(50),

    active TINYINT(1) DEFAULT 1,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS acw_import_history
(
    id INT AUTO_INCREMENT PRIMARY KEY,

    supplier VARCHAR(100),

    filename VARCHAR(255),

    imported_products INT DEFAULT 0,

    updated_products INT DEFAULT 0,

    skipped_products INT DEFAULT 0,

    import_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS acw_import_log
(
    id INT AUTO_INCREMENT PRIMARY KEY,

    import_id INT,

    sku VARCHAR(100),

    action VARCHAR(30),

    old_price DECIMAL(15,2),

    new_price DECIMAL(15,2),

    old_stock INT,

    new_stock INT,

    status VARCHAR(20),

    message TEXT
);
