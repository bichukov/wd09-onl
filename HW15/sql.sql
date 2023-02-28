SELECT o.id, cus.name, cus.phone, o.pay_type as "type payment", p.name, c.name as "name category", s.address, s.work_hours, pp.price, cur.unit FROM `orders` AS o
INNER JOIN orders_product AS op ON op.order_id = o.id
INNER JOIN products AS p ON p.id = op.product_id
INNER JOIN product_prices AS pp ON pp.product_id = p.id
INNER JOIN stores AS s ON s.id = pp.store_id
LEFT JOIN currencies AS cur ON cur.id = pp.currency_id
INNER JOIN customers AS cus on cus.id = o.customer_id
LEFT JOIN categories AS c ON c.id = p.category_id

--взял твои запросы и разобрался как они работают