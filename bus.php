<!DOCTYPE html>
<html lang="zxx">
    
    <?php

header("Location: https://boimate.com/jkkniu/no.php", true, 301);

exit();

?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="images/favicon.png">
	<title>Bus Schedule</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/line-awesome.css">
	<link rel="stylesheet" href="css/line-awesome-font-awesome.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/animsition.css">
	<link rel="stylesheet" href="css/style.css">
<style>
#customers {
  font-family: SolaimanLipi;
  border-collapse: collapse;
  width: 100%;
  color: black!important;
}

#customers td, #customers th {
  border: 1.5px solid #ddd;
  padding: 7px;
}
#
#customers tr:nth-child(even){background-color: #8f5353;}

#customers tr:hover {background-color: #d3edd4; color: black;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}

.rback{
		background:#ffffff;
		}
		.texttable{
		 text-align:center;
		}


</style>
</head>
<body class="animsition" onmousedown="return false" onselectstart="return false">
	
	<!-- navbar -->
		<div class="container">
			<div class="content">
			<h2><a href="" class="link-back"><button class="button waves-effect floating-button blue b-shadow"><i class="fa fa-arrow-left"></i></button></a></h2>
			</div>
	    </div>
	<!-- end navbar -->
	<!--
	<div class="tabs b-shadow"><center><p><b>আপডেটেড বাস শিডিউল পেতে অ্যাপটি <a href="https://play.google.com/store/apps/details?id=me.effat.jkkniu">প্লে স্টোর থেকে</a> <br>লেটেস্ট ভার্সনে আপডেট রাখুন।</b></p></center>
	</div> -->

	<!-- tabs -->
	<div class="tabs-page segments-page">
		<div class="container">
			<div class="tabs b-shadow">
				<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
					<a href="#nav-tabs1" class="nav-item nav-link active" id="nav-tabs1-tab" data-toggle="tab" role="tab" aria-controls="nav-tabs1" aria-selected="true">শিক্ষার্থী</a>
					<a href="#nav-tabs2" class="nav-item nav-link" id="nav-tabs2-tab" data-toggle="tab" role="tab" aria-controls="nav-tabs2" aria-selected="false">শিক্ষক এবং কর্মকর্তা</a>
					<a href="#nav-tabs3" class="nav-item nav-link" id="nav-tabs3-tab" data-toggle="tab" role="tab" aria-controls="nav-tabs3" aria-selected="false">কর্মচারী</a>
				</div>
			</div>
			<div class="tab-content b-shadow" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-tabs1" role="tabpanel" aria-labelledby="nav-tabs1-tab">
					<div class="wrap-title">
				<center><h4>শিক্ষার্থীদের বাস</h4></center>
			</div>
			<div class="wrap-content b-shadow">
				<table id="customers">
					<thead>
						<tr>
							<th>ক্যাম্পাস থেকে ময়মনসিংহ</th>
							<th>ময়মনসিংহ থেকে ক্যাম্পাস</th>
						</tr>
					</thead>
					<tbody>
					
						<tr class="texttable">
							<td>দুপুর ২.১৫ মিনিট </td>
							<td>সকাল ৮.০০ টা</td>
						</tr>
						
						<tr class="texttable rback">
						<td>বিকাল ৩.১৫ মিনিট</td>
						<td>সকাল ৮.৪৫ মিনিট</td>
						</tr>
				
						<tr class="texttable">
							<td>বিকাল ৪.১৫ মিনিট</td>
							<td>সকাল ৯.৪৫ মিনিট</td>
						</tr>
						
						<tr class="texttable rback">
						<td>সন্ধ্যা ৭.১৫ মিনিট (লাইব্রেরি)</td>
						<td>রাত ৮.১৫ মিনিট (লাইব্রেরি)</td>
						</tr>
						
					</tbody>
				</table>
			</div>
			<br>
				<div class="wrap-content b-shadow">
				<table id="customers">
					<thead>
						<tr>
							<th>ক্যাম্পাস থেকে ভালুকা</th>
							<th>ভালুকা থেকে ক্যাম্পাস</th>
						</tr>
					</thead>
					<tbody>
						<tr class="texttable rback">
							<td>বিকাল ২.১৫ মিনিট</td>
								<td rowspan="2">সকাল ৮.২০ মিনিট</td>
						</tr>	
						<tr class="texttable">
							<td>বিকাল ৪.১৫ মিনিট</td>
						</tr>
						
				</table>
			</div>
			<br>
			<div class="wrap-title">
				<center><h4>শনিবারের বাস (লাইব্রেরি)<b>*</b></h4></center>
			</div>
			
			<div class="wrap-content b-shadow">
				<table id="customers">
					<thead>
						<tr>
							<th>ময়মনসিংহ থেকে ক্যাম্পাস</th>
							<th>ক্যাম্পাস থেকে ময়মনসিংহ</th>
						</tr>
					</thead>
					<tbody>
						<tr class="texttable rback">
							<td>সকাল ০.০০ টা</td>
							<td>দুপুর ০.০০ মিনিট</td>
						</tr>
					</tbody>
				</table>
			</div>
			<br>
			<div class="tabs b-shadow"><center>
			*শনিবার দিনের বাস লাইব্রেরি খোলা থাকা সাপেক্ষে চলাচল করবে।<br/>
			- এই শিডিউলটি সর্বশেষ আপডেট করা হয়েছে: ৭ ডিসেম্বর, ২০২২.</div>
				</div>
				
				
				<div class="tab-pane fade show" id="nav-tabs2" role="tabpanel" aria-labelledby="nav-tabs2-tab">
					<div class="wrap-title">
				<h4>মিনিবাস</h4>
			</div>
			<div class="wrap-content b-shadow">
				<table id="customers">
					<thead>
						<tr>
							<th>ক্যাম্পাস থেকে ময়মনসিংহ</th>
							<th>ময়মনসিংহ থেকে ক্যাম্পাস</th>
						</tr>
					</thead>
					<tbody>
						<tr class="texttable rback">
							<td>দুপুর ২.১০ মিনিট (শিক্ষক)</td>
							<td>সকাল ৮.২০ মিনিট (শিক্ষক, কর্মকর্তা)</td>
						</tr>
						<tr class="texttable">
							<td rowspan="2">বিকাল ৪.১০ মিনিট (শিক্ষক, কর্মকর্তা)</td>
							<td>সকাল ০৯.৩০ মিনিট (শিক্ষক)</td>
						</tr>
						<tr class="texttable rback">
							<td>সন্ধ্যা ৬.০০ টা (একটি মিনিবাস)</td>
						</tr>
					</tbody>
				</table>
			</div>
		<br>
			<div class="wrap-title">
				<h4>মাইক্রোবাস</h4>
			</div>
			
			<div class="wrap-content b-shadow">
				<table id="customers">
					<thead>
						<tr>
							<th>ত্রিশাল থানা মোড় থেকে</th>
							<th>ক্যাম্পাস থেকে</th>
						</tr>
					</thead>
					<tbody>
						<tr class="texttable rback">
							<td>সকাল ৮.৪৫ মিনিট (কর্মকর্তা)</td>
							<td>বিকাল ৪.১০ মিনিট (কর্মকর্তা)</td>
						</tr>
						<tr class="texttable">
							<td>সকাল ৯.১৫ মিনিট (শিক্ষক)</td>
							<td>দুপুর ৩.৪০ মিনিট (শিক্ষক)</td>
						</tr>
					</tbody>
				</table>
			</div>
			
				</div>
				<div class="tab-pane fade show" id="nav-tabs3" role="tabpanel" aria-labelledby="nav-tabs3-tab">
					<div class="wrap-title">
				<center><h4>কর্মচারী বাস</h4></center>
			</div>
			<div class="wrap-content b-shadow">
				<table id="customers">
					<thead>
						<tr>
							<th>ক্যাম্পাস থেকে ময়মনসিংহ</th>
							<th>ময়মনসিংহ থেকে ক্যাম্পাস</th>
						</tr>
					</thead>
					<tbody>
						<tr class="texttable rback">
							<td>বিকাল ৪.১০ মিনিট</td>
							<td>সকাল ৮.১০ মিনিট</td>
						</tr>
					</tbody>
				</table>
			</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- end tabs -->

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/jquery.filterizr.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/animsition.min.js"></script>
	<script src="js/animsition-custom.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>