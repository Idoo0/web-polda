<?php

function read_data($query)
{
    $berita = [];
    global $conn;
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_assoc($result)) {
        $berita[] = $data;
    }
    return $berita;
}

// read
function read()
{

    $berita = read_data(
        "SELECT * FROM `berita` ORDER BY id DESC"
    );

    return $berita;
}

function read_latest()
{
    $berita = read_data(
        "SELECT * FROM `berita` ORDER BY id DESC LIMIT 1"
    );

    return $berita;
}

function get_latest_id()
{
    $result = read_data(
        "SELECT id FROM `berita` ORDER BY id DESC LIMIT 1"
    );

    if ($result) {
        return $result[0]['id']; // Assuming $result is an array with the first result as the latest id.
    }

    return null;
}

function read_all_except_latest()
{
    $latest_id = get_latest_id();

    if ($latest_id) {
        $berita = read_data(
            "SELECT * FROM `berita` WHERE id != $latest_id ORDER BY id DESC"
        );
        return $berita;
    }

    return [];
}



// function readBeritaBeranda()
// {

//     $berita = read_data(
//         "SELECT * FROM `berita` ORDER BY id DESC LIMIT 4"
//     );

//     return $berita;
// }
// function read3()
// {

//     $berita = read_data(
//         "SELECT * FROM `berita` ORDER BY id ASC LIMIT 3"
//     );

//     return $berita;
// }
// read
// function getCat()
// {

//     $cat = read_data(
//         "SELECT kategori, COUNT(*) AS jumlah_berita
//         FROM berita
//         GROUP BY kategori
//         LIMIT 3"
//     );

//     return $cat;
// }


function readById($id)
{

    $berita = read_data(
        "SELECT * FROM `berita` WHERE id='$id'"
    );

    return $berita;
}
// create
function create($data)
{
    global $conn;

    $judul = $_POST['judul'];
    $link = $_POST['link'];
    $thumbnail = upload();
    if(!$thumbnail){
      return false;
    }


    $query = "INSERT INTO `berita` VALUES (
            null,
            '$judul',
            '$link',
            '$thumbnail'
        )";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $link = $_POST['link'];
    $thumbnail = null;

    if ($_FILES['thumbnail']['name']) {
      $thumbnail = upload();
    }
    $query = "UPDATE `berita`  SET
            judul = '$judul', 
            link = '$link'
            WHERE id = '$id'";

    mysqli_query($conn, $query);

    if ($thumbnail) {
        $query = "UPDATE `berita` SET thumbnail = '$thumbnail' WHERE id = '$id'";
        mysqli_query($conn, $query);
    }
    return mysqli_affected_rows($conn);
}

function getId($data) {
    global $conn;
    $link = $_POST['link'];
    // Fetch all rows from the 'berita' table
    $query = "SELECT id, judul, link, thumbnail FROM berita";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        return "Query failed: " . mysqli_error($conn);
    }

    $closestId = null;
    $highestSimilarity = 0;
    $threshold = 95; // 95% similarity threshold

    // Loop through the results and calculate the Levenshtein distance in PHP
    while ($row = mysqli_fetch_assoc($result)) {
        $distance = levenshtein($link, $row['link']);
        
        // Calculate the similarity percentage
        $maxLen = max(strlen($link), strlen($row['link']));
        $similarity = (1 - ($distance / $maxLen)) * 100;
        
        // If the similarity is greater than or equal to 95%, consider it a match
        if ($similarity >= $threshold && $similarity > $highestSimilarity) {
            $closestId = $row['id'];
            $highestSimilarity = $similarity;
        }
    }

    if ($closestId !== null) {
        return $closestId;  // Return the ID of the closest matching link
    } else {
        return "0";
    }
}





function delete_data($id)
{
    global $conn;
    $query = "DELETE FROM berita WHERE id='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['thumbnail']['name'];
    $ukuranFile = $_FILES['thumbnail']['size'];
    $error = $_FILES['thumbnail']['error'];
    $tmpName = $_FILES['thumbnail']['tmp_name'];

    $ekstansiFileAcc = ['jpg', 'jpeg', 'png'];

    // cek apakah tidak ada gambar yang diupload 
    if ($error === 4) {
        echo "<script>
				  	alert('pilih gambar terlebih dahulu');
				  </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $eksistensiGambar = explode('.', $namaFile);
    $eksistensiGambar = strtolower(end($eksistensiGambar));
    if (!in_array($eksistensiGambar, $ekstansiFileAcc)) {
        echo "<script>
				  	alert('format yang diterima (jpg, jpeg, png)');
				  </script>";
    }

    if ($ukuranFile > 5000000) {
        echo "<script>
				  	alert('terlalu besar bro');
				  </script>";
        return false;
    }

    move_uploaded_file($tmpName, __DIR__ . '/../upload/' . $namaFile);

    return $namaFile;
}


?>