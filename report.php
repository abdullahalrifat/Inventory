<?php require_once 'includes/header.php'; ?>
    <script src="custom/js/report.js"></script>
<div class="row">

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-check"></i>	Order Report By Date
			</div>
			<!-- /panel-heading -->
			<div class="panel-body">
				
				<form class="form-horizontal" action="php_action/getOrderReport.php" method="post" id="getOrderReportForm">
				  <div class="form-group">
				    <label for="startDate" class="col-sm-2 control-label">Start Date</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="startDate" name="startDate" placeholder="Start Date" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="endDate" class="col-sm-2 control-label">End Date</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="endDate" name="endDate" placeholder="End Date" />
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" id="generateReportBtn"> <i class="glyphicon glyphicon-ok-sign"></i> Generate Report</button>
				    </div>
				  </div>
				</form>

			</div>
			<!-- /panel-body -->
		</div>
	</div>
	<!-- /col-dm-12 -->
</div>
<!-- /row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-check"></i>	Order Report By Client
                </div>
                <!-- /panel-heading -->
                <div class="panel-body">
                    <form class="form-horizontal" action="php_action/getOrderReportByClient.php" method="post" id="getOrderReportFormClient">

                        <div class="form-group">
                            <label for="endDate" class="col-sm-2 control-label">Clients</label>
                            <div class="col-sm-10">
                                <select name="clientName" id="clientName" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success" id="generateReportBtn"> <i class="glyphicon glyphicon-ok-sign"></i> Generate Report</button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /panel-body -->
            </div>
        </div>
        <!-- /col-dm-12 -->
    </div>
    <!-- /row -->
    <script>
        $(document).ready(function() {

            var clientName = document.getElementById("clientName");

            var option = document.createElement("option");
            option.text = "~~SELECT~~";
            option.value=-1;
            clientName.add(option);


            $.ajax({
                type: 'POST',
                url: 'php_action/fetchCustomerContact.php',
                async:false,
                data: {
                },
                error: function (xhr, status) {
                    alert(status);
                },
                success: function(data) {
                    //when found names sending them in datalist for suggetions
                    //alert(data);
                    var obj = JSON.parse(data);

                    var datas=obj.data;
                    //alert(datas);
                    var options = '';
                    for (var key in datas) {
                        //alert(key);
                        var option = document.createElement("option");
                        option.text = datas[key].name;
                        option.value=datas[key].phone;
                        clientName.add(option);

                    }
                }
            });

        });

    </script>


<?php require_once 'includes/footer.php'; ?>