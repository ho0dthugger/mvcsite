   <!DOCTYPE html>
<html>
<head>
<meta charset="utf8"> <title>Концепция MVC</title> <link rel="stylesheet" href="…/style.css"> <link rel="stylesheet"
href=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.mi
n.css" integrity="sha384-Gn5384xqQlaoWXA+058RXPxPg6fy41WvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Концепция MVC</h1>
<div>
<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
<label>
Заголовок статьи:
<input type="text" name="title" value="<?=$article['title']?>" class="form-item"
required>
</label>

<label>
Дата:
<input type="date" name="date" value="<?=$article['data']?>" class="form-item"
required>
</label>

<label>
Текст статьи:
<textarea class="form-item" name="content" required>
    <?=$article['content']?>
</textarea>
</label>

<label>
<input type="submit" value="Cохранить" class="btn">
</label>
</form>
</div>
<footer>
<p>Концепция MVC
Copyright &copy; 2018</p>
</footer>
</div>
</body>
</html>