<?php


$conn = new mysqli('localhost', 'username', 'password', 'nazwa_bazy_danych');


if ($conn->connect_error) {
  die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}


$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='post'>";
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<p>" . $row['content'] . "</p>";
    echo "<p>Autor: " . $row['author'] . "</p>";
    echo "</div>";
  }
} else {
  echo "Brak postów.";
}

$conn->close();
?>
