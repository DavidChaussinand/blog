UPDATE articles SET
    text = :text,
    priority = :priority,
    title = :title,
    first_date = :first_date,
    last_date = :last_date,
    Users_id = :users_id
WHERE id = :id;