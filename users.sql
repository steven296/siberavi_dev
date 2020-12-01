CREATE USER 'user1'@'localhost' IDENTIFIED BY '123';
CREATE USER 'user2'@'localhost' IDENTIFIED BY '123';

GRANT SELECT,INSERT ON topicos.* TO 'user1'@'localhost';
GRANT SELECT ON topicos.* TO 'user2'@'localhost';