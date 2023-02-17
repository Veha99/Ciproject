<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
<body>
    <style>
        body{
            width: 30%;
            margin:auto;
            margin-top:200px;
        }

        input{
            margin-left:10px;
        }

        #inp{
            margin-bottom: 25px;
        }
        #txt{
            margin-left:13px;
        }
    </style>

    <h2>Create News item</h2>
    <?php echo validation_errors();?>
    <?php echo form_open('news/create');?>

    <label for="title">Title</label>
    <input type="text" name="title" id=""> <br><br>
    <label for="text">Text</label>
    <input type="text" name="text" id="txt"><br><br>
    <label for="slug">Slug</label>
    <input type="text" name="slug" id=""><br><br>

    <input type="submit" name="submit" id="inp" value="Submit" style="margin-left: -1px;">
    </form>
    <a href="<?= site_url("/news/")?>"><button type="button" class="btn btn-danger">Close</button></a>
</body>
</html>