$sql = "SELECT column1, COUNT(*) FROM table_name GROUP BY column1";  // Grouping
$sql = "SELECT column1, COUNT(*) FROM table_name GROUP BY column1 HAVING COUNT(*) > 1";  // Filtering groups
