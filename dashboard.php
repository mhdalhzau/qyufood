                        <li class="mb-2">
                            <a href="products.php" class="block px-4 py-2 hover:bg-blue-600 rounded">Produk</a>
                        </li>
                        <li class="mb-2">
                            <a href="transaction.php" class="block px-4 py-2 hover:bg-blue-600 rounded">Transaksi</a>
                        </li>
                        <li class="mb-2">
                            <a href="transaction_history.php" class="block px-4 py-2 hover:bg-blue-600 rounded">Riwayat Transaksi</a>
                        </li>
                        <li class="mb-2">
                            <a href="sales_report.php" class="block px-4 py-2 hover:bg-blue-600 rounded">Laporan Penjualan</a>
                        </li>
                    </ul>
                </nav>
            </aside>
            <main class="flex-1 p-6">
                <h2 class="text-2xl font-bold mb-6">Dashboard</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold mb-2">Total Produk</h3>
                        <p class="text-3xl font-bold text-blue-600"><?php echo $total_products; ?></p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold mb-2">Transaksi Hari Ini</h3>
                        <p class="text-3xl font-bold text-green-600"><?php echo $total_transactions; ?></p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold mb-2">Pendapatan Hari Ini</h3>
                        <p class="text-3xl font-bold text-purple-600">Rp <?php echo number_format($today_income, 0, ',', '.'); ?></p>
                    </div>
                </div>
                
                <div class="bg-white p-4 rounded-lg shadow mb-4">
                    <h3 class="text-lg font-semibold mb-2">Aktivitas Terbaru</h3>
                    <p>Fitur ini akan menampilkan transaksi terbaru...</p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
