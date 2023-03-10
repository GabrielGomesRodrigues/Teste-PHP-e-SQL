SELECT user.user_name, user.user_city, user.user_country, orders.order_date, orders.order_total
FROM user
JOIN orders ON user.user_id = orders.order_user_id
WHERE user.user_id IN (1, 3, 5)
ORDER BY user.user_name;