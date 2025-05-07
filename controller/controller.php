<?php

function handleForm() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = isset($_POST['login']) ? trim($_POST['login']) : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $admin = isset($_POST['admin']) ? 1 : 0;

        if (!empty($login) && !empty($password)) {
            return [
                'login' => htmlspecialchars($login),
                'password_masked' => str_repeat("*", strlen($password)),
                'admin' => $admin,
                'error' => false
            ];
        } else {
            return ['error' => true];
        }
    }
    return null;
}
