<?php

session_start();
//*input collect
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$author = $_REQUEST['author'];
$errors = [];
//*validation
if($title=='tashrifaferdousbristy308@gmail.com'){
    $errors['title_error']= " ";
}else if(empty($title)){
    $errors['title_error']= "The email address or phone number that you've entrered dosen't match any account.</br>";
}else{
    $errors['title_error']= "Its looks like you entered a slight misspelling of your email or username </br>";
}
if($detail!=706050308){
    $errors['detail_error']= "Incorrect Password";
}else if(empty($detail)){
    $errors['detail_error']= "plese give password";
}
if(empty($author)){
    $errors['author_error']= "please give your varification code"; 
}
if(count($errors) > 0){
    $_SESSION['form_error'] = $errors;
    $_SESSION['old']=$_REQUEST;
header("location:../hw7_validation.php");
}
else{

}

?>