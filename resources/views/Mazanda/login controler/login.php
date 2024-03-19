<?php

// Dummy user database
$users = array(
    "user1" => "password1",
    "user2" => "password2"
);

// Fungsi untuk melakukan autentikasi pengguna
function authenticateUser($username, $password, $users) {
    if (array_key_exists($username, $users) && $users[$username] === $password) {
        return true;
    }
    return false;
}

// Mengambil data yang dikirimkan melalui POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Melakukan autentikasi
    if (authenticateUser($username, $password, $users)) {
        // Autentikasi berhasil
        echo json_encode(array("message" => "Login berhasil"));
        // Di sini Anda dapat melakukan tindakan lebih lanjut, seperti mengatur sesi pengguna.
    } else {
        // Autentikasi gagal
        http_response_code(401); // Unauthorized
        echo json_encode(array("message" => "Kredensial tidak valid"));
    }
}

?>
