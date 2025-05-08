<?php
    require('header.php');
?>

<h1 style="color: white; font-size: 3em;">Email List</h1>
<form action="emailSubmit.php" method="post">
    <p style="color: white; font-size: 2em; text-align: center;">Click all boxes below for projects you want to be updated on</p>
    <div class="chxbox">
    <input type="email" id="email" name="email" required placeholder="Enter your email" /><br /><br />
        <input type="checkbox" name="PkmnTundra" value="1"> Pokemon: Tundra<br />
        <input type="checkbox" name="EternalWinter" value="1"> Eternal Winter of Tephra<br />
        <input type="checkbox" name="UpgradeAcademy" value="1"> Upgrade Academy<br />
        <input type="checkbox" name="RicoSeige" value="1"> Ricoseige<br />
        <input type="checkbox" name="OfAngelsOfDemons" value="1"> Of Angels/Of Demons<br />
        <input type="checkbox" name="PkmnVR" value="1"> PokemonVR<br />
        <input type="checkbox" name="60SecsIsland" value="1"> 60 Seconds: Island<br />
        <input type="checkbox" name="NS_SeaTurtle" value="1"> Natural Selection: Sea Turtle<br />
        <input type="checkbox" name="BestGame" value="1"> Best Game<br />
        <input type="checkbox" name="Concepts" value="1"> Concepts<br /><br />
        <input type="submit"> 
    </div>
</form>

<?php
    require('footer.php');
?>
