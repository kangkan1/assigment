select u1.name as user_name, u2.name as librarian
from libraby_accounts la 
JOIN librabry_books_taken lbt ON la.id = lbt.account_id
JOIN users u1 ON la.student_id = u1.id
JOIN users u2 ON la.librarian_id = u2.id 
WHERE u1.name LIKE 'A%' AND LENGTH(u1.name) <= 7
GROUP BY u1.name, u2.name 
HAVING SUM(lbt.type = 'horror') > 5 AND SUM(lbt.type = 'fiction') < 6; ;
