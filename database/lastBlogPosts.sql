SELECT articles.* , users.name 
FROM articles 
INNER JOIN users ON articles.Users_id = users.id 
ORDER BY articles.first_date DESC 
LIMIT 10;