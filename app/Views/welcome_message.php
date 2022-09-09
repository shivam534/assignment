<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/bootstrap.css') ?>" />

<center>
	<h4><b>Assignment 2 :</b> </h4>
	<p>Enter Max and min age & use search to filter accordingly.
		Click any of the Column heading to sort data</p>
</center><br>

<div class="container">
	<label for="min">Minimum age:</label>
	<input type="text" id="min" name="min"></td>
	<label for="max" style="margin-left:20px"> Maximum age:</label>
	<input type="text" id="max" name="max">
	<br>
	<br>
</div>
<div class="container-fluid">

	<table id="tbl_list" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start date</th>
				<th>Salary</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Jenette Caldwell</td>
				<td>Development Lead</td>
				<td>New York</td>
				<td>30</td>
				<td>2011-09-03</td>
				<td>$345,000</td>
			</tr>
			<tr>
				<td>Yuri Berry</td>
				<td>Chief Marketing Officer (CMO)</td>
				<td>New York</td>
				<td>40</td>
				<td>2009-06-25</td>
				<td>$675,000</td>
			</tr>
			<tr>
				<td>Caesar Vance</td>
				<td>Pre-Sales Support</td>
				<td>New York</td>
				<td>21</td>
				<td>2011-12-12</td>
				<td>$106,450</td>
			</tr>
			<tr>
				<td>Doris Wilder</td>
				<td>Sales Assistant</td>
				<td>Sydney</td>
				<td>23</td>
				<td>2010-09-20</td>
				<td>$85,600</td>
			</tr>
			<tr>
				<td>Angelica Ramos</td>
				<td>Chief Executive Officer (CEO)</td>
				<td>London</td>
				<td>47</td>
				<td>2009-10-09</td>
				<td>$1,200,000</td>
			</tr>
			<tr>
				<td>Gavin Joyce</td>
				<td>Developer</td>
				<td>Edinburgh</td>
				<td>42</td>
				<td>2010-12-22</td>
				<td>$92,575</td>
			</tr>
			<tr>
				<td>Jennifer Chang</td>
				<td>Regional Director</td>
				<td>Singapore</td>
				<td>28</td>
				<td>2010-11-14</td>
				<td>$357,650</td>
			</tr>
			<tr>
				<td>Brenden Wagner</td>
				<td>Software Engineer</td>
				<td>San Francisco</td>
				<td>28</td>
				<td>2011-06-07</td>
				<td>$206,850</td>
			</tr>
			<tr>
				<td>Fiona Green</td>
				<td>Chief Operating Officer (COO)</td>
				<td>San Francisco</td>
				<td>48</td>
				<td>2010-03-11</td>
				<td>$850,000</td>
			</tr>
			<tr>
				<td>Shou Itou</td>
				<td>Regional Marketing</td>
				<td>Tokyo</td>
				<td>20</td>
				<td>2011-08-14</td>
				<td>$163,000</td>
			</tr>
			<tr>
				<td>Michelle House</td>
				<td>Integration Specialist</td>
				<td>Sydney</td>
				<td>37</td>
				<td>2011-06-02</td>
				<td>$95,400</td>
			</tr>
			<tr>
				<td>Suki Burks</td>
				<td>Developer</td>
				<td>London</td>
				<td>53</td>
				<td>2009-10-22</td>
				<td>$114,500</td>
			</tr>
			<tr>
				<td>Prescott Bartlett</td>
				<td>Technical Author</td>
				<td>London</td>
				<td>27</td>
				<td>2011-05-07</td>
				<td>$145,000</td>
			</tr>

		</tbody>
	</table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	$.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
		var min = parseInt($('#min').val(), 10);
		var max = parseInt($('#max').val(), 10);
		var age = parseFloat(data[3]) || 0;

		if (
			(isNaN(min) && isNaN(max)) ||
			(isNaN(min) && age <= max) ||
			(min <= age && isNaN(max)) ||
			(min <= age && age <= max)
		) {
			return true;
		}
		return false;
	});

	$(document).ready(function() {
		var table = $('#tbl_list').DataTable();
		$('#min, #max').keyup(function() {
			table.draw();
		});
	});
</script>
