<!DOCTYPE html>
<html>
<head>
	<title>COVID-19</title>


	  <!-- META TAGS -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
         <!-- META TAGS ENDS HERE -->

          <!-- LINKS STYLING -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/index1.css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.default.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">

<script src="js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


<style type="text/css" rel="stylesheet">
	
  
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap');

    * {
    	margin:0px;
    	padding:0px;
    	box-sizing:border-box;
    }

    html {
    	scroll-behavior:smooth;
    }

    .main-frame {
    	background-color:#fff591; 
    	
    }

    .leftmenu h1 {
       font-family:'Coronaviral';
    }

    .leftmenu a {
    	color:black;
    }

    .rightmenu ul li {
       font-family:'Coronaviral';
    }

    .rightmenu ul li a {
    	color:black;
    }

    .main-left-img {
    	margin-left:5%;
    	margin-top:5%;
    }
    
    .main-right-text h1{
        	font-family: 'Roboto Slab', serif;
        	font-weight:bolder;
        	font-size:100px;
    }
    
    .spinner_img {
    	animation:spin_img 2s linear infinite;
    }

    .main-left-img {
    	animation: spin_left_img 6s linear infinite;
    }

    @keyframes spin_left_img {
    	0% {
           transform:rotate(0deg);
           
    	}
    	50% {
           transform:rotate(180deg);
           
    	}
    	100% {
           transform:rotate(0deg);
    	}
    }


    @keyframes spin_img {
    	0% {
    		transform:rotate(0deg);
    	}

    	100% {
    		transform:rotate(360deg);
    	}
    }

    .heading-update h1 {
    	font-size:70px;
    	font-family: 'Roboto Slab', serif;
    }
   
    .updates-total {
    	margin-left:15%;
    }

    .updates-total h2 {
    	font-size:60px;
    	font-family: 'courier new', serif;
    }

    .updates-total h3 {
    	font-size:30px;
    	font-family: 'Roboto Slab', serif;
    	font-weight:lighter;
    }

    .info-heading h1 {
    	font-family: 'Roboto Slab', serif;
    	font-size:70px;
    }

    .info-text p {
    	font-size:20px;
    	margin-bottom:200px;
    	margin-top:10%;
    }

    .animate-img-info {
    	animation: animate-img 3s linear infinite;
    	transition:5s ease-in-out;
    	position:relative;
    }

    @keyframes animate-img {
    	0% {
    		transform:scale(1);
    		position:relative;
    		top:0px;
    		left:0px;
    		transition:5s ease-in-out;
    	}

    	25% {
    	    transform:scale(.75);
    		position:relative;
    		top:0px;
    		left:100px;
    		transition:5s ease-in-out;	
    	}
    
    	50% {
    		transform:scale(.5);
    		position:relative;
    		top:100px;
    		left:100px;
    		transition:5s ease-in-out;
    	}

    	75% {
    		transform:scale(.75);
    		position:relative;
    		top:100px;
    		left:-100px;
    		transition:5s ease-in-out;
    	}
    	
    	100% {
    		transform:scale(1);
    		position:relative;
    		top:0px;
    		left:0px;
    		transition:5s ease-in-out;
    	}
    }

    .symptoms_tab .row {
    	margin-left:5%;
    	margin-top:5%;
    }

    .symp-text h2 {
    	font-family: 'Roboto Slab', serif;
    	font-size:50px;

    }

    .symp_cols {
    	transition:1s ease;
    }

    .symp_cols:hover ~ .symp_cols.symp_img img{
    	transform:scale(1);
        transition:1s ease;
    }

    .symptoms_tab h1 {
    	font-size:70px;
    	font-family: 'Roboto Slab', serif;
    } 

    .precautions_tab h1 {
    	font-size:70px;
    	font-family: 'Roboto Slab', serif;
    }

    .precautions_tab .row {
    	margin-left:20%;
    	margin-right:auto;
    	margin-top:5%;
    }

    .about_us h1 {
    	font-size:70px;
    	font-family: 'Roboto Slab', serif;

    }

    .about_us {
    	background-color:#ffeaa7;
    }

    .upbtn {
    	width:50px;
    	height:40px;
    	position:fixed;
    	top:90%;
    	left:90%;
    	background-color:rgba(25,255,25,0.6);
    	text-align:center;
    	justify-content:center;
    	z-index:99;
    	-webkit-box-shadow: 2px 6px 25px -1px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 6px 25px -1px rgba(0,0,0,0.75);
box-shadow: 2px 6px 25px -1px rgba(0,0,0,0.75);
    	border-radius:10px;}

    .upbtn a {color:black;}


