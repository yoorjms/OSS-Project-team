<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width", initial-scale="1">
		<title>ME To WE</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/codingBooster.css">
	</head>
	<body>
    <?php
    $db = mysqli_connect("localhost","root","","shop");
    $db -> set_charset('utf8');
    ?>

		<style type="text/css">
			.jumbotron{
				background-image: url('images/boostrapBackground.jpg');
				background-size: cover;
				text-shadow: black 0.2em 0.2em 0.2em;
				color: white;
			}
	    </style>
	    <nav class="navbar navbar-default">
	    	<div class="container-fluid">
	    		<div class="navbar-header">
	    				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
	    					data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	    				    <span class="sr-only"></span>
	    				    <span class="icon-bar"></span>
	    				    <span class="icon-bar"></span>
	    				    <span class="icon-bar"></span>
	    				</button>
	    				<a class="navbar-brand" href="index.html">ME To We</a>
	    	    </div>
	    	    <div class="collapsed navbar-collapse" id="bs-example-navbar-collapse-1">
	    	    	<ul class="nav navbar-nav">
	    	    			<li class="active"><a href="introduce.html">소개<span class="sr-only"></span></a></li>
	    	    			<li><a href="instructor.html">개발진</a></li>
	    	    			<li class="dropdown">
	    	    				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
	    	    					aria-haspopup="true" aria-expanded="false">쇼핑몰<span class="caret"></span></a>
	    	    				<ul class="dropdown-menu">
                      <?php
                      $query =  "select mall_name from shopping_mall";
                      $res = $db -> query($query);

                      while ($row=mysqli_fetch_array($res))
                      {
                          ?> <li><a href="#"> <?php echo $row["mall_name"]; ?></a></li><?php
                      }
                      ?>
	    	    				</ul>
	    	    			</li>
	    	    	</ul>
	    	    	<form class="navbar-form navbar-left">
	    	    		<div class="form-group">
	    	    			<input type="text" class="form-control" placeholder="상품명을 입력하세요.">
	    	    		</div>
	    	    		<button type="submit" class="btn btn-default">검색</button>
	    	    	</form>
	    	    	<ul class="nav navbar-nav navbar-right">
	    	    		<li class="dropdown">
	    	    			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
	    	    				aria-haspopup="true" aria-expanded="false">접속하기<span class="caret"></span></a>
	    	    				<ul class="dropdown-menu">
	    	    					<li><a href="loginForm.html">로그인</a></li>
	    	    					<li><a href="registerForm.html">회원가입</a></li>

	    	    				</ul>
	    	    		</li>
	    	    	</ul>
	    	    </div>
	        </div>
	    </nav>
		<div class="container">
			<div class="jumbotron">
				<h1 class="text-center">ME To WE</h1>
				<p class="text-center">당신의 쇼핑을 편하게 도와드립니다!</p>
				<p class="text-center"><a class="btn btn-primary btn-lg" href="index.html" role="button">쇼핑몰 구경하러 가기</a></p>
			</div>
			<div class="row">
					<div class="col-md-4">
							<h4>ME To WE의 특징</h4>
							<p>ME To WE는 웹 크롤링 및 스크래핑을 통해 여러개의 쇼핑몰 중 원하는 상품을 검색하여 한눈에 보여줍니다.</p>
							<p><a class="btn btn-default" data-target="#modal" data-toggle="modal">자세히 알아보기</a></p>
					</div>
					<div class="col-md-4">
						<h4>ME To WE 사용법</h4>
						<p>Me To WE 사이트를 이용하시려면 아래의 버튼을 눌러주세요.</p>
						<p><a class="btn btn-default" data-target="#modal1" data-toggle="modal">자세히 알아보기</a></p>
					</div>
					<!--<div class="col-md-8">-->
							<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--<div class="container">-->
<div class="col-md-4">
			<form>
				<h4>쇼핑몰 선택 목록</h4>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">오까네(공용)</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">4xr(남성)</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">CANMART(여성)</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">everfree(남성)</span>
					</label>
				</div>
				<!--<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">쇼핑몰 05</span>
					</label>
				</div>-->
			</form>

		</div>
