<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload & Copy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f8fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: #fff;
            padding: 30px;
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        input[type="file"] {
            display: block;
            width: 100%;
            padding: 10px;
            background: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background: #eef6ff;
            margin-bottom: 15px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #007bff;
            border: none;
            color: white;
            font-weight: bold;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #0056b3;
        }

        p {
            margin: 10px 0;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Upload Image</h1>

        @php
            $uploadedUrl = session('uploaded_url');
        @endphp

        @if ($uploadedUrl)
            <p>Uploaded URL:</p>
            <input type="text" value="{{ $uploadedUrl }}" readonly>
        @else
            <p>No uploaded URL found in session.</p>
        @endif

        <form method="POST" action="{{ url('upload-copy-test') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" required>
            <button type="submit" class="btn">Upload</button>
        </form>
    </div>
</body>

</html>
