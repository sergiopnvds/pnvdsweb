<?php
$db = mysql_connect('localhost', 'root', 'root') or die ('Unable to connect. Check your connection parameters');

$query = 'CREATE DATABASE IF NOT EXISTS pnvds';
mysql_query($query, $db) or die(mysql_error($db));

mysql_select_db('pnvds', $db) or die (mysql_error($db));

$query = 'CREATE TABLE users (
    user_id   INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(30)   NOT NULL,
    user_lastname VARCHAR(30)   NOT NULL,
    user_email VARCHAR(30)   NOT NULL,
    user_username VARCHAR(30)   NOT NULL,
    user_pass VARCHAR(30)   NOT NULL,
    user_phone VARCHAR(30),
    user_birth DATE NOT NULL,
    user_address VARCHAR(100),
    user_genre VARCHAR(6),
    user_nessletter VARCHAR(1),
    PRIMARY KEY (user_id)
)
ENGINE=MyISAM';
mysql_query($query, $db) or die(mysql_error($db));
?>