</style>

</head>

<body onload="fetch()">

	<div class="upbtn">
		<a class="nav-link" href="" onclick="move()">UP</a>
	</div>

  <section class="main-frame">
  	   <div class="navbar">
           <div class="leftmenu">
           	   <a class="nav-link" href="index.html"><h1>COVID<span style="font-family:'Coronaviral';font-weight:bold;" class="ml-1">-19</span></h1></a>
           </div>


           <div class="rightmenu">
           	   <ul class="list-inline">
           	   	  <li class="list-inline-item mr-5 text-capitalize"><a href="#live_report" class="nav-link">Live Report</a></li>
           	   	  <li class="list-inline-item mr-5 text-capitalize"><a href="#info" class="nav-link">info</a></li>
           	   	  <li class="list-inline-item mr-5 text-capitalize"><a href="#symptoms" class="nav-link">symptoms</a></li>
           	   	  <li class="list-inline-item mr-5 text-capitalize"><a href="#precautions" class="nav-link">precautions</a></li>
           	   	  <li class="list-inline-item mr-5 text-capitalize"><a href="#about_us" class="nav-link">about us</a></li>
           	   </ul>
           </div>
  	   </div>


        <div class="display row container-fluid">
           <!--  <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C116.47,217.40 357.44,-5.63 500.00,49.99 L395.26,122.66 L69.07,12.14 Z" style="stroke: none; fill: #08f;"></path></svg></div> -->
            
           <div class="col-lg-6 col-md-6 order-lg-1 order-1">
               <img src="img/main-bg.png" width="400px" height="400px" class="d-block main-left-img float-left">	
           </div>
           
           <div class="main-right-text col-lg-6 col-md-6 mt-5 order-lg-2 order-2">
               <h1 class="mt-5">Viruses d<span><img src="img/spinner.png" width="70px" height="70px" class="spinner_img"></span>n't discriminate</h1>
           </div>

        </div> 

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L34.3,208C68.6,192,137,160,206,176C274.3,192,343,256,411,266.7C480,277,549,235,617,202.7C685.7,171,754,149,823,138.7C891.4,128,960,128,1029,160C1097.1,192,1166,256,1234,288C1302.9,320,1371,320,1406,320L1440,320L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
  </section>


  <section class="covid-update-total" id="live_report">

  	  <div class="heading-update mt-5 mb-5">
  	  	  <h1 class="text-center mt-5 mb-5">CORONA UPDATES</h1>
  	  </div>

  	  <div class="row container mt-5 mb-5 updates-total">   
  	  	  <div class="col-lg-4 col-md-4 col-12 order-lg-1 order-md-1 order-1">
              <h2 id="showval"></h2>
              <h3 class="text-capitalize">total cases</h3>
  	  	  </div>

  	  	  <div class="col-lg-4 col-md-4 col-12 order-lg-2 order-md-2 order-3">
  	  	  	 <h2 id="deaths"></h2>
              <h3 class="text-capitalize">total deaths</h3>
  	  	  </div>

  	  	  <div class="col-lg-4 col-md-4 col-12 order-lg-3 order-md-3 order-2">
  	  	  	 <h2 id="recovers"></h2>
              <h3 class="text-capitalize">recovered cases</h3>
  	  	  </div>
  	  </div>
  </section>

  <section>
  	  <div class="report_by_country">
  	  	  <h1 class="text-center text-primary col-12 order-1 font-weight-bold" id="show_ind"></h1>
  	  </div>
  </section>

  <section class="table-responsive container-fluid">
  	    <table class=" table table-striped table-hover table-bordered text-center" id="tbval">
  	   	   <tr class="text-capitalize">
  	   	   	  <th>country</th>
  	   	   	  <th>total confirmed</th>
  	   	   	  <th>total deaths</th>
  	   	   	  <th>total recovered</th>
  	   	   	  <th>new cases</th>
  	   	   	  <th>new deaths</th>
  	   	   	  <th>new recovered</th>
  	   	   </tr>
  	   </table>
  </section>



  <section class="about-corona bg-info" id="info">
      
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L40,218.7C80,213,160,203,240,176C320,149,400,107,480,96C560,85,640,107,720,144C800,181,880,235,960,229.3C1040,224,1120,160,1200,133.3C1280,107,1360,117,1400,122.7L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
       <div class="info-heading">
       	  <h1 class="text-center">ABOUT CORONA</h1>
       </div>

  	   <div class="covid_info row container-fluid justify-content-center align-items-center">

           <div class="col-lg-6 col-md-6 col-6 order-lg-1 order-md-1 order-2">
           	   <img src="img/info.svg" width="700px" height="600px" class="animate-img-info" alt="Virus">
           </div>

           <div class="col-lg-6 col-md-6 col-6 order-lg-1 order-md-1 order-1 info-text">
           	  <p>Coronaviruses are a large group of viruses that are common among animals. In rare cases, they are what scientists call zoonotic, meaning they can be transmitted from animals to humans, according to the US Centers for Disease Control and Prevention. 
           	  The viruses can make people sick, usually with a mild to moderate upper respiratory tract illness, similar to a common cold. Coronavirus symptoms include a runny nose, cough, sore throat, possibly a headache and maybe a fever, which can last for a couple of days.
              For those with a weakened immune system, the elderly and the very young, there's a chance the virus could cause a lower, and much more serious, respiratory tract illness like a pneumonia or bronchitis.
              There are a handful of human coronaviruses that are known to be deadly.</p>
           </div>
  	   </div>
 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L40,133.3C80,171,160,245,240,240C320,235,400,149,480,128C560,107,640,149,720,144C800,139,880,85,960,101.3C1040,117,1120,203,1200,234.7C1280,267,1360,245,1400,234.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

  </section>


  <section class="symptoms_tab mt-5 mb-5" id="symptoms">
  	   <div>
  	   	   <h1 class="text-center">SYMPTOMS</h1>
  	   </div>

     <div class="container">
  	   <div class="row container-fluid justify-content-center align-items-center">
  	   	   <div class="col-lg-4 col-md-4 col-12 order-lg-1 order-md-1 order-1 symp_cols"> 
               <div class="symp-img">
                   <img src="img/cough1.png" width="200px" height="200px">
               </div>
               <div class="symp-text">
           	       <h2 class="text-capitalize mt-2">cough</h2>
                </div>
  	       </div>
             
  	       <div class="col-lg-4 col-md-4 col-12 order-lg-2 order-md-2 order-2"> 
               <div class="symp-img">
                   <img src="img/fever.jpg" width="200px" height="200px">
               </div>
               <div class="symp-text">
           	       <h2 class="text-capitalize mt-2">fever</h2>
                </div>
  	       </div>

  	       <div class="col-lg-4 col-md-4 col-12 order-lg-3 order-md-3 order-3"> 
               <div class="symp-img">
                   <img src="img/vomit.png" width="200px" height="200px">
               </div> 
               <div class="symp-text">
           	       <h2 class="text-capitalize mt-2">vomiting</h2>
                </div>
  	       </div>
  	   </div>

  	   <div class="row container-fluid justify-content-center align-items-center">
  	   	   <div class="col-lg-4 col-md-4 col-12 order-lg-1 order-md-1 order-1"> 
               <div class="symp-img">
                   <img src="img/head.jpg" width="200px" height="200px">
               </div>
               <div class="symp-text">
           	       <h2 class="text-capitalize mt-2">headache</h2>
                </div>
  	       </div>
             
  	       <div class="col-lg-4 col-md-4 col-12 order-lg-2 order-md-2 order-2"> 
               <div class="symp-img">
                   <img src="img/breath.jpg" width="200px" height="200px">
               </div>
               <div class="symp-text">
           	       <h2 class="text-capitalize mt-2">short breath</h2>
                </div>
  	       </div>

  	       <div class="col-lg-4 col-md-4 col-12 order-lg-3 order-md-3 order-3"> 
               <div class="symp-img">
                   <img src="img/fatigue.png" width="200px" height="200px">
               </div> 
               <div class="symp-text">
           	       <h2 class="text-capitalize mt-2">fatigue</h2>
                </div>
  	       </div>
  	   </div>
     </div>

  </section>


  <section class="precautions_tab mb-5 mt-5" id="precautions">
  	  <div class="heading">
  	  	  <h1 class="text-center text-uppercase">precautions</h1>
  	  </div>

   <div class="container-fluid">
  	  <div class="precautions_cols row container justify-content-center align-items-center mt-5">
          <div class="col-lg-6 col-md-6 col-12">
          	 <img src="img/wash.png" width="200px" height="200px">
          	 <h2 class="text-capitalize">wash your hands</h2>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
          	 <img src="img/mask.png" width="200px" height="200px">
          	 <h2 class="text-capitalize">wear masks</h2>
          </div>
  	  </div>

  	  <div class="precautions_cols row container justify-content-center align-items-center mt-5">
          <div class="col-lg-6 col-md-6 col-12">
          	 <img src="img/distance.png" width="200px" height="200px">
          	 <h2 class="text-capitalize">social distancing</h2>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
          	 <img src="img/coverface.jpg" width="200px" height="200px">
          	 <h2 class="text-capitalize">cover your face</h2>
          </div>
  	  </div>
  	</div>
  </section>

  <section class="about_us">

  	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300"><path fill="#52de97" fill-opacity="1" d="M0,160L288,96L576,192L864,256L1152,96L1440,64L1440,0L1152,0L864,0L576,0L288,0L0,0Z"></path></svg>

      <div class="heading">
      	  <h1 class="text-center text-uppercase">about us</h1>
      </div>

  	  <div class="container text-capitalize">
          <p>this website is just for awareness regarding covid-19 pandemic. we support all kind of actions taken for the wellness of the world . this website provides you the precise live data report of the covid-19 cases. we help common people to understand the concept of protection from corona virus.</p>
  	  </div>

  	  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#52de97" fill-opacity="1" d="M0,256L288,320L576,128L864,192L1152,64L1440,96L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
  </section>


