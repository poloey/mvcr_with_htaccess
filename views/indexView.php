<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>hello</title>
</head>
<body>
  <ul>
    <?php foreach (Teacher::allTeacher() as $teacher): ?>
      <li><?= $teacher->name ?></li>
    <?php endforeach ?>
  </ul>
</body>
</html>
