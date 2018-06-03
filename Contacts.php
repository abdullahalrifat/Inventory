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

                <table class="table" id="manageContactTable">
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
                    <?php include "php_action/fetchContact.php"?>
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

            <form class="form-horizontal" id="submitCategoriesForm" action="php_action/createContact.php" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Add Contact</h4>
                </div>
                <div class="modal-body">

                    <div id="add-categories-messages"></div>

                    <div class="form-group">
                        <label for="type" class="col-sm-4 control-label">Contact Type: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <select class="form-control" id="type" name="type">
                                <option value="-1">~~SELECT~~</option>
                                <option value="1"> Supplier </option>
                                <option value="2"> Customer </option>

                            </select>
                        </div>
                    </div> <!-- /form-group-->
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Name: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="name" placeholder="" name="name" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company" class="col-sm-4 control-label">Company: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="company" placeholder="" name="company" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mobile" class="col-sm-4 control-label">Mobile/phone: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="mobile" placeholder="" name="mobile" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">Email: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="email" placeholder="" name="email" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-4 control-label">Address: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="address" placeholder="" name="address" autocomplete="off">
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
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Add Contact</h4>
                </div>
                <div class="modal-body">

                    <div id="add-categories-messages"></div>

                    <div class="form-group">
                        <label for="edittype" class="col-sm-4 control-label">Contact Type: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <select class="form-control" id="edittype" name="edittype">
                                <option value="-1">~~SELECT~~</option>
                                <option value="1"> Supplier </option>
                                <option value="2"> Customer </option>

                            </select>
                        </div>
                    </div> <!-- /form-group-->
                    <div class="form-group">
                        <label for="editname" class="col-sm-4 control-label">Name: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="editname" placeholder="" name="editname" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editcompany" class="col-sm-4 control-label">Company: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="editcompany" placeholder="" name="editcompany" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editmobile" class="col-sm-4 control-label">Mobile/phone: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="editmobile" placeholder="" name="editmobile" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editemail" class="col-sm-4 control-label">Email: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="editemail" placeholder="" name="editemail" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editaddress" class="col-sm-4 control-label">Address: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="editaddress" placeholder="" name="editaddress" autocomplete="off">
                        </div>
                    </div><!-- /form-group-->

                </div> <!-- /modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>

                    <button type="submit" class="btn btn-primary" id="createCategoriesBtn" data-loading-text="Loading..." onclick="updateContact()" autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                </div> <!-- /modal-footer -->
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

    function editContact(id,type,name,company,mobile,email,address) {
        //alert(name);
        ids=id;
        //alert(id+" "+entry+" "+amount+" "+date);
        document.getElementById("edittype").value=type;
        document.getElementById("editname").value=name;
        document.getElementById("editcompany").value=company;
        document.getElementById("editmobile").value=mobile;
        document.getElementById("editemail").value=email;
        document.getElementById("editaddress").value=address;
        //getting airlines88
    }
    function updateContact()
    {
        var type=document.getElementById("edittype").value;
        var name=document.getElementById("editname").value;
        var company=document.getElementById("editcompany").value;
        var mobile=document.getElementById("editmobile").value;
        var email=document.getElementById("editemail").value;
        var address=document.getElementById("editaddress").value;
        //alert(name);
        $.ajax({
            type: 'POST',
            url: 'php_action/editContact.php',
            async: false,
            data: {
                id:ids,
                type: type,
                name:name,
                company:company,
                mobile:mobile,
                email:email,
                address:address
            },
            error: function (xhr, status) {
                alert(status);
            },
            success: function (data) {
                //when found names sending them in datalist for suggetions

                alert("Successfully Updated");
                window.open("Contacts.php","_self");
            }
        });
    }
    function removeContact(t,id) {
        var rowNumber=$(t).closest('tr').index();
        var x = document.getElementById("manageContactTable").rows[rowNumber+1].cells;
        var ContactName=x[1].innerHTML;
        var r = confirm("Are You Sure To Delete "+ContactName);
        if (r == true) {
            $.ajax({
                type: 'POST',
                url: 'php_action/removeContact.php',
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
                    window.open("Contacts.php","_self");
                }
            });
        } else {

        }
        //8alert(id);

    }

</script>


<?php require_once 'includes/footer.php'; ?>
<script src="custom/js/entry.js"></script>
