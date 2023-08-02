<?php

session_start();

/**
 * Function to connect database
 *
 * @return mysqli|false|null
 */
function connect()
{
    return mysqli_connect("localhost", "id20408636_koperasi", "/@-ILeriGbIBU8pQ", "id20408636_telkom");
}

/**
 * Function to get data from database
 *
 * @param string $query
 * @param bool $associative
 * @return array|null|false
 */
function query($query, $associative = false)
{
    $conn = connect();
    $result = mysqli_query($conn, $query);

    if ($associative) {
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    return mysqli_fetch_assoc($result);
}

function userSignUp($user)
{
    $conn = connect();
    $username = str_replace(" ", "", strtolower(mysqli_real_escape_string($conn, $user["username"])));
    $password = mysqli_real_escape_string($conn, $user["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $user["confirmPassword"]);

    if (empty(trim($username)) || empty(trim($password))) {
        return [
            "error" => true,
            "message" => "Invalid username or password!"
        ];
    }

    $user = query("SELECT username FROM user WHERE username = '$username'", true);

    if (!empty($users)) {
        return [
            "error" => true,
            "message" => "Username already exists!"
        ];
    }

    if (!preg_match("/^.{8,}$/", $password)) {
        return [
            "error" => true,
            "message" => "Password must be at least 8 characters long!"
        ];
    }

    if ($password !== $confirmPassword) {
        return [
            "error" => true,
            "message" => "Password didn't match!"
        ];
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user (username, password) VALUES ('$username', '$password')");

    if (mysqli_affected_rows($conn) > 0) {
        return [
            "success" => true,
            "message" => "Sign up success!"
        ];
    } else {
        return [
            "error" => true,
            "message" => "Failed to sign up. Try again!"
        ];
    }
}

/**
 * Function to validate user login
 *
 * @param array $user
 * @return bool
 */
function userLogin($user)
{
    $conn = connect();
    $username = mysqli_real_escape_string($conn, $user["username"]);
    $password = mysqli_real_escape_string($conn, $user["password"]);
    $user = query("SELECT * FROM user WHERE username = '$username'");

    if (empty($user)) {
        return false;
    }

    if (password_verify($password, $user["password"])) {
        $_SESSION["username"] = $user["username"];
        return true;
    }
    return false;
}

/**
 * Function to validate user login
 *
 * @param array $user
 * @return void
 */
function validateLogin($user)
{
    if (userLogin($user)) {
        header("Location: index");
        exit;
    } else {
        echo "Incorrect username or password!";
    }
}

/**
 * Function to check cookie login is valid or not
 *
 * @return void
 */
function checkCookieLogin()
{
    if (isset($_COOKIE["user_id"], $_COOKIE["user_key"], $_COOKIE["user_auth"])) {
        $id = $_COOKIE["user_id"];
        $key = $_COOKIE["user_key"];
        $auth = $_COOKIE["user_auth"];
        $user = query("SELECT * FROM user WHERE id = $id");

        if ($key === hash("sha256", $user["username"]) && $auth === hash("sha256", $user["password"])) {
            $_SESSION["username"] = $user["username"];
        }
    }
}

/**
 * Function to check user is logged in or not
 *
 * @return void
 */
function checkUserLogin()
{
    if (!isset($_SESSION["username"])) {
        header("Location: login");
        exit;
    }
  }