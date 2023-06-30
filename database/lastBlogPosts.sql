SELECT articles.* , users.name 
FROM articles 
JOIN users ON articles.Users_id = users.id 
ORDER BY articles.id DESC 
LIMIT 10;