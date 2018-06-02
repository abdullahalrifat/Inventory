<?php require_once 'includes/header.php'; ?>


<div class="row">
    <div class="col-md-12">

        <ol class="breadcrumb">
            <li><a href="dashboard.php">Home</a></li>
            <li class="active">Contacts</li>
        </ol>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Contact List </div>
            </div> <!-- /panel-heading -->
            <div class="panel-body">

                <div class="remove-messages"></div>

                <div class="div-action pull pull-right" style="padding-bottom:20px;">
                    <button class="btn btn-default button1" data-toggle="modal" id="addCategoriesModalBtn" data-target="#addCategoriesModal"> <i class="glyphicon glyphicon-plus-sign"></i> Add Contact </button>
                </div> <!-- /div-action -->

                <table class="table" id="manageCategoriesTable">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Comapny</th>
                        <th>Mobile/Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th style="width:15%;">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php include "php_action/fetchEntry.php"?>
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

            <form class="form-horizontal" id="submitCategoriesForm" action="php_action/createEntry.php" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Add Contact</h4>
                </div>
                <div class="modal-body">

                    <div id="add-categories-messages"></div>

                    <div class="form-group">
                        <label for="categoriesStatus" class="col-sm-4 control-label">Contact Type: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <select class="form-control" id="" name="categoriesStatus">
                                <option value="">~~SELECT~~</option>
                                <option value=""> Supplier </option>
                                <option value=""> Customer </option>

                            </select>
                        </div>
                    </div> <!-- /form-group-->
                    <div class="form-group">
                        <label for="entryAmount" class="col-sm-4 control-label">Name: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="entryAmount" placeholder="" name="entryAmount" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="entryAmount" class="col-sm-4 control-label">Company: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="entryAmount" placeholder="" name="entryAmount" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="entryAmount" class="col-sm-4 control-label">Mobile/phone: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="entryAmount" placeholder="" name="entryAmount" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="entryAmount" class="col-sm-4 control-label">Email: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="entryAmount" placeholder="" name="entryAmount" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="entryAmount" class="col-sm-4 control-label">Address: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="entryAmount" placeholder="" name="entryAmount" autocomplete="off">
                        </div>
                    </div><!-- /form-group-->

                </div> <!-- /modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>

                    <button type="submit" class="btn btn-primary" id="createCategoriesBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
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

            <form class="form-horizontal" id="editCategoriesForm" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Entry</h4>
                </div>
                <div class="modal-body">

                    <div id="edit-categories-messages"></div>

                    <div id="add-categories-messages"></div>

                    <div class="form-group">
                        <label for="categoriesStatusEdit" class="col-sm-4 control-label">Entry Name: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <select class="form-control" id="categoriesStatusEdit" name="categoriesStatusEdit">
                                <option value="">~~SELECT~~</option>
                            </select>
                        </div>
                    </div> <!-- /form-group-->
                    <div class="form-group">
                        <label for="categoriesAmountEdit" class="col-sm-4 control-label">Amount: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="categoriesAmountEdit" placeholder="" name="categoriesAmountEdit" autocomplete="off">
                        </div>
                    </div> <!-- /form-group-->
                    <div class="form-group">
                        <label for="startDateEdit" class="col-sm-4 control-label">Entry Date: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="startDateEdit" name="startDateEdit" placeholder="Entry Date" />
                        </div>
                    </div>
                    <!-- /edit brand result -->

                </div> <!-- /modal-body -->

                <div class="modal-footer editCategoriesFooter">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>

                    <button type="submit" class="btn btn-success" id="editCategoriesBtn" onclick="updateEntry()" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
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

<!-- categories brand -->

<!-- /categories brand -->
<script>
    var ids=0;
    $(document).ready(function() {
        var categoriesStatus = document.getElementById("categoriesStatus");
        var categoriesStatusEdit = document.getElementById("categoriesStatusEdit");
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
                for (var key in datas) {
                    if (datas.hasOwnProperty(key)) {
                        var option = document.createElement("option");
                        option.text = datas[key].Name;
                        option.value=datas[key].id;
                        categoriesStatusEdit.add(option);
                    }
                }
            }
        });
    });
    function editEntry(id,entry,amount,date) {
        //alert(name);
        ids=id;
        //alert(id+" "+entry+" "+amount+" "+date);
        document.getElementById("categoriesStatusEdit").value=entry;
        document.getElementById("categoriesAmountEdit").value=amount;
        document.getElementById("startDateEdit").value=date;
        //getting airlines88
    }
    function updateEntry()
    {
        var categoriesStatusEdit=document.getElementById("categoriesStatusEdit").value;
        var categoriesAmountEdit=document.getElementById("categoriesAmountEdit").value;
        var startDateEdit=document.getElementById("startDateEdit").value;
        //alert(name);
        $.ajax({
            type: 'POST',
            url: 'php_action/editEntry.php',
            async: false,
            data: {
                id:ids,
                Entry: categoriesStatusEdit,
                Amount:categoriesAmountEdit,
                Date:startDateEdit
            },
            error: function (xhr, status) {
                alert(status);
            },
            success: function (data) {
                //when found names sending them in datalist for suggetions

                alert("Successfully Updated");
                window.open("Entry.php","_self");
            }
        });
    }
    function removeEntry(id) {
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
                window.open("Entry.php","_self");
            }
        });
    }

</script>


<?php require_once 'includes/footer.php'; ?>
<script src="custom/js/entry.js"></script>
