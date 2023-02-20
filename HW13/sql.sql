--  1. Выбрать все телефоны которые есть в наличии, отсортировать по порядку алфавита
--  2. Сгрупировать все телефоны по моделям
--  3. Вывести все телефоны с моделью iPhone дороже 2000 рублей
--  4. Найти телефоны только линейки plus либо max
--  5. Найти телефон в наличии и ценовом диапазане от 1000 до 2000 р
--  6. Найти все телефоны моделей Google, iPhone, Samsung
--  7. Сделать запрос который выведет среднюю цену всех телефонов и количество таких телефонов сгруппированнах по моделям (использовать alias)
--  8. Сделать запрос который группирует телефоны по моделям, при этом сортирует это все по порядку алфавита

--1.
SELECT *
FROM `products`
WHERE count > 0
ORDER BY `products`.`name` ASC
--2.
SELECT manufacturer
FROM `products`
GROUP BY manufacturer
ORDER BY `products`.`manufacturer` ASC;
--3.
SELECT *
FROM `products`
WHERE manufacturer ='iPhone' AND  price > 2000
ORDER BY `products`.`price` ASC;
--4.
SELECT *
FROM `products`
where name like  '%plus%' OR name like  '%max%'
ORDER BY `products`.`name` ASC;
--5.
SELECT *
FROM `products`
WHERE count > 0 AND (price BETWEEN 1000 and 2000 AND currency = 'BYN')
ORDER BY `products`.`price` ASC;
--6.
SELECT *
FROM `products`
WHERE manufacturer IN ('google', 'iphone', 'samsung')
ORDER BY `products`.`manufacturer` ASC;
--7.
SELECT SUM(count) AS count, AVG(price) as medium_price, manufacturer
FROM `products`
GROUP BY manufacturer
ORDER BY `products`.`manufacturer` ASC;
--8.
SELECT manufacturer
FROM `products`
GROUP BY manufacturer
ORDER BY `products`.`manufacturer` ASC;
