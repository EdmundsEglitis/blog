CREATE TABLE job_titles (
	id PRIMARY KEY NOT NULL AUTO_INCREMENT,
	title VARCHAR(40) NOT NULL
);



CREATE DATABASE blog_IPb22;

USE blog_IPb22;

CREATE TABLE posts (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL
);

INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");














USE blog_IPb22;


CREATE TABLE categories (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	description TEXT
);

INSERT INTO categories
(name)
VALUES
("sport"),
("music"),
("food");




ALTER TABLE posts
ADD COLUMN category_id INT AFTER title,
ADD FOREIGN KEY (category_id) REFERENCES categories(id);




UPDATE posts
SET category_id = 1
WHERE id = 1;

UPDATE posts
SET category_id = 2
WHERE id = 3;