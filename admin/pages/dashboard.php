<div class="container">
<div class="content">
	<h2>Tableau de bord</h2>
    <p style="color:red"><?php echo $_SESSION['login']; ?></p>
	<hr />
	<div class="row">

    <?php
        foreach($tables as $table_name  => $table):
            ?>
            <div class="col l4 m4 s12">
                <div class="card">
                    <div class="card-content <?= getColor($table,$colors) ?> white-text">
                        <span class="card-title"><?= $table_name ?></span>
                        <?php $nbrInTable = inTable($table); ?>
                        <h4><?= $nbrInTable[0] ?></h4>  
                    </div>
                </div>
            </div>
            <?php
        endforeach;
    ?>
    </div>
 </div>
</div>