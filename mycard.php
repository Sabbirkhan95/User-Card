<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Unnamed - Card</title>

		<!-- Myuser Card -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Font Awesome and Google Font -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		
		<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">

	</head>
	<body>
		<div class="card-holder clearfix">
			<div class="panel">
				<div class="frontside">
					<!-- card front side -->
					<div class="card" style="background: url('images/card-bg.jpg') no-repeat center; background-size: cover;">
						<div class="card-inner">
							<h2 class="user-name">Rezwana Nitu</h2>
							<button type="button" class="btn-card click">Profile <i class="icon">&rarr;</i></button>
						</div>
					</div>
				</div>
				<div class="backside" >
					<!-- Card Back side-->
					<div class="card">
						<div class="card-cover" style="background: url('images/card-bg.jpg') no-repeat center; background-size: cover;">
							<div class="menu-bar">
								<a href="#" class="profile-menu click">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</a>
								<a href="#" class="chat-menu">
									<i class="fa fa-commenting-o" aria-hidden="true"></i>
								</a>
							</div>
							<button type="button" class="btn-floating" title="Follow">+</button>
						</div>
						<div class="card-body">
							<div class="user-name">Rezwana Nitu</div>
							<div class="user-title">Designer @nitu</div>
						</div>
						<div class="card-footer clearfix">
							<div class="follower">follower <span style="display: block;">100K</span></div>
							<div class="following">following <span style="display: block;">10,000</span></div>
						</div>
							
					</div>
					<!-- /Card Back side -->
				</div>
			</div>	
		</div>
		
		<!-- JQuery -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/unnamed_card.js"></script>

		<script type="text/javascript">
		$(document).ready(function(){
			$('.click').click(function(e){
				e.preventDefault();
				$('.panel').toggleClass('flip');
			});
		});
		</script>
		


	</body>
</html>