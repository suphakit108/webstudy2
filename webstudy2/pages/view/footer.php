<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript" ></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="../lib/datetimepicker/jquery.datetimepicker.full.js"></script>
<link rel="stylesheet" href="../lib/datetimepicker/jquery.datetimepicker.css">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.css"> 

<!-- Page-Level Demo Scripts - Tables - Use for reference -->

<!-- jQuery -->

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<!-- <script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true
		});



		$( ".datepicker" ).datepicker({
			dateFormat: 'dd-mm-yy'
		});


	});
</script> -->
<style type="text/css">
	.success{
		
		background-color: #00B0FF; 
		border-radius: 10px;
		color: black;
		padding: 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 15px;
		margin: 10px 10px;
		cursor: pointer;
	}
	textarea{
		display: inline-block;
		border: 1px solid #cccccc5e;
		border-radius: 4px;
		box-sizing: border-box;	
		background-color: #f0f8ff00;
	}
	input[type=text] {
		width: 100%;
		height: 32px;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	input[type=date]{
		height: 32px;
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	input[type=button]{
		height: 32px;
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		background-color: #337ab7;
		border-radius: 50px;
		box-sizing: border-box;
		background: linear-gradient(0.35turn,#708090,#32B4C1,#80d4ff);
	}
	select{
		height: 32px;
		width: 100%;
		padding: auto 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
	}
	label{
		color: #666666;
	}
	.active {
		background-color: white;
	}

	.box{
		position:absolute;
		left:50%;
		top:50%;
		transform: translate(-50%,-50%);
		background-color: rgba(0, 0, 0, 0.89);
		border-radius:3px;
		padding:70px 100px;
	}
	.myButton {
		background-color: #00B0FF !IMPORTANT;
		color: #ffffff !IMPORTANT;
		border-radius:10px;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Prompt;
		font-size: 20px;
		padding:2px 30px;
		text-decoration:none;
	}
	.myButton1 {
		background-color: #32b4c1 !IMPORTANT;
		color: #000000 !IMPORTANT;
		border-radius:50px;
		display:inline-block;
		cursor:pointer;
		color:#000000;
		font-family:Prompt;
		font-size: 15px;
		padding:10px;
		width: 100px;
		height: 40px;
		text-decoration:none;
	}
	.myButton2 {
		background-color: #E2E2E2 !IMPORTANT;
		color: #000000!IMPORTANT;
		border-radius:5px;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Prompt;
		font-size: 18px;
		padding:2px 10px;
		text-decoration:none;
	}
	.button1 {
		background-color: #ffcc66; 
		border-radius: 10px;
		color: black;
		padding: 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 15px;
		margin: 10px 10px;
		cursor: pointer;
	}
	.button2 {
		background-color: #ff6666; 
		border-radius: 10px;
		color: black;
		padding: 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 15px;
		margin: 10px 10px;
		cursor: pointer;
	}
	.myButton:hover {
		background-color:#1473e6;
	}
	button{
		border-width: inherit;
	}
	a:last-child{
		color: #000000;
	}
	table {
		border-collapse: collapse;

		width: 100%;
	}

	th, td {
		text-align: left;
		padding: 8px;
	}
	h3{
		color: white;
		font-family: Prompt !IMPORTANT;
	}
	h3.b{
		
		/*text-shadow: black 0.1em 0.1em 0.2em;*/
		/*text-shadow: -1px  0.1em  0.1em  #32b4c1, 0 1px #32b4c1,
		1px 0 #000000, 0 -1px #32b4c1;*/
		text-shadow: 1px 0 #A0A7A7, 0 1px #A0A7A7,1px 0 #A0A7A7, 0 3px #A0A7A7;
	}
	b.shadow1{
		color: #708090;
		text-shadow: -1px 0 white, 0 1px white,1px 0 white, 0 -1px white;

	}

	tr:nth-child(even){
		background-color: #F2F2F2;
	}

	thead {
		background-color:#14232A;
		border-top-right-radius: 5px;
		color: white;
		border-top-left-radius: 5px;
	}
	.text-nav{
		color: #ffffff !IMPORTANT;
		font-size: 18px;
		/*font-weight: bold;*/
	}
	p {
		color: #000000;
		font-size: 20px;
	}
	.container {
		width: 100%;
		padding-left: 10px;
	}
	#sidebar {background-color: #333333}
	.navbar{
		position: relative;
		min-height: 50px;
		margin-bottom: 50px;
	}
	.font{
		font-family: Prompt !IMPORTANT;
		color: #ffffff !IMPORTANT;
	}
	.bg-color{
		background: -webkit-linear-gradient(#708090, #32B4C1, #32B4C1, #32B4C1); 
		
	}
	.bg-color-2{
		background: linear-gradient(0.35turn,#708090,#32B4C1); 

	}

</style>