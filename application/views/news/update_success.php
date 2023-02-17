<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <style>
        h1{
            color: green;
            /* text-align: center; */
            padding-top: 200px;;
        }

        body{
            width:40%;
            margin:auto;
        }

        button{
            margin: 20px 50px 0 0;
        }
    </style>
    <h1>Item Updated Seccessfully</h1>
    <a href="<?= site_url("/news/")?>" class="btnback"><button type="button" class="btn btn-success">Go back</button></a>
</body>
</html>