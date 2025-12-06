USE toms;
CREATE TABLE settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(50),
    setting_value VARCHAR(255)
);
INSERT INTO settings (setting_key, setting_value)
VALUES ('business_hours', 'Mon - Fri: 8:00 AM - 6:00 PM');
