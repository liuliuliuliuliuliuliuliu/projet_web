<?php
    User::addSqlQuery('USER_LIST',
    'SELECT * FROM USER ORDER BY USER_LOGIN');

    User::addSqlQuery('USER_GET_WITH_LOGIN_AND_PASSWORD',
    'SELECT * FROM USER WHERE USER_LOGIN=:login');

    User::addSqlQuery('USER_CREATE',
    'INSERT INTO USER (USER_ID, USER_LOGIN, USER_PWD, USER_EMAIL, USER_NAME, USER_SURNAME) VALUES
    (NULL, :login, :pwd, :email, :name, :surname)');

    User::addSqlQuery('USER_CONNECT',
    'SELECT * FROM USER WHERE USER_LOGIN=:login and USER_PWD=:password');
?>