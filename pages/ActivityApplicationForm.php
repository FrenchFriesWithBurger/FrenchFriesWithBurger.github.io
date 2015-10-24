<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		input[type=number]{
			width: 80px;
		}
		input[type=date]{
			width: 160px;
		}
		input[type=time]{
			width: 160px;
		}
		#option { font-size: 18px;}
	</style>
	<script src="../bower_components/jquery/dist/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#hide").click(function(){
				$("#p").hide();
				$("#pp").hide();
				$("#pp1").hide();
				$("#p3").hide();
				$("#p4").hide();
				$("#p5").hide();
			});
			$("#show").click(function(){
				$("#p").show();
				$("#pp").show();
				$("#pp1").show();
			});
		});
		$(document).ready(function(){
			$("#hide2").click(function(){
				$("#p2").hide();
			});
			$("#show2").click(function(){
				$("#p2").show();
			});
		});
		$(document).ready(function(){
			$("#hide3").click(function(){
				$("#p3").hide();
				$("#p4").hide();
				$("#p5").hide();
				
			});
			$("#show3").click(function(){
				$("#p3").show();
				$("#p4").show();
				$("#p5").show();

			});
		});
		
		$(document).ready(function() {
			$(':radio[value=no]').change(function(){
				$(':radio[value=no2]').prop('checked',true);
			});
		});
	var venueNum=1;	
// append row to the HTML table		
	function appendVenueRow() {
		var tbl = document.getElementById('my-table2'), // table reference
			row = tbl.insertRow(tbl.rows.length),      // append table row
			i;
			tbl.deleteRow(tbl.rows.length - 2);
			
		// insert table cells to the new row
		for (i = 0; i < tbl.rows[0].cells.length-1; i++) {
			var venueString="<?php $db = new mysqli("localhost","root","","succs");$result=$db->query("select venue_name from venue");if($result->num_rows>0){while($row=$result->fetch_assoc()){if($row['venue_name']=="Main Auditorium"){echo "<option id='option' disabled>Main</option>";}else if($row['venue_name']=="2C Classroom"){echo "<option id='option' disabled>Classroom</option>";}echo "<option value='".$row['venue_name']."'>".$row['venue_name']."</option>";}}?>";
			var venueID='equitment_'+venueNum;

			$('#my-table2').append('<tr><td valign="top"><select class="form-control" name="'+venueID+'"><option style="display:none">Select a Venue</option>'+venueString+'</select></td><td valign="top"><button type="button" class="btn btn-default" onclick="SomeDeleteRowFunction(this)">Delete</button></td></tr>');
			$('#my-table2').append('<tr><td  align="center"><p id="pp1"><button type="button" class="btn btn-default" onClick="javascript:appendVenueRow()">&nbsp+&nbsp </button></p></td></tr>');
		
		}
		venueNum++;
	}

var EquipmentNum=1;
function appendEquipmentRow() {
    var tbl = document.getElementById('my-table'), // table reference
        row = tbl.insertRow(tbl.rows.length),      // append table row
		i;
        tbl.deleteRow(tbl.rows.length - 2);
		
    // insert table cells to the new row
    for (i = 0; i < tbl.rows[0].cells.length-1; i++) {
		var equipmentString="<?php $db = new mysqli("localhost","root","","succs");$result=$db->query("select item_name from equipment_store");if($result->num_rows>0){while($row=$result->fetch_assoc()){echo "<option value='".$row['item_name']."'>".$row['item_name']."</option>";}}?>";
		var equipmentID='equitment_'+EquipmentNum;

		$('#my-table').append('<tr><td valign="top"><select  class="form-control" name="'+equipmentID+'"><option style="display:none">Select Equipment</option>'+equipmentString+'</select></td><td valign="top"><input type="number" name="Input8" class="form-control"  size="10"></td><td valign="top"><button type="button" class="btn btn-default" onclick="SomeDeleteRowFunction(this)">Delete</button></td></tr>');
		$('#my-table').append('<tr><td colspan="2" align="center"><p id="p5"><button type="button" class="btn btn-default" onClick="javascript:appendEquipmentRow()">&nbsp+&nbsp </button></p></td></tr>');

		}
		EquipmentNum++;
}



