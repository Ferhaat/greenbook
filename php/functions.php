require("db_connection.php");

function getProductName()
{

$result = mysql_query("
		SELECT *
		FROM greenbook_products
		WHERE id = 1
		LIMIT 1
	");
	
	return mysql_fetch_assoc($result);

}
