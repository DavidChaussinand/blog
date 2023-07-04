SELECT Articles_id, comments.text, comments.Users_id, user_name
FROM comments
         INNER JOIN articles ON articles.id = comments.articles_id
         INNER JOIN users ON users.id = comments.users_id
WHERE articles.id = :id