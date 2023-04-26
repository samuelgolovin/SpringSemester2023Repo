CREATE TABLE IF NOT EXISTS products
(
  id		INT UNIQUE	AUTO_INCREMENT ,
  code		INT		NOT NULL ,
  name		VARCHAR(25) 	NOT NULL ,
  quantity	INT		DEFAULT 1 NULL , 
  price		DECIMAL(6,2)	NOT NULL
) ;