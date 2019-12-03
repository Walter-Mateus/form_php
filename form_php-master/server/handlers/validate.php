<?php
 
 

function valid($data) {
    $errors = [];

    if (!preg_match('/^[а-яa-z0-9\-_\.]{2,25}$/i', $data['name'])) {
        $errors['name'] = 'name is not valid';
    }
    if (!preg_match('/^[0-9a-z.\-_]{1,15}@[0-9a-z.\-_]{1,14}\.[a-z]{1,10}$/i', $data['email'])) {
        $errors['email'] = 'email is not valid';
    }
    if (!preg_match('/^(\+380|380|80|0){1,4}[0-9]{9}$/', $data['phone'])) {
        $errors['phone'] = 'phone is not valid';
    }
    if (!preg_match('/^[а-яa-z0-9\-_\.]{2,25}$/i', $data['password'])) {
        $errors['password'] = 'password is not valid';
    }
    if (!(gettype($data['subscribe']) === 'boolean')) {
        $errors['subscribe'] = 'subscribe is not valid';
    }

    if ($errors) {
        return $errors;
    }
    return true;
}
