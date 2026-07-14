CREATE TABLE IF NOT EXISTS acw_supplier_profiles
(
    supplier_id INT AUTO_INCREMENT PRIMARY KEY,

    supplier_name VARCHAR(100),

    file_type VARCHAR(10),

    sku_column VARCHAR(50),

    description_column VARCHAR(50),

    cost_column VARCHAR(50),

    stock_column VARCHAR(50),

    brand_column VARCHAR(50),

    category_column VARCHAR(50),

    active TINYINT DEFAULT 1
);

CREATE TABLE IF NOT EXISTS acw_import_stage
(
    stage_id BIGINT AUTO_INCREMENT PRIMARY KEY,

    supplier VARCHAR(100),

    supplier_sku VARCHAR(100),

    product_name VARCHAR(255),

    brand VARCHAR(100),

    category VARCHAR(100),

    cost DECIMAL(15,2),

    stock INT,

    imported_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS acw_import_history
(
    import_id INT AUTO_INCREMENT PRIMARY KEY,

    supplier VARCHAR(100),

    filename VARCHAR(255),

    products INT,

    updated INT,

    skipped INT,

    imported_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);