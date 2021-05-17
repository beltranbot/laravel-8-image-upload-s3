<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My IMage App</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
</head>
<body>
    <div class="max-w-md mx-auto py-8">
        <form action="/" method="post" enctype="multipart/form-data"
            class="flex items-center justify-between border border-gray-300 p-4 rounded">
            @csrf
            <input type="file" name="image" id="image">
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>

