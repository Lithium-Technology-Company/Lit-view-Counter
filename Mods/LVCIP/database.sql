CREATE TABLE page_views (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(255),
    visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY unique_ip_address (ip_address)
);