<?php require_once 'includes/header.php'; ?>


    <div class="row">
        <div class="col-md-12">

            <ol class="breadcrumb">
                <li class="active" ><a href="dashboard.php">Home</a></li>
                <li>Office</li>
                <li >Accounting</li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Entries</div>
                </div> <!-- /panel-heading -->
                <div class="panel-body">

                    <div class="remove-messages"></div>

                    <div class="div-action pull pull-right" style="padding-bottom:20px;">
                        <button class="btn btn-default button1" data-toggle="modal" id="addCategoriesModalBtn" data-target="#addCategoriesModal"> <i class="glyphicon glyphicon-plus-sign"></i> Add Entry </button>
                    </div> <!-- /div-action -->

                    <table class="table" id="manageCategoriesTable">
                        <thead>
                        <tr>
                            <th>Entry Name</th>
                            <th>Debit/Credit</th>
                            <th style="width:15%;">Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php include "php_action/fetchExpenseType.php"?>
                        </tbody>

                    </table>
                    <!-- /table -->

                </div> <!-- /panel-body -->
            </div> <!-- /panel -->
        </div> <!-- /col-md-12 -->
    </div> <!-- /row -->


    <!-- add categories -->
    <div class="modal fade" id="addCategoriesModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <form class="form-horizontal" id="submitCategoriesForm" action="php_action/createExpenseType.php" method="POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Entry</h4>
                    </div>
                    <div class="modal-body">

                        <div id="add-categories-messages"></div>

                        <div class="form-group">
                            <label for="entryName" class="col-sm-4 control-label">Entry Name: </label>
                            <label class="col-sm-1 control-label">: </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="entryName" placeholder="Entry Name" name="entryName" autocomplete="off">
                            </div>
                        </div> <!-- /form-group-->
                        <div class="form-group">
                            <label for="entryType" class="col-sm-4 control-label">Type: </label>
                            <label class="col-sm-1 control-label">: </label>
                            <div class="col-sm-7">
                                <select class="form-control" id="entryType" name="entryType">
                                    <option value="">~~SELECT~~</option>
                                    <option value="1">Debit</option>
                                    <option value="2">Credit</option>
                                </select>
                            </div>
                        </div> <!-- /form-group-->
                    </div> <!-- /modal-body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>

                        <button type="submit" class="btn btn-primary" id="createEntryTypeBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div> <!-- /modal-footer -->
                </form> <!-- /.form -->
            </div> <!-- /modal-content -->
        </div> <!-- /modal-dailog -->
    </div>
    <!-- /add categories -->


    <!-- edit categories brand -->
    <div class="modal fade" id="editCategoriesModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <form class="form-horizontal" id="editCategoriesForm"  method="POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Entry</h4>
                    </div>
                    <div class="modal-body">

                        <div id="edit-categories-messages"></div>
                            <div class="form-group">
                                <label for="editentryName" class="col-sm-4 control-label">Entry Name: </label>
                                <label class="col-sm-1 control-label">: </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="editentryName" placeholder="Entry Name" name="editentryName" autocomplete="off">
                                </div>
                            </div> <!-- /form-group-->
                            <div class="form-group">
                                <label for="editentryType" class="col-sm-4 control-label">Type: </label>
                                <label class="col-sm-1 control-label">: </label>
                                <div class="col-sm-7">
                                    <select class="form-control" id="editentryType" name="editentryType">
                                        <option value="">~~SELECT~~</option>
                                        <option value="1">Debit</option>
                                        <option value="2">Credit</option>
                                    </select>
                                </div>
                            </div> <!-- /form-group-->
                        </div>
                        <!-- /edit brand result -->

                    </div> <!-- /modal-body -->

                    <div class="modal-footer editCategoriesFooter">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>

                        <button type="submit" class="btn btn-success" id="editCategoriesBtn" onclick="updateExpenceType()" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                    </div>
                    <!-- /modal-footer -->
                </form>
                <!-- /.form -->
            </div>
            <!-- /modal-content -->
        </div>
        <!-- /modal-dailog -->
    </div>
    <!-- /categories brand -->


    <!-- /categories brand -->
<script>
    var ids=0;
    function editExpenseType(id,name,type) {
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
            url: 'php_action/removeExpenseType.php',
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