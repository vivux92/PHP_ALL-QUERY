$sql = "SELECT * FROM table1 INNER JOIN table2 ON table1.id = table2.id";  // Inner Join
$sql = "SELECT * FROM table1 LEFT JOIN table2 ON table1.id = table2.id";  // Left Join
$sql = "SELECT * FROM table1 RIGHT JOIN table2 ON table1.id = table2.id";  // Right Join
$sql = "SELECT * FROM table1 FULL JOIN table2 ON table1.id = table2.id";  // Full Join (MySQL doesn't support FULL JOIN natively)
