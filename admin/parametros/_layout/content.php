<div class="row justify-content-center">
    <div class="col-md-4" id="col_form">
        <?php require_once "form.php"?>
    </div>
    <div class="col-md-8">
        <div id="dataContainer">
        <?php
        $listarParametros = $controller->listarParametros();
        $linksPaginate = $controller->links;
        $i = 0;
        require_once "table.php";
        ?>
        </div>
    </div>
</div>