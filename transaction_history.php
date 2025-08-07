<?php
session_start();
require 'config/db.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
// Filter tanggal
$start_date = $_GET['start_date'] ?? date('Y-m-01');
$end_date = $_GET['end_date'] ?? date('Y-m-d');
// Ambri transaksi
$stmt = $conn->prepare("SELECT * FROM transactions 
                       WHERE DATE(transaction_date) BETWEEN :start_date AND :end_date
                       ORDER BY transaction_date DESC");
$stmt->bindParam(':start_date', $start_date);
$stmt->bindParam(':end_date', $end_date);
$stmt->execute();
$transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <?php include 'partials/navbar.php'; ?>
    <div class="flex flex-1">
        <?php include 'partials/sidebar.php'; ?>
        <main class="flex-1 p-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                <h2 class="text-2xl font-bold mb-4 md:mb-0">Riwayat Transaksi</h2>
