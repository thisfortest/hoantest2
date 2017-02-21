edit
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ILA Intranet</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="css/home.css" />

</head>

<body data-defaultbg="images/home.png" style='background-image: url("images/home.png");background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	padding: 1% 3% 0;
	height:100vh;'>
<!--
<body>
-->
    <div class='screen'>
    </div>
	
	
	
	
<style>
.bigmenu {
    position: fixed;
    margin: 15px 0 0 30px;
    border: 2px solid #5FCCF5;
    border-radius: 10px;
    padding: 5px;
	color: white;
}
.ul_sub_116 {
    border-radius: 20px;
    background: #5FCCF5;
	margin: 5px 0px;  
	padding: 5px;
}

.ul_sub_116 a{
	text-decoration: none;
	color: white;
	font-size: 15px;
}



@media all and (min-width: 100px) {
	.menu
	{
		display: none !important;
	}
	.reponsitemenu
	{
		display: block !important;
	}
}

@media all and (min-width: 750px) {
	.menu
	{
		display: block !important;
	}
	.reponsitemenu
	{
		display: none !important;
	}

}

</style>


    <div class="container">
        <div class="row">	
			<div class="col-md-1">	
				<a href='#' class='open'><img src='http://intranetdev.ilavietnam.com/static/intranet/images/open.png' title='Open menu'/>
				</a>
			</div>
		<div class="col-md-8">
			<div class="menu" style="display: block;">					
					<div class="bot_container">
						<a href="#" data-link="princ">Corporate</a>
						<div data-order="4" data-dir="bottom" class="guidance guide_bot" style="bottom: -146px; left: -72px;">"Corporate" page will give you many useful information of ILA.<a href="#next_pop">Next</a></div>
					</div>	
					
					<div class="bot_container cur">
						<a href="#" data-link="nae">News and Events</a>		
					
						<div data-order="2" data-dir="bottom" class="guidance guide_bot" style="bottom: -184px; left: -49.5px;">On the "News and Events" page, you can easily see all updated information about ILA news, events, and vacancies. <a href="#next_pop">Next</a></div>
					</div>				
					<div class="bot_container">
						<a href="#" data-link="ei">Employees</a>
						<div data-order="5" data-dir="bottom" class="guidance guide_bot" style="bottom: -165px; left: -69.5px;">Information of new comers, staff movement and staff’s birthday are all shown on the "Employees" page.
						<a href="#next_pop">Next</a></div>
					</div>
					<div class="bot_container">
							<a href="#" id="id_my_page" data-link="my">My page</a>
						<div data-order="6" data-dir="bottom" class="guidance guide_bot" style="bottom: -146px; left: -77.5px;">With "My page", you can see your personal information easily.
						<a href="#next_pop">Next</a></div>
					</div>
					

			</div>

<div class="reponsitemenu" style="display: none;" >
	<ul class="bigmenu" data-class="ul_sub_116">Show tabs<img src="http://intranetdev.ilavietnam.com/student_handbook/images/caretdown.png">

		<li style="overflow: hidden; display: none;" class="ul_sub_116">
			<a href="#">Corporate</a>
		</li>
	
		<li style="overflow: hidden; display: none;" class="ul_sub_116">
			<a href="#" data-link="nae">News and Events</a>		
		</li>
	
		<li style="overflow: hidden; display: none;" class="ul_sub_116">
			<a href="#" data-link="ei">Employees</a>
		</li>
	
		<li style="overflow: hidden; display: none;" class="ul_sub_116">
			<a href="#" id="id_my_page" data-link="my">My page</a>
		</li>
	
	</ul>
</div>

</div>
<div class="col-md-3">
<div class="welcoming">
	Hi,&nbsp;Hoan&nbsp;! &nbsp;<span class="frame_round"><img src="/static/upload/images/intranet/hoanchuong.jpg?v=1882174733" class="myava"></span>
</div>
	
	
	
			</div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	
<script type="text/javascript">
	$(document).ready(function(){
		$('.bigmenu').on('click',function(){
			var theCaret = $(this).find('img');
			var classname = $(this).data( "class" );
			if ($("." +classname).is(":hidden")) {				
				theCaret.attr('src','http://intranetdev.ilavietnam.com/student_handbook/images/caretup.png');
			 

			 } else {	
			  				theCaret.attr('src','http://intranetdev.ilavietnam.com/student_handbook/images/caretdown.png');
				// theCaret.attr('src','http://intranet.ila.edu.vn/static/intranet/images/caretdown.png');			
				}
				$( "." +classname).toggle( "slow" );		

		})
	});	
</script>			
	
</body>

</html>