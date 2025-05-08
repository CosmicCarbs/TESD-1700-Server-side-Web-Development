<?php
    require('header.php');
?>
<header class="titlehead">
   <h1>Best Game</h1>
   <h2 id="BestGame">Completion Status: 0%</h2>
</header>
<div class="container">
  <div class="column images">
    <h1>Images</h1>
    <img src="IMG_20250508_022005_381.jpg" alt="Image 1">
  </div>
  <div class="column text">
  <h1>Updates</h1>
    <h3>Overview:</h3>
    <p><?php include 'BestGame.txt'; ?></p>
  </div>
</div>

<?php
    require('footer.php');
?>