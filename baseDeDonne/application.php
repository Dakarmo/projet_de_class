
<?php

//1- La liste de tous les utilisateurs 

("SELECT last_name, first_name FROM users");

//2- La liste de tous les utilisateurs rangée par noms de famille
("SELECT last_name, first_name FROM users ORDER BY last_name ASC");

//3- Le dernier utilisateur inscrit
("SELECT first_name, last_name, registration_date FROM users ORDER BY registration_date DESC limit 1 ");

//4- La liste de tous les utilisateurs fêtant leur anniversaire ce mois-ci
("SELECT last_name, first_name, birthdate FROM `users` WHERE MONTH(birthdate)=MONTH(CURDATE()) ");

//5- Le nombre total d'utilisateurs
("SELECT COUNT(id) FROM users");

//6- La liste de tous les utilisateurs associés à leurs villes respectives
("SELECT last_name, first_name, city FROM users INNER JOIN addresses ON users.id=addresses.user_id");

//7- La liste de tous les utilisateurs vivant à une adresse sans numéro
("SELECT last_name, first_name, city, number FROM users INNER JOIN addresses ON users.id=addresses.user_id WHERE number IS NULL");

//8- La liste de tous les produits dont le prix est supérieur à 1 000 €
("SELECT name, price FROM `products` WHERE price > 1000");

//9- La liste de tous les produits associés à leurs photos respectives 
("SELECT name, url FROM `products` INNER JOIN pictures ON products.id=pictures.product_id;");

//10- La liste de tous les produits appartenant à la catégorie « Voyage »
("SELECT categories.title, products.name
    FROM `products_categories`
    INNER JOIN `products` ON products_categories.product_id=products.id
    INNER JOIN `categories` ON products_categories.category_id=categories.id
    WHERE categories.title='Voyage' ");

//11- La liste de tous les produits associés à leurs photos respectives 
("");

//12- La liste de tous les produits achetés par le premier utilisateur inscrit.
("");

//13- La liste de tous les produits achetés par le premier utilisateur inscrit.
("SELECT date, COUNT(reference) FROM orders GROUP BY date;");

