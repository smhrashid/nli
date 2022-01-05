<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>
                    Fixed Header Scrolling Table 
                </h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>PROPNO</th>
                        <th>NAME</th>
                        <th>DOB and Age</th>
                        <th>PROPDAT</th>
                        <th>PLAN</th>
                        <th>Term</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($x = 0; $x <= count($urm) - 1; $x++) {?>
                        

                    <tr onclick="window.location='urm?prop=<?= $urm[$x]->PROPNO; ?>'">
                        <td><?= $x+1; ?></td>
                        <td><?= $urm[$x]->PROPNO; ?></td>
                        <td><?= $urm[$x]->NAME; ?></td>
                        <td><?= $urm[$x]->DOB.'('.$urm[$x]->AGE.' Years)'; ?></td>
                        <td><?= $urm[$x]->PROPDAT; ?></td>
                        <td><?= $urm[$x]->PLAN; ?></td>
                        <td><?= $urm[$x]->TERM; ?></td>
                    </tr>
                   <?php
                   }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>