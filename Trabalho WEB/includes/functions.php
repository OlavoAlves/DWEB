<?php
include "../config/config.php";
// admin = array();
// user = array();
// books = array();

//Buscares
function searchAdmin(){
    global $connect;
    $sql = "SELECT admin_id, admin_name, admin_email, admin_born FROM adm";
    $stmt = mysqli_prepare($connect, $sql);

    $admin = array();
    if (mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)){
            array_push($admin, $row);
        }
        mysqli_free_result($result);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $admin;
}
function searchUser(){
    global $connect;
    $sql = "SELECT user_id, user_name, user_email, user_born FROM user";
    $stmt = mysqli_prepare($connect, $sql);

    $user = array();
    if (mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)){
            array_push($user, $row);
        }
        mysqli_free_result($result);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $user;
}
function searchBook(){
    global $connect;
    $sql = "SELECT book_id, book_title, book_author, book_editor, book_desc, book_cover FROM books";
    $stmt = mysqli_prepare($connect, $sql);

    $books = array();
    if (mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)){
            array_push($books, $row);
        }
        mysqli_free_result($result);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $books;
}
//Buscares por Id (editar!)
function searchAdminId(){

}
function searchUserId(){
    
}
function searchBooksId(){
    
}
//Adicionários
function addAdmin($admin_name, $admin_email, $admin_password, $admin_born){
    global $connect;
    $script_admin_password = password_hash($admin_password, PASSWORD_DEFAULT);
    $stmt = mysqli_prepare($connect, "INSERT INTO adm (admin_name, admin_email, admin_password, admin_born) VALUES ( ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $admin_name, $admin_email, $admin_password, $admin_born);
    $ret = false;
    if(mysqli_stmt_execute($stmt)){
        $ret = true;
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return  $ret;
}
function addUser($user_name, $user_email, $user_password, $user_born){
    global $connect;
    $script_user_password = password_hash($user_password, PASSWORD_DEFAULT);
    $stmt = mysqli_prepare($connect, "INSERT INTO user (user_name, user_email, user_password, user_born) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $user_name, $user_email, $user_password, $user_born);
    $ret = false;
    if(mysqli_stmt_execute($stmt)){
        $ret = true;
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return  $ret;
}
function addBook($book_title, $book_author, $book_editor, $book_desc, $book_cover){
    global $connect;
    $stmt = mysqli_prepare($connect, "INSERT INTO book (book_title, book_author, book_editor, book_desc, book_cover) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssss", $book_title, $book_author, $book_editor, $book_desc, $book_cover);
    $ret = false;
    if(mysqli_stmt_execute($stmt)){
        $ret = true;
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $ret;
}

//Editares
function editAdmin($admin_id, $admin_name, $admin_email, $admin_born){
    global $connect;
    $sql = "UPDATE adm SET admin_name = ?, admin_email = ?, admin_born = ? WHERE admin_id = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "isss", $admin_id, $admin_name, $admin_email, $admin_born);
    $ret = false;
    if(mysqli_stmt_execute($stmt)){
        $ret = true;
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $ret;
}
function editUser($user_id, $user_name, $user_email, $user_born){
    global $connect;
    $sql = "UPDATE user SET user_name = ?, user_email = ?, user_born = ? WHERE user_id = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "isss", $user_id, $user_name, $user_email, $user_born);
    $ret = false;
    if(mysqli_stmt_execute($stmt)){
        $ret = true;
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $ret;
}
function editBook($book_id, $book_title, $book_cover, $book_author, $book_editor, $book_desc){
    global $connect;
    $sql = "UPDATE bookies SET book_title = ?, book_cover = ?, book_author = ?, book_editor = ?, book_desc = ? WHERE book_id = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "isssss", $book_id, $book_title, $book_cover, $book_author, $book_editor, $book_desc);
    $ret = false;
    if(mysqli_stmt_execute($stmt)){
        $ret = true;
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $ret;
}

//Excluiris
function delAdmin($admin_id){
    global $connect;
    $sql = "DELETE FROM adm WHERE admin_id = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "i", $admin_id);
    $ret = false;
    if(mysqli_stmt_execute($stmt)){
        $ret = true;
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $ret;
}
function delUser($user_id){
    global $connect;
    $sql = "DELETE FROM user WHERE user_id = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    $ret = false;
    if(mysqli_stmt_execute($stmt)){
        $ret = true;
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $ret;
}
function delBook($book_id){
    global $connect;
    $sql = "DELETE FROM books WHERE books_id = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "i", $books_id);
    $ret = false;
    if(mysqli_stmt_execute($stmt)){
        $ret = true;
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return $ret;
}
//Loguines
function loginUser($user_email, $user_password){
    global $connect;
    $sql = "SELECT user_id, user_name, user_email, user_password FROM user WHERE user_email = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user_email);
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
        if(password_verify($user_password, $user["user_password"])){
            mysqli_close($connect);
            unset($user["user_password"]);
            return $user;
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return false;
}
function loginAdmin($admin_email, $admin_password){
    global $connect;
    $sql = "SELECT admin_id, admin_name, admin_email, admin_password FROM adm WHERE admin_email = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "s", $admin_email);
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        $admin = mysqli_fetch_assoc($result);
        if(password_verify($admin_password, $admin["admin_password"])){
            mysqli_close($connect);
            unset($admin["admin_password"]);
            return $admin;
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    return false;
}
?>