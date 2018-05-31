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
<script>
    var ids=0;
    $(document).ready(function() {
        var categoriesStatus = document.getElementById("categoriesStatus");
        $.ajax({
            type: 'POST',
            url: 'php_action/fetchExpenseTypeOption.php',
            async: false,
            data: {
            },
            error: function (xhr, status) {
                alert(status);
            },
            success: function (data) {
                //when found names sending them in datalist for suggetion
                // alert(data);


                var obj = JSON.parse(data);

                var datas=obj.expense;
                for (var key in datas) {
                    if (datas.hasOwnProperty(key)) {
                        var option = document.createElement("option");
                        option.text = datas[key].Name;
                        option.value=datas[key].id;
                        categoriesStatus.add(option);
                    }
                }
            }
        });
    });
    function editExpenseType(id,entry,amount,date) {
        //alert(name);
        ids=id;
        var editentryName = document.getElementById("editentryName");
        var editentryType = document.getElementById("editentryType");
        document.getElementById("editentryName").value=name;
        document.getElementById("editentryType").value=type;
        //getting airlines88
    }
    function updateExpenceType()
    {
        var name=document.getElementById("editentryName").value;
        var type=document.getElementById("editentryType").value;
        //alert(name);
        $.ajax({
            type: 'POST',
            url: 'php_action/editExpenseType.php',
            async: false,
            data: {
                id:ids,
                Name: name,
                Type:type
            },
            error: function (xhr, status) {
                alert(status);
            },
            success: function (data) {
                //when found names sending them in datalist for suggetions

                alert("Successfully Updated");
            }
        });
    }
    function removeExpenseType(id) {
        //8alert(id);
        $.ajax({
            type: 'POST',
            url: 'php_action/removeEntry.php',
            async: false,
            data: {
                id:id
            },
            error: function (xhr, status) {
                alert(status);
            },
            success: function (data) {
                //when found names sending them in datalist for suggetions

                alert("Successfully Deleted");
            }
        });
    }

</script>


<?php require_once 'includes/footer.php'; ?>
<script src="custom/js/report.js"></script>
