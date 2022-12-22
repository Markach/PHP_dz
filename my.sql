
-- create
CREATE TABLE classmates (
  Id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates VALUES (0001, 'Slava', '35', 'Minsk');
INSERT INTO classmates VALUES (0002, 'Lena', '30', 'Moskov');
INSERT INTO classmates VALUES (0003, 'Sergei', '25', 'Minsk');
INSERT INTO classmates VALUES (0004, 'Alex', '18', 'Moskov');
INSERT INTO classmates VALUES (0005, 'Slava', '34', 'Vitebsk');
INSERT INTO classmates VALUES (0006, 'Sveta', '21', 'Mogilev');
INSERT INTO classmates VALUES (0007, 'Oleg', '27', 'Mozyr');


-- fetch 
SELECT name FROM classmates WHERE address = 'Moskov' and age BETWEEN 18 AND 29;


-- Output:

-- name
-- Alex