<!--</div>-->
							<!--<h4>쇼핑몰 구성</h4>
							<p>여성과 남성 모두가 사용 가능한 여러개의 쇼핑몰이 구성되어 있습니다. 제공 된 쇼핑몰 중에서 자신이 원하는 쇼핑몰 한해서 검색이 가능합니다.</p>-->

					<!--</div>-->
					<!--<div class="col-md-4">
							<h4>쇼핑몰 사이트</h4>
							<p>관리자가 직접 쇼핑몰 사이트를 방문하고 선정하여 사용자는 안전하게 원하는 상품을 비교할 수 있습니다.</p>

					</div>-->
			</div>
			<hr>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span>
					&nbsp;&nbsp;쇼핑몰 상품 리스트</h3>
				</div>
				<div class="panel-body">
					<div class="media">
						<div class="media-left">
							<a href="#"><img class="media-object" src="images/shop.png" alt="검색된 상품"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="#">크롤링 및 스크래핑 되어진 상품_1</a>&nbsp;<span class="badge">New</span></h4>
							사용자가 검색한 상품들을 쇼핑몰 별로 크롤링 및 스크래핑 하여 비교할수 있게끔 보여준다.
						</div>
					</div>
				<!--	<hr>
					<div class="media">
						<div class="media-left">
							<a href="#"><img class="media-object" src="images/shop.png" alt="검색된 상품"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="#">크롤링 및 스크래핑 되어진 상품_2</a>&nbsp;<span class="badge">New</span></h4>
							사용자가 검색한 상품들을 쇼핑몰 별로 크롤링 및 스크래핑 하여 비교할수 있게끔 보여준다.
						</div>
					</div>
					<hr>
					<div class="media">
						<div class="media-left">
							<a href="#"><img class="media-object" src="images/shop.png" alt="검색된 상품"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="#">크롤링 및 스크래핑 되어진 상품_3</a>&nbsp;<span class="badge">New</span></h4>
							사용자가 검색한 상품들을 쇼핑몰 별로 크롤링 및 스크래핑 하여 비교할수 있게끔 보여준다.
						</div>
					</div>
					<hr>
					<div class="media">
						<div class="media-left">
							<a href="#"><img class="media-object" src="images/shop.png" alt="검색된 상품"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="#">크롤링 및 스크래핑 되어진 상품_4</a>&nbsp;<span class="badge">New</span></h4>
							사용자가 검색한 상품들을 쇼핑몰 별로 크롤링 및 스크래핑 하여 비교할수 있게끔 보여준다.
						</div>
					</div>
					<hr>
					<div class="media">
						<div class="media-left">
							<a href="#"><img class="media-object" src="images/shop.png" alt="검색된 상품"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="#">크롤링 및 스크래핑 되어진 상품_5</a>&nbsp;<span class="badge">New</span></h4>
							사용자가 검색한 상품들을 쇼핑몰 별로 크롤링 및 스크래핑 하여 비교할수 있게끔 보여준다.
						</div>
					</div>-->
				</div>
			</div>
		</div>
		<footer style="background-color: #000000; color: #ffffff">
				<div class="container">
					<br>
					<div class="row">
						<div class="col-sm-2" style="text-align: center;"><h5>Copyright &copy; 2018</h5><h5>최선희 성유림</h5><h5>푸트리 신티아 정지범</h5></div>
						<div class="col-sm-4"><h4>만든이 소개</h4><p>오픈소스 1조 자바칩프라푸치노 팀원들 입니다.</p></div>
						<div class="col-sm-4"><h4 style="text-align: center;"></h4>
							<div class="list-group">
								<a href="introduce.html" class="list-group-item">소개</a>
								<a href="instructor.html" class="list-group-item">개발진</a>
								<a href="#" class="list-group-item">쇼핑몰</a>
							</div>
						</div>
						<div class="col-sm-2"><h4 style="text-align: center;"><span class="glyphicon glyphicon-ok"></span>&nbsp;by 자바칩푸라프치노</h4></div>
					</div>
				</div>
		</footer>
		<div class="row">
				<div class="modal" id="modal" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									ME To WE의 특징
									<button class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body" style="text-align: center;">
									저희 서비스의 특징은 여러개의 쇼핑몰을 한 웹 페이지안에 모아 볼 수 있다는 점입니다.<br>
									주요 서비스로 원하는 상품을 검색 하였을 때,<br>
									각각의 쇼핑몰에서 검색된 상품을 보여줘 가격을 비교할 수 있습니다.<br><br>
									<img src="images/background.jpg" id="imagepreview" style="width: 256px; height: 256px">
								</div>
							</div>
						</div>
				</div>
		</div>
		<div class="row">
				<div class="modal" id="modal1" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									ME To WE 사용법
									<button class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body" style="text-align: center;">
									1. 오른쪽에 쇼핑몰 선택 목록에서 기본으로 ME To WE가 제공하는 쇼핑몰 5가지중 원하는 사이트들을 선택 합니다.<br>
									2. 웹 페이지의 상단부 검색창에 원하는 상품을 검색합니다.<br>
									3. 선택한 쇼핑몰 한해서 상품이 검색되어 비교 할 수 있습니다.<br><br>
									<img src="images/background.jpg" id="imagepreview" style="width: 256px; height: 256px">
								</div>
							</div>
						</div>
				</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
