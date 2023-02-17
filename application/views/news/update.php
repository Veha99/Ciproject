<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<style>
        body{
            width: 15%;
            margin:auto;
            margin-top:200px;
        }

        #inp{
            margin-bottom: 25px;
        }

        .iform{
            padding:10px 15px;
            background-color: #F0F8FF;
            border:solid 1px black;
        }
    </style>
    <?php echo form_open('news/update_data'); ?>
    <div class="iform">    
        <h2>Update Form</h2><br>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <label for="title">Title</label>
        <input type="text" name="title" id="" value="<?php echo $news_row->title?>"><br><br>
        <label for="text">Text</label>
        <input type="text" name="text" id="" value="<?php echo $news_row->text?>"><br><br>
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="" value="<?php echo $news_row->slug?>"><br></br>
        <input type="submit" name="submit" id="" value="Make Change"><br><br>
        <a href="<?= site_url("/news/")?>"><button type="button" class="btn btn-danger">Close</button></a>
    </div>
</body>
</html>