// delete table rows with index greater then 0
function deleteVenueRows() {
    var tbl = document.getElementById('my-table2'), // table reference
        lastRow = tbl.rows.length - 2,             // set the last row index
        i;
    // delete rows with index greater then 0
    for (i = lastRow; i > 0; i--) {
        tbl.deleteRow(i);
    }
}

function deleteEquipmentRows() {
    var tbl = document.getElementById('my-table'), // table reference
        lastRow = tbl.rows.length - 2,             // set the last row index
        i;
    // delete rows with index greater then 0
    for (i = lastRow; i > 0; i--) {
        tbl.deleteRow(i);
    }
}

function deleteboth(){
    deleteVenueRows();
    deleteEquipmentRows();
}

 function SomeDeleteRowFunction(o) {
     //no clue what to put here?
     var p=o.parentNode.parentNode;
         p.parentNode.removeChild(p);
    }
 
// create DIV element and append to the table cell


	</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Activity Application Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>



        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong><em>
                          Activity Approval Form </em></strong></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                      <div class="form-group">
                                            
                                            
                                            <table width="620" border="0">
                                              <tr>
                                                <td width="195" height="51"><label>Proposer</label></td>
                                                <td width="62">:</td>
                                                <td width="324"><input name="proposer" class="form-control" size="50" placeholder="Enter Proposer Name"></td>
                                              </tr>
											  <tr>
                                                <td height="52"><label>Name of Event</label></td>
                                                <td>:</td>
                                                <td><input name="event_name" class="form-control" size="50" placeholder="Enter Name of Event"></td>
                                              </tr>
											  <tr>
                                                <td height="52"><label>Name of the Society In-charged</label></td>
                                                <td>:</td>
                                                <td><input name="society_in_charged" class="form-control" size="50" placeholder="Enter Name of the Society In-charged"></td>
                                              </tr>
											  <tr>
											  <td height="52"><label>Contact Number</label></td>
                                                <td>:</td>
                                                <td><input name="contact_number" class="form-control" size="50" placeholder="example : xxx-xxxxxxx"></td>
											  </tr>
                                              <tr>
                                                <td height="52"><label>Summary of the Event</label></td>
                                                <td>:</td>
                                                <td><textarea name="event_summary" cols="100" rows="3" class="form-control" placeholder="Enter Summary of the Event" size="fixed"></textarea></td>
                                              </tr>
											  <tr>
                                                <td height="52"><label>School Dean/Consultant's Name</label></td>
                                                <td>:</td>
                                                <td><input name="consultant_name" class="form-control" placeholder="Enter School Dean/Consultant's Name"></td>
                                              </tr>
											  <tr>
                                                <td height="49" colspan="3"><strong>
                                                  <label><em><u>Detail of th Event</u></em></label>
                                                </strong></td>                                       
                                              </tr>
											  <tr>
                                                <td height="49"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDate</label></td>
                                                <td>:</td>
                                                <td>
												<table>
												<tr>
												<td><input type="date" name="date_start" class="form-control" size="50" ></td>
												<td> &nbsp &nbspto &nbsp &nbsp </td>
                                                <td><input type="date" name="date_end" class="form-control" size="50" ></td>
												</tr>
												</table>
												</td>
                                              </tr>
											  <tr>
                                                <td height="49"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTime</label></td>
                                                <td>:</td>
                                                <td>
												<table>
												<tr>
												<td><input type="time" name="time_start" class="form-control" size="50" ></td>
												<td> &nbsp &nbspto &nbsp &nbsp </td>
                                                <td><input type="time" name="time_end" class="form-control" size="50" ></td>
												</tr>
												</table>
												</td>
                                              </tr>
											  <tr>
												<td height="49" valign="top"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVenue</label></td>
												<td valign="top">:</td>	
												<td><label class="radio-inline"><input type="radio" name="venue" id="show" value="yes">Yes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                <input type="radio" name="venue" id="hide" checked onClick="deleteboth()" value="no">No</label>
												<table id="my-table2">
													<tr>
													<td>
													<p id="p" style="display:none">
														<select  class="form-control">
															<option style="display:none" name="venue_">Select a Venue</option>
															<?php
																$db = new mysqli("localhost","root","","succs");
																$result=$db->query("select venue_name from venue");
		
																if($result->num_rows>0){
																	while($row=$result->fetch_assoc()){
																		if($row['venue_name']=="Main Auditorium"){
																			echo "<option id='option' disabled>Main</option>";
																		}else if($row['venue_name']=="2C Classroom"){
																			echo "<option id='option' disabled>Classroom</option>";
																		}
																		echo "<option value='".$row['venue_name']."	'>".$row['venue_name']."</option>";
																		
																	}
																}
															?>
														</select>
													</p>
													<td>
													</tr>
													<tr>
														<td align="center">
														<p id="pp1" style="display:none"><button type="button" class="btn btn-default" onClick="javascript:appendVenueRow()">&nbsp+&nbsp </button></p>
													</tr>
												</table>
														</br>
													<p id="pp" style="display:none">
															<label>Required Equipment?&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
															<label class="radio-inline"><input type="radio" name="equitment" id="show3" value="yes">Yes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
															<input type="radio" name="equitment" id="hide3" checked onClick="deleteEquipmentRows()" value="no2">No</label>
														<table id="my-table">
														<tr>
														<td>
														<p id="p3" style="display:none">
														<select  class="form-control">
															<option style="display:none" name="equitment_0">Select Equipment</option>
															<?php
																$db = new mysqli("localhost","root","","succs");
																$result=$db->query("select item_name from equipment_store");
																if($result->num_rows>0){
																	while($row=$result->fetch_assoc()){
																		echo "<option value='".$row['item_name']."	'>".$row['item_name']."</option>";
																	}
																}
															?>
														</select>
														</p>
														</td>
														<td>
														<p id="p4" style="display:none"><input type="number" name="Input8" class="form-control"></p>
														</td>													
														</tr>
														<tr>
														<td colspan="2" align="center">
														<p id="p5" style="display:none"><button type="button" class="btn btn-default" id="add" onClick="javascript:appendEquipmentRow()">&nbsp+&nbsp </button></p>
														</tr>
														</table>
													</p>
													</td>
												</td>
                                              </tr>
											  <tr>
                                                <td height="49" colspan="3"><strong>
                                                  <label><em><u>Apply DOuble 3 Teaching & Learning Programme</u></em></label>
                                                </strong></td>                                       
                                              </tr>
											  <tr>
												<td height="49"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSecond Transcript</label></td>
												<td>:</td>	
												<td><label class="radio-inline"><input type="radio" name="2nds" id="show2" >Yes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                <input type="radio" name="2nds" id="hide2" class="asd" checked>No</label>
													<p id="p2" style="display:none">
													<select  class="form-control">
														<option style="display:none">Select a Catogory</option>
														<option>Major Activities of UC</option>
														<option>Event Organizer</option>
														<option>Talent & Creativity Performance</option>
														<option>Social Service & Humanity Spirit</option>
														<option>Morality & Personality Development</option>
														<option>Competition & Activities Representative</option>
													</select>
													</p>
												</td>
                                              </tr>
											  <tr>
												<td height="49" colspan="3"><strong>
													<label><em><u>Upload Proposar File</u></em></label>
												</strong></td>                                       
											  </tr> 
											  <tr>
                                                <td>
												<input type="file" name="InpurFile" required>
												</td>                                       
                                              </tr>
                                        </table>
                                   	  </div>
                                        <div class="form-group">
                                            <label></label>
                                        </div>
                                      <div class="form-group">
                                            <label></label>
                                            <label class="radio-inline"></label>
                                      </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              <div class="col-lg-6"></div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
																																							


    <!-- jQuery -->
    
	   
    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
