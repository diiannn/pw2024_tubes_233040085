<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';
$movie = query("SELECT movie.*, genre.genre_name
                FROM movie
                INNER JOIN genre
                ON movie.genre_idgenre = genre.idgenre");

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>LIST MOVIE<h1>
   <table border="1" cellspacing="0"> 
  <tr>
  <th>#</th>
  <th>Title</th>
  <th>Thumbnail</th>
    <th>Description</th>
    <th>Release year</th>
    <th>Rating</th>
    <th>Age rating</th>
    <th>Writer</th>
    <th>Director</th>
    <th>Aktor</th>
    <th>Genre</th>
  </tr>';
$i = 1;
foreach ($movie as $mv) {
  $html .= '<tr>
        <td>' . $i++ . '</td>
        <td>' . $mv["title"] . '</td>
        <td><img src="images/' . $mv["picture"] . '" width="100"></td>
        <td>' . $mv["description"] . '</td>
        <td>' . $mv["release_year"] . '</td>
        <td>' . $mv["rating"] . '</td>
        <td>' . $mv["age_rating"] . '</td>
        <td>' . $mv["writer"] . '</td>
        <td>' . $mv["director"] . '</td>
        <td>' . $mv["actor"] . '</td>
        <td>' . $mv["genre_name"] . '</td>
        </tr>';
}

$html .= '</table>
    </body>
    </html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>