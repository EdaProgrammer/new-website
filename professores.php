<?php include "class/professors.php" ?>
<!DOCTYPE html>
<html>
<head>
  <?php include "header.php"; ?>
</head>
<body>
  <?php session_start(); $menuSelected = 3; include "menu.php" ?>
  <div id="content">
    <header>Professores <?php include "login.php" ?></header>
    <div id="main-content" class="professors-main">
      <?php foreach (Professors::getAll() as $professor) { ?>
        <a href="professor.php?id=<?= $professor['idprofessor'] ?>" class="professor-link">
          <div class="professor">
            <div class="professor-img" style="background-image: url(fotos-professores/<?= $professor['foto'] ?>);"></div>
            <h2><?= $professor['nome'] ?></h2>
          </div>
        </a>
      <?php } ?>
    </div>
  </div>
</body>
</html>