<?php
    include ('header.php');
?>

	<div class="container">
		<nav id="event-image" class="navbar navbar-default">
			<div id="mycarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/concert.jpg" alt="" class="img-responsive" style="width:100%; height: 350px">
						<div class="carousel-caption">
							<h4>Concerto Casa da Música</h4>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<nav class="navbar navbar-default">
			<h3 class="eventPage"><span href="#InfoContent" data-toggle="collapse">	

					<span>Event Information</span>
				<!--edit button -->
				<!--<button id="EditButton" type="submit" class="btn btn-info pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit</button>-->
				<!--attendace button-->
				<button class="btn btn-info btn-default dropdown-toggle pull-right" type="button" id="AttendanceButton" data-toggle="dropdown">Assign to</button>
				<ul class="dropdown-menu pull-right" role="menu">
					<li role="presentation"><a role="menuitem" tabindex="1" href="#">Going </a></li>
					<li role="presentation"><a role="menuitem" tabindex="1" href="#">Maybe </a></li>
					<li role="presentation"><a role="menuitem" tabindex="1" href="#">Not Going</a></li>
				</ul>

			</h3>

			<div id="InfoContent" class="navbar navbar-default collapse in">
				<hr/>
				<div class="row">
					<p><i class="glyphicon glyphicon-map-marker">&nbsp;&nbsp;</i> <b class="Local">Location: &nbsp;</b> Casa da Música, Porto</p>
				</div>
				<div class="row">
					<p><i class="glyphicon glyphicon-calendar">&nbsp;&nbsp;</i><b class="Data">Date: &nbsp;</b>12-02-2017</p>
				</div>
				<div class="row">
					<p><i class="glyphicon glyphicon-time">&nbsp;&nbsp;</i><b class="Hora">Time: &nbsp;</b>12:35&nbsp;-&nbsp;19:00 </p>
				</div>
				<hr/>
				<nav id="event-image" class="navbar navbar-default">
					<div id="mycarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<img align="center" src="images/googlemaps.png" alt="" class="img-responsive" style="width:98%; height: 330px">
								
							</div>
						</div>
					</div>
				</nav>
				
				<hr/>
				<div class="row">
					<p>An event created to share different types of music and showing off some new musical groups!</p>
				</div>
			</div>
		</nav>



		<nav id="event-comment" class="navbar navbar-default">
			<h3 class="eventPage"><span href="#CommentContent" data-toggle="collapse">

					<span>Publications</span>

			</h3>
			<div id="CommentContent">
				<hr/>
				<div class="navbar navbar-default collapse in">
					<div class="row">
						<div class="col-sm-1 col-sm-offset-1">
							<div class="thumbnail">
								<img class="img user-photo" src="images/person.jpg">
							</div>
						</div>

						<div class="col-sm-5 ">
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Miriam Gonçalves</strong> <span class="text-muted-time">commented 5 days ago </span>
									<div id="like-buttons" class="btn-group pull-right">
										<a href="#" class="btn btn-default stat-item">
											<i class="fa fa-thumbs-up icon"></i>&nbsp;10
										</a>
										<a href="#" class="btn btn-default stat-item ">
											<i class="fa fa-thumbs-down icon"></i>&nbsp;24
										</a>
									</div>
								</div>
								<div class="panel-body">OMG can't wait!

									<button id="DeleteComment" type="submit" class="btn pull-right"><i class="fa fa-trash" aria-hidden="true"></i></button>									&nbsp;
									<button id="EditComment" type="submit" class="btn pull-right"><i class="fa fa-pencil" aria-hidden="true"></i></button>
								</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-sm-1 col-sm-offset-1">
							<div class="thumbnail">
								<img class="img-responsive user-photo" src="images/person.jpg">
							</div>
						</div>
						<div class="col-sm-5 ">
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Rita Torres</strong> <span class="text-muted-time">commented 5 days ago </span>
									<div id="like-buttons" class="btn-group pull-right">
										<a href="#" class="btn btn-default stat-item">
											<i class="fa fa-thumbs-up icon"></i>&nbsp;10
										</a>
										<a href="#" class="btn btn-default stat-item ">
											<i class="fa fa-thumbs-down icon"></i>&nbsp;24
										</a>
									</div>
								</div>

								<div class="panel-body">Cool stuff
									<button id="DeleteComment" type="submit" class="btn  pull-right"><i class="fa fa-trash" aria-hidden="true"></i></button>
									<button id="EditComment" type="submit" class="btn  pull-right"><i class="fa fa-pencil" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-1 col-sm-offset-1">
						<div class="thumbnail">
							<img class="img-responsive user-photo" src="images/person.jpg">
						</div>
					</div>
					<div class="col-sm-5 ">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong>Miriam Gonçalves</strong>
							</div>
							<input type="text" class="form-control input-lg" id="search-church" placeholder="Comment something here...">
							<div class="panel-heading">
								<button id="CommentButton" type="submit" class="btn btn-info"><i class="glyphicon glyphicon-comment"></i> Comment</button>
								<button id="CancelButton" type="button" class="btn btn-info"><i class="glyphicon glyphicon-remove"></i>&nbsp;Cancel</button>
								<!-- este input vai ser do tipo file!! -->
								<button id="ImageButton" type="button" class="upvote btn pull-right" style="background-color: #f5f5f5"><i class="glyphicon glyphicon-camera"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>

		</nav>
	</div>
	<?php
	include ('footer.php');
?>