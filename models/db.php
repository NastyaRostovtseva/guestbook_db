<?php

function addData()
{
    if ($_POST["email"] !== '' && $_POST["text"] !== '') {
        $conn = mysqli_connect("localhost", "root", "root", "guestbook");
        if (!$conn) {
            die("Ошибка: " . mysqli_connect_error());
        }
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $text = mysqli_real_escape_string($conn, $_POST["text"]);

        $sql = "INSERT INTO comments (email, text) VALUES ('$email', '$text')";
        mysqli_query($conn, $sql);

        mysqli_close($conn);
    }
}

function deleteData($id)
{
    $conn = mysqli_connect("localhost", "root", "root", "guestbook");
    if (!$conn) {
        die("Ошибка: " . mysqli_connect_error());
    }
    $userid = mysqli_real_escape_string($conn, $id);
    $sql = "DELETE FROM comments WHERE id = '$userid'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
