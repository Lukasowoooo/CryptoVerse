<?php


$conn = new mysqli('localhost', 'username', 'password', 'nazwa_bazy_danych');


if ($conn->connect_error) {
  die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}


$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];


$sql = "INSERT INTO posts (title, content, author) VALUES ('$title', '$content', '$author')";

if ($conn->query($sql) === TRUE) {
  echo "Post został dodany pomyślnie.";
} else {
  echo "Błąd podczas dodawania postu: " . $conn->error;
}

$conn->close();
?>