<script type="text/javascript">
	
	 function fetch()
	 {
        
	 	$.get("https://api.covid19api.com/summary",
              
              function (data)
              {
              	//console.log(data['Countries'].length);

              	var showval = document.getElementById('showval');

              	showval.innerHTML = data['Global']['TotalConfirmed'];

              	var deaths = document.getElementById('deaths');

              	deaths.innerHTML = data['Global']['TotalDeaths'];

              	var recovers = document.getElementById('recovers');

              	recovers.innerHTML = data['Global']['TotalRecovered'];

              	var tbval = document.getElementById('tbval');
              	

              	//console.log(data['Countries'].length);
                

              	for(var i=1; i < (data['Countries'].length); i++ )
              	{
              		var x = tbval.insertRow();

              		x.insertCell(0);

              		tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
              		tbval.rows[i].cells[0].style.background = '#7a4a91';
              		tbval.rows[i].cells[0].style.color = '#fff';

                    x.insertCell(1);
              		tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed']; // 1
              		tbval.rows[i].cells[1].style.background = '#f8b24f';

              		x.insertCell(2);
              		tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalDeaths'];  //  2 
              		tbval.rows[i].cells[2].style.background = '#ec7373';
                    
                    x.insertCell(3);
              		tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalRecovered']; // 3 
              		tbval.rows[i].cells[3].style.background = '#ccda46';

                    x.insertCell(4);
              		tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];  // 4 
              		tbval.rows[i].cells[4].style.background = '#f8b24f';

                    x.insertCell(5);
              		tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];  // 5 
              		tbval.rows[i].cells[5].style.background = '#ec7373';

              		x.insertCell(6);
              		tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewRecovered'];  // 6
              		tbval.rows[i].cells[6].style.background = '#ccda46';

              	}
              }
	 		)
	 }

</script>

 <!-- <script type="text/javascript">

 	var btn = document.getElementById('upbtn');

 	window.onscroll() = function () { function top(); };

 	function top()
 	{
        if(document.body.scrollTop() > 100 || document.documentElement.scrollTop() > 100 )
        {
        	document.btn.style('display:block');
        }
        else
        {
        	document.btn.style('display:none');
        }
 	}
	



     function move()
     {
     	document.body.scrollTop() = 0; // for safari
     	document.documentElement.scrollTop() = 0; // for CHROME , IE , FIREFOX .

     }
	 
</script>
 -->
 <!-- FOOTER CREDS ENDS HERE -->

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script  src="js/aos.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<script src="js/owl.carousel.min.js" type="text/javascript"></script>


<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owl.js" type="text/javascript"></script>

<script type="text/javascript">
  AOS.init({
    duration:1000,
  });
</script>
</body>
</html>