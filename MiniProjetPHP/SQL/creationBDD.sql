CREATE TABLE utilisateur
(
   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   UserName TEXT,
   UserMail TEXT,
   UserMdp TEXT,
   Admin TINYINT
)

INSERT INTO utilisateur (UserMail,UserMdp,Admin) VALUES ('benjibou02@gmail.com','admin',1);
