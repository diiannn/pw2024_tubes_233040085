<?php
//Koneksi Database

//"Server","User", "Password", "db_name"
$conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040085");

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_genre($data)
{
    global $conn;
    $genre_name = htmlspecialchars($data["genre_name"]);

    $query = "
                    INSERT INTO genre 
                        (`genre_name`) 
                    VALUES 
                        ('$genre_name')
                ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus_genre($id)
{
    global $conn;

    $query = "DELETE FROM genre WHERE idgenre='$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_genre($data)
{
    global $conn;

    $idgenre = $data["idgenre"];
    $genre_name = htmlspecialchars($data["genre_name"]);

    $query = "
                    UPDATE genre SET
                        genre_name =  '$genre_name'
                    WHERE
                        idgenre = '$idgenre'
                ";

    // var_dump($query);
    // die;

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// USER


function registrasi($data)
{
    global $conn;
    $full_name = htmlspecialchars($data["full_name"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $password2 = htmlspecialchars($data["password2"]);
    $status = htmlspecialchars($data["status"]);

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
    alert('konfirmasi password tidak sesuai!');
    </script>";
        return false;
    }


    $query = "
                    INSERT INTO user 
                        (`full_name`,`username`, `password`, `status`) 
                    VALUES 
                        ('$full_name', '$username',' $password','$status')
                ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}
function tambah_user($data)
{
    global $conn;
    $full_name = htmlspecialchars($data["full_name"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $status = htmlspecialchars($data["status"]);

    $query = "
                    INSERT INTO user 
                        (`full_name`,`username`, `password`, `status`) 
                    VALUES 
                        ('$full_name', '$username',' $password','$status')
                ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus_user($id)
{
    global $conn;

    $query = "DELETE FROM user WHERE iduser='$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_user($data)
{
    global $conn;

    $iduser = $data["iduser"];
    $full_name = htmlspecialchars($data["full_name"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $status = htmlspecialchars($data["status"]);



    if ($password == "") {
        $query = "
                    UPDATE user SET
                        full_name =  '$full_name',
                        username =  '$username',
                        status =  '$status'
                    WHERE
                        iduser = '$iduser'
                ";
    } else {
        $query = "
        UPDATE user SET
            full_name =  '$full_name',
            username =  '$username',
            password =  '$password',
            status =  '$status'
        WHERE
            iduser = '$iduser'
            ";
    }


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//MOVIE
function tambah_movie($data)
{
    global $conn;

    $title = htmlspecialchars($data["title"]);
    $description = htmlspecialchars($data["description"]);
    $release_year = htmlspecialchars($data["release_year"]);
    $rating = htmlspecialchars($data["rating"]);
    $movie_trailer = htmlspecialchars($data["movie_trailer"]);
    $age_rating = htmlspecialchars($data["age_rating"]);
    $writer = htmlspecialchars($data["writer"]);
    $director = htmlspecialchars($data["director"]);
    $actor = htmlspecialchars($data["actor"]);
    $idgenre = htmlspecialchars($data["genre"]);
    $iduser = $_SESSION['iduser'];


    $picture = upload();

    if (!$picture) {
        return false;
    }

    $query = "
                    INSERT INTO movie 
                        (`title`,`description`, `release_year`, `rating`,`movie_trailer`, `age_rating`, `writer`, `director`, `actor`, `picture`,`genre_idgenre`, `user_iduser`) 
                    VALUES 
                        ('$title', '$description',' $release_year','$rating', '$movie_trailer', '$age_rating', '$writer', '$director','$actor','$picture','$idgenre','$iduser')
                ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['picture']['name'];
    $ukuranfile = $_FILES['picture']['size'];
    $error = $_FILES['picture']['error'];
    $tmpName = $_FILES['picture']['tmp_name'];

    //cek apakah tidak ada yg di upload
    if ($error === 4) {
        echo " <script>
              alert('Pilih gambar terlebih dahulu!');
      </>";
        return false;
    }

    //cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo " <script>
              alert('Yang anda upload bukan gambar!');
      </script>";
        return false;
    }

    //cek jika ukuran terlalu besar
    if ($ukuranfile > 1000000) {
        echo " <script>
              alert('ukuran gambar terlalu besar!');
      </script>";
        return false;
    }
    // lolos pengecekan, gambar siap di upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'images/' . $namaFileBaru);

    return $namaFileBaru;

}

function ubah_movie($data)
{
    global $conn;

    $id_movie = $data["id_movie"];
    $title = htmlspecialchars($data["title"]);
    $description = htmlspecialchars($data["description"]);
    $release_year = htmlspecialchars($data["release_year"]);
    $rating = htmlspecialchars($data["rating"]);
    $movie_trailer = htmlspecialchars($data["movie_trailer"]);
    $age_rating = htmlspecialchars($data["age_rating"]);
    $writer = htmlspecialchars($data["writer"]);
    $director = htmlspecialchars($data["director"]);
    $actor = htmlspecialchars($data["actor"]);
    $idgenre = htmlspecialchars($data["genre"]);
    $pictureLama = htmlspecialchars($data["pictureLama"]);
    $iduser = $_SESSION['iduser'];


    if ($_FILES['picture']['error'] === 4) {
        $picture = $pictureLama;
    } else {
        $picture = upload();
    }

    $query = "UPDATE movie SET
            title = '$title',
            description = '$description',
            release_year = '$release_year',
            rating = '$rating',
            movie_trailer = '$movie_trailer',
            age_rating = '$age_rating',
            writer = '$writer',
            director = '$director',
            actor = '$actor',
            picture = '$picture',
            genre_idgenre = '$idgenre',
            user_iduser = '$iduser'
            WHERE
            id_movie = '$id_movie'";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function hapus_movie($id_movie)
{
    global $conn;

    $query = "DELETE FROM movie WHERE id_movie='$id_movie'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari_genre($keyword)
{
    $query = "SELECT * FROM genre WHERE genre_name LIKE '%$keyword%'";
    return query($query);
}

function cari_movie($keyword)
{
    $query = "SELECT movie.*, genre.genre_name
                FROM movie
                INNER JOIN genre
                ON movie.genre_idgenre = genre.idgenre
                WHERE
                    movie.title LIKE '%$keyword%' 
                    OR movie.description LIKE '%$keyword%'
                    OR movie.release_year LIKE '%$keyword%'
                    OR movie.rating LIKE '%$keyword%'
                    OR movie.movie_trailer LIKE '%$keyword%'
                    OR movie.age_rating LIKE '%$keyword%'
                    OR movie.writer LIKE '%$keyword%'
                    OR movie.director LIKE '%$keyword%'
                    OR movie.actor LIKE '%$keyword%'
                    OR genre.genre_name LIKE '%$keyword%'
                    ";

    return query($query);
}

function cari_user($keyword)
{
    $query = "SELECT * FROM user WHERE full_name LIKE '%$keyword%' OR username LIKE '%$keyword%'";
    return query($query);
}



?>