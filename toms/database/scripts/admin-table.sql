USE toms;
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255)
);
INSERT INTO admins (username, password)
VALUES ('admin', MD5('password123'));
