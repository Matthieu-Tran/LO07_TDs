<!-- ----- début viewInsert -->

<?php
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>

        <form role="form" method='get' action='router2.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='prodCreated'>
                <label class='w-25' for="id">Nom : </label><input type="text" name='nom' size='75' value='Tran'> <br />
                <label class='w-25' for="id">Prenom : </label><input type="text" name='prenom' value='Matthieu'> <br />
                <label class='w-25' for="id">Region : </label><input type="text" step='any' name='region' value='Bourgogne'> <br />
            </div>
            <p />
            <br />
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p />
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

    <!-- ----- fin viewInsert -->