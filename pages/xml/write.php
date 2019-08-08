<?php
 include 'dbconnection.php';


  $result  = "SELECT * FROM books ORDER BY id DESC";
    $stmt = $con->prepare($result);
    $stmt->execute();
 
  $xml = new DOMDocument("1.0");
     $xml->formatOutput = true;
  $books = $xml->createElement("books");
  $xml->appendChild($books);

    
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $book = $xml->createElement("book");
    $books -> appendChild($book);

    $name = $xml->createElement("name",$row['name']); 
    $book->appendChild($name);

    $author = $xml->createElement("author",$row['author_name']); 
    $book->appendChild($author);

    $ISBN = $xml->createElement("ISBN",$row['ISBN']); 
    $book->appendChild($ISBN);

    $price = $xml->createElement("price",$row['price']); 
    $book->appendChild($price);

    $category = $xml->createElement("category",$row['category']); 
    $book->appendChild($category);

  }

  echo "<xmp>".$xml->saveXML()."</xmp>";
  $xml->save("reports.xml");





 ?>
