SELECT articles.*, users.name
FROM articles INNER JOIN users ON articles.Users_id = users.id
WHERE articles.id =:id