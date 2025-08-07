    } else {
        $error = "Username atau password salah";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login POS Dimsum</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="py-4 px-6 bg-blue-600 text-white">
                <h2 class="text-2xl font-bold">POS Dimsum - Login</h2>
            </div>
            <form method="post" class="p-6">
                <?php if (isset($error)): ?>
                <div class="mb-4 p-3 bg-red-100 text-red-700 rounded"><?php echo $error; ?></div>
                <?php endif; ?>
                
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="username">Username</label>
                    <input type="text" name="username" id="username" required
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="password">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>
