<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <style>
        body{
            width:80%;
            margin:auto;
            margin-top:80px;
        }

        button{
            border: none;
        }
    </style>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Text</th>
      <th scope="col">Slug</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($news as $news_item):?>
    <tr>
        <td><?php echo $news_item['title'];?></td> 
        <td><?php echo $news_item['text'];?></td> 
        <td><a href="<?php echo $news_item['slug'];?>">View Article</a></td>
        <td><a href="<?= site_url("news/delete?id={$news_item['id']}")?>"><i class='fas fa-window-close' style='font-size:25px; color:red'></a></i>
            <a href="<?= site_url("news/update?id={$news_item['id']}")?>"><i class="far fa-edit" style="font-size:20px; color:blue; padding-left:5px; "></i></a>
        </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>    
<a href="<?= site_url("/news/create")?>"><button type="button" class="btn btn-primary btn-lg">Create New Item</button></a>

</body>
</html>


