<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>
<body style="background: #edf2f7;">
    <div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950 px-4">
        <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6">
            <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">New Link!</h1>
            <form method="post" action="action_add.php">
                <div class="mb-4">
                    <label for="number" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Token</label>
                    <input type="text" name="token" id="token" class="shadow-sm rounded-md px-3 py-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter token" required>
                </div>
                <div class="mb-4">
                    <label for="link" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Link</label>
                    <input type="url" name="link" id="link" class="shadow-sm rounded-md px-3 py-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter link" required>
                </div>
                <div class="mb-4">
                    <label for="comment" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Komentar</label>
                    <textarea name="komentar" id="komentar" class="shadow-sm rounded-md px-3 py-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your comment" required></textarea>
                </div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
