<?php
require 'secure.php';
//Create a secure.php and set the variable $client_id to your client_id

error_reporting(0);
ini_set('display_errors', 0);

if (isset($_GET['username'])) {

	header('Content-Type: application/json');

	$username = $_GET['username'];
	$username_data = (json_decode(file_get_contents("http://api.soundcloud.com/resolve.json?url=http://soundcloud.com/$username&client_id=$client_id")));
	$user_id = $username_data->id;

	$user_tracks = json_decode(file_get_contents("http://api.soundcloud.com/users/$user_id/tracks?limit=10000&client_id=$client_id"), true);
	$user_followers = json_decode(file_get_contents("http://api.soundcloud.com/users/$user_id/followers?limit=10000&client_id=$client_id"), true)['collection'];
	$user_followings = json_decode(file_get_contents("http://api.soundcloud.com/users/$user_id/followings?limit=10000&client_id=$client_id"), true)['collection'];
	$user_favorites = json_decode(file_get_contents("http://api.soundcloud.com/users/$user_id/favorites?limit=10000&client_id=$client_id"), true);

	$data = array('username' => $username, 'user id' => $user_id, 'tracks' => $user_tracks, 'followers' => $user_followers, 'following' => $user_followings, 'favorites' => $user_favorites);

	echo json_encode($data);

} else {
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SC Profile Backup</title>
		<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css">
		<!-- Font Awesome CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
		<style>
		.spinner {
		  display: inline-block;
		  opacity: 0;
		  width: 0;

		  -webkit-transition: opacity 0.25s, width 0.25s;
		  -moz-transition: opacity 0.25s, width 0.25s;
		  -o-transition: opacity 0.25s, width 0.25s;
		  transition: opacity 0.25s, width 0.25s;
		}

		.has-spinner.active {
		  cursor:progress;
		}

		.has-spinner.active .spinner {
		  opacity: 1;
		  width: auto; /* This doesn't work, just fix for unkown width elements */
		}

		.has-spinner.btn-mini.active .spinner {
		    width: 10px;
		}

		.has-spinner.btn-small.active .spinner {
		    width: 13px;
		}

		.has-spinner.btn.active .spinner {
		    width: 16px;
		}

		.has-spinner.btn-large.active .spinner {
		    width: 19px;
		}
		.glyphicon-refresh-animate {
		    -animation: spin .7s infinite linear;
		    -ms-animation: spin .7s infinite linear;
		    -webkit-animation: spinw .7s infinite linear;
		    -moz-animation: spinm .7s infinite linear;
		}

		@keyframes spin {
		    from {
		        transform: scale(1) rotate(0deg);
		    }
		    to {
		        transform: scale(1) rotate(360deg);
		    }
		}

		@-webkit-keyframes spinw {
		    from {
		        -webkit-transform: rotate(0deg);
		    }
		    to {
		        -webkit-transform: rotate(360deg);
		    }
		}

		@-moz-keyframes spinm {
		    from {
		        -moz-transform: rotate(0deg);
		    }
		    to {
		        -moz-transform: rotate(360deg);
		    }
		}
		</style>
	</head>
	<body>
		<div style="text-align: center; padding-top: 100px;">
			<div class="container container-fluid text-center">
				<h1>Soundcloud Profile Backup</h1>
				<em>Simply type in a username press Go!</em>
				<br>
				<br>
				<label>Soundcloud Username:</label>
				<div>
					<div class="row">
						<div class="col-lg-4 col-lg-offset-4">
								<form method="get" class="input-group">
									<input id="input" name="username" type="text" class="form-control" />
									<span class="input-group-btn">
										<button class="btn btn-primary has-spinner" id="go" type="submit">
										<span class="spinner"><i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i></span> Go!</button>
									</span>
								</form>
							</div><!-- /.col-lg-4 -->
							</div><!-- /.row -->
							<br>
							<br>
							<em>Please wait a few seconds for the results</em>
							</div>
							<footer class="navbar navbar-fixed-bottom">
								<em>Made by <a href="https://github.com/onlineth/">Tom</a></em>
							</footer>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery first, then Bootstrap JS. -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script>
			$(function(){
			    $('#go').click(function() {
			        $(this).toggleClass('active');
			    });
			});
			$("#input").focus();
		</script>
	</body>
</html>
<?php
}
