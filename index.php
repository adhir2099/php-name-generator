<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Name Generator by Adhir2099</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-2xl font-bold mb-4">Random Name Generator</h1>
        <p id="generatedName" class="text-xl font-semibold mb-6">
            <?php
            if (isset($_POST['generate'])) {
                require 'name.php';
                $nameGenerator = new NameGenerator();
                echo $nameGenerator->generateRandomName();
            } else {
                echo 'Click the button to generate a name!';
            }
            ?>
        </p>
        <form method="POST" action="">
            <input type="hidden" name="generate" value="true">
            <button type="submit" id="generateButton" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 transition duration-300">
                Generate Name
            </button>
        </form>
    </div>
</body>
</html>