SELECT user.user_country, SUM(orders.order_total) AS total_vendas
FROM user
JOIN orders ON user.user_id = orders.order_user_id
WHERE user.user_id IN (1, 3, 5)
GROUP BY user.user_country;