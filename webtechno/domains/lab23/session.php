<?php
@session_start();
if ($_POST && !empty($_POST['name'])) 
{
    $_SESSION['name'] = $_POST['name'];
}
?>
<html> <head>
<meta charset="UTF-8">
<title>Создание сeccии </title>
</head>
<body>
<?php
if (isset($_SESSION['name'])) 
{
    echo 'Привет, ' . $_SESSION['name'];
    } else {
    
    echo 'Кто ты? <a href="formforsession.html">Login</a>';
    }
unset ($_SESSION['name']);
?>
</body> </html>