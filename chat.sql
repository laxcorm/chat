CREATE TABLE logins(
id INT(7) AUTO_INCREMENT PRIMARY KEY, 
login VARCHAR(15) NOT NULL, 
password VARCHAR(80) NOT NULL 
);

-- CREATE TABLE IF NOT EXISTS $table(
--     id INT(10) AUTO_INCREMENT PRIMARY KEY,
--     login VARCHAR(15) NOT NULL,
--     message TEXT NOT NULL,
--     time TIMESTAMP NOT NULL DEFAULT NOW(),
--     is_read TINYINT NOT NULL DEFAULT 0
-- );

