<?php
session_start();

$valid_users = [
    [
        'email' => 'user@untan.ac.id',
        'username' => 'user',
        'nim' => 'C111',
        'nip' => '111',
        'password' => 'user123',
        'role' => 'user',
        'nama' => 'User'
    ]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    if (empty($email) || empty($password)) {
        header('Location: login.php?error=' . urlencode('Email/Username dan Password harus diisi'));
        exit;
    }
    
    $found_user = null;
    foreach ($valid_users as $user) {
        if (($user['email'] === $email || 
             $user['username'] === $email || 
             $user['nim'] === $email || 
             $user['nip'] === $email) && 
            $user['password'] === $password) {
            $found_user = $user;
            break;
        }
    }
    
    if ($found_user) {
        $_SESSION['user_id'] = $found_user['username'];
        $_SESSION['email'] = $found_user['email'];
        $_SESSION['username'] = $found_user['username'];
        $_SESSION['nama'] = $found_user['nama'];
        $_SESSION['role'] = $found_user['role'];
        $_SESSION['nim'] = $found_user['nim'];
        $_SESSION['nip'] = $found_user['nip'];
        $_SESSION['logged_in'] = true;
        $_SESSION['login_time'] = date('Y-m-d H:i:s');
        
        header('Location: dashboard.php');
        exit;
        
    } else {
        header('Location: login.php?error=' . urlencode('Email/Username atau Password salah'));
        exit;
    }
}

header('Location: login.php');
exit;
