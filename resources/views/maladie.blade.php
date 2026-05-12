<!DOCTYPE html>
<html  lang="ar" >

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Eduleb - Education HTML Template">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup">		
		<!-- SITE TITLE -->
		<title>Eduleb - Dictionnaire Arabe</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">	
		<!--jquery-simple-mobilemenu Css-->
        <link rel="stylesheet" href="assets/css/jquery-simple-mobilemenu.css">			
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">		
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">	
		<!-- Style CSS -->					
		<link rel="stylesheet" href="assets/css/style.css">
		
								
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
.transparent-bg {
    background-color: rgba(0, 0, 0, 0.4);
    color: white;
    padding: 20px;
    border-radius: 10px;
}
.back-btn {
    display: inline-block;
    margin: 20px;
    padding: 10px 15px;
    background: rgba(0,0,0,0.5);
    color: white;
    border-radius: 8px;
    text-decoration: none;
}
<!-- design tableaux -->

        .search-box {
            margin-bottom: 20px;
        }

        input {
            padding: 8px;
            width: 300px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        th {
            background: #333;
            color: white;
        }

        tr:hover {
            background: #f2f2f2;
        }
		.circle-box {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    padding: 30px;
    margin-top: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    color: white;
}

/* table style inside circle */

.circle-box table {
    border-radius: 15px;
    overflow: hidden;
}

.circle-box th {
    background: #222;
}

.circle-box td, .circle-box th {
    padding: 12px;
}

/* search */
.circle-box input {
    border-radius: 25px;
    padding: 10px;
}
.circle-box table th:first-child,
.circle-box table td:first-child {
    width: 25%;
}

.circle-box table th:last-child,
.circle-box table td:last-child {
    width: 75%;
}
.circle-box thead.custom-head th {
    background-color: #0be10f !important;
    color: white !important;
}
<!-- design tableaux -->
</style>
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloaders">
			<span class="loader"></span>
		</div>
		<!-- END PRELOADER -->		

		<!-- START NAVBAR -->  

		<!-- END NAVBAR -->		

		<!-- START HOME -->

		<!-- END  HOME -->			

		<!-- START COUNTER -->

		<!-- END COUNTER -->

	<!-- START CATEGORY -->

	<!-- END CATEGORY -->		
		
	<!-- START ABOUT US -->

	<!-- END ABOUT US -->	
	
	<!-- START CATEGORY -->
	<section class="top_cat__area section-padding" style="background-image: url(assets/img/aa.jpeg);  background-size:cover; background-position: center center;">
		<div class="container">									
					
			<div class="row">													
				<div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="cat_list">
						<ul>
							<li><a href="#"> الأمراض الناتجة عن تلوث المياه و الوقاية منها  <img src="assets/img/e2.png" alt="category-image" /> </a></li>
							                                                  <a href="javascript:history.back()" class="back-btn">
                                <i class="fa fa-arrow-left"></i> رجوع
                            </a>     <br>
						</ul>
					</div>
				</div><!--- END COL -->				
							  
			</div><!--- END ROW -->

					</div>	
			<!--- START COL -->	
				<div  class="circle-box" dir="rtl">

					<h4 class="text-center mb-3">📘 المصطلحات</h4>

					<!-- 🔍 Search -->
					<div class="search-box text-center mb-3">
						<input type="text" id="search" placeholder="بحث..." class="form-control w-75 mx-auto">
					</div>

					<div class="table-responsive">
						<table class="table table-hover text-center align-middle" id="table">
							<thead class="custom-head">
								<tr>
									<th>المصطلح</th>
									<th>التعريف</th>
								</tr>
							</thead>

							<tbody>
								@foreach($maladies as $maladie)
									@if($maladie->lecon == 'maladie')
										<tr>
											<td>{{ $maladie->nom }}</td>
											<td>{!! nl2br(e($maladie->def)) !!}</td>
										</tr>
									@endif
								@endforeach
							</tbody>
						</table>
					</div>

				</div>
			<!--- END COL -->		
		</div><!--- END CONTAINER -->
	</section>
	<!-- END CATEGORY -->			

		<!-- START COURSE -->

		<!-- END COURSE -->	
		
		<!-- START COMPANY PARTNER LOGO  -->

		<!-- END COMPANY PARTNER LOGO -->	

		<!-- START VIDEO -->

		<!-- END VIDEO -->			
		
		<!-- START TEAM -->

		<!-- END TEAM -->	

	<!-- START PROMO -->

	<!-- END PROMO -->			

		<!-- START TESTIMONIALS -->

		<!-- END TESTINUNIALS -->

		<!-- START BLOG -->
	
		<!-- END BLOG -->	
		
		<!-- START FOOTER -->

		<!-- END FOOTER -->	

		<!-- START FOOTER COPYRIGHT -->	
		<div class="foot_copy">
			<div class="footer_copyright">
				<p>  المعجم البيئي  2026 &copy;<a href="https://themewagon.com"></a></p>
		<!-- END FOOTER COPYRIGHT -->	
	
	<!-- Latest jQuery -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
	<!-- Latest compiled and minified Bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- modernizer JS -->		
		<script src="assets/js/modernizr-2.8.3.min.js"></script>	
	<!-- jquery-simple-mobilemenu.min -->
		<script src="assets/js/jquery-simple-mobilemenu.js"></script>		
	<!-- owl-carousel min js  -->
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>					
	<!-- magnific-popup js -->               
		<script src="assets/js/jquery.magnific-popup.min.js"></script>						
	<!-- countTo js -->
		<script src="assets/js/jquery.inview.min.js"></script>								
	<!-- scrolltopcontrol js -->
		<script src="assets/js/scrolltopcontrol.js"></script>			
	<!-- WOW - Reveal Animations When You Scroll -->
		<script src="assets/js/wow.min.js"></script>				
	<!-- scripts js -->
		<script src="assets/js/scripts.js"></script>
	<!-- 🔎 Script recherche -->
	<script>
	document.getElementById('search').addEventListener('keyup', function() {
		let value = this.value.toLowerCase();
		let rows = document.querySelectorAll("#table tbody tr");

		rows.forEach(row => {
			let nom = row.cells[0].textContent.toLowerCase();
			let def = row.cells[1].textContent.toLowerCase();

			if (nom.includes(value) || def.includes(value)) {
				row.style.display = "";
			} else {
				row.style.display = "none";
			}
		});
	});
	</script>
    </body>
</html>