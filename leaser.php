<?php require_once 'includes/header.php'; ?>


<div class="row">
    <div class="col-md-12">

        <ol class="breadcrumb">
            <li><a href="dashboard.php">Home</a></li>
            <li>Office</li>
            <li class="active">Add entry</li>
        </ol>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Leaser </div>
            </div> <!-- /panel-heading -->
            <div class="panel-body">

                <div class="remove-messages"></div>


                <table class="table" id="manageCategoriesTable">
                    <thead>
                    <tr>
                        <th>Entry</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Amount</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php include "php_action/fetchLeaser.php"?>
                    </tbody>
                </table>
                <!-- /table -->

            </div> <!-- /panel-body -->
        </div> <!-- /panel -->
    </div> <!-- /col-md-12 -->
</div> <!-- /row -->


<!-- /categories brand -->

<!-- categories brand -->

<!-- /categories brand -->


<?php require_once 'includes/footer.php'; ?>
<script src="custom/js/report.js"></script>
