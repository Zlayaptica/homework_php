
-- create
CREATE TABLE classmates (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates VALUES (0001, 'Игорь', 14, 'Владивосток');
INSERT INTO classmates VALUES (0002, 'Мария', 20, 'Москва');
INSERT INTO classmates VALUES (0003, 'Ксения', 19, 'Москва');
INSERT INTO classmates VALUES (0004, 'София', 18, 'Владимир');
INSERT INTO classmates VALUES (0005, 'Илья', 31, 'Томск');
INSERT INTO classmates VALUES (0006, 'Максим', 30, 'Москва');
INSERT INTO classmates VALUES (0007, 'Иван', 39, 'Москва');
INSERT INTO classmates VALUES (0008, 'Наталия', 43, 'Хабаровск');
INSERT INTO classmates VALUES (0009, 'Алексей', 28, 'Омск');
INSERT INTO classmates VALUES (0010, 'Анатолий', 21, 'Москва');
INSERT INTO classmates VALUES (0011, 'Ирина', 32, 'Новосибирск');

-- fetch
SELECT name FROM classmates WHERE address = 'Москва' AND age >= 18 AND age <= 30;