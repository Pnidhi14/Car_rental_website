><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
	background-image:url("../image/background 2.jpg");
}


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

:root{
    --yellow:#f9d806;
    --light-yellow:#ffee80;
    --black:#130f40;
	--dark black:#000000,
    --light-color:#666;
	--blue:#8cacea;
	--navy:#000080;
	--white:#ffffff;
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    --border:.1rem solid rgba(0,0,0,.1);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}


.heading{
    padding-bottom: 2rem;
    text-align: center;
    font-size: 4.5rem;
    color:var(--black);
}

.heading span{
    position: relative;
    z-index: 0;
}

.heading span::before{
    content: '';
    position: absolute;
    bottom:1rem; left:0;
    height: 100%;
    width: 100%;
    background: var(--light-yellow);
    z-index: -1;
    clip-path: polygon(0 90%, 100% 80%, 100% 100%, 0% 100%);
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    padding:.8rem 3rem;
    background:var(--light-yellow);
    color:var(--black);
    cursor: pointer;
    font-size: 1.7rem;
    border-radius: .5rem;
    font-weight: 500;
    text-align: center;
}

.btn:hover{
    background:var(--blue);
}

.header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top:0; left:0; right:0;
    padding:3rem 9%;
    z-index: 1000;
    background: #fff;
}

.header .logo{
    font-size: 2.5rem;
    color:var(--black);
    font-weight: bold;
}

.header .logo span{
    color:var(--yellow);
}

 .navbar a{
    margin:0 1rem;
    font-size: 1.5rem;
    color:var(--white);
}

 .navbar a:hover{
    color:var(--yellow);
}


 nav ul{
   padding:0;
   margin:0;
   float:right;
   margin-right:30px;
}

 nav ul li{
	background:#2c3e50;
    position:relative;
    list-style:none;
	display:inline-block;
	font-color:#ffffff;
}

nav ul li a{
	display:block;
	padding:0 15px;
	color:#ffffff;
	text-decoration:none;
	line-height:60px;
	font-size:5px;
}

nav ul li a:hover{
	background:#243342;
}

nav ul ul{
	position:absolute;
	top:60px;
	display:none;
}

nav ul li:hover > ul{
	display:block;
	width:200px;
	padding:5px;
	background:transparent;
	border-radius:0;
	text-align:left;
}

nav ul ul li{
	width:250px;
	float:none;
	display:list-item;
	position:relative;
}

}
#login-btn .btn{
    margin-top: 0;
}

#login-btn i{
    display: none;
    font-size: 2.5rem;
    color:var(--light-color);
}

.header.active{
    padding:2rem 9%;
    box-shadow: var(--box-shadow);
}

#menu-btn{
    font-size: 2.5rem;
    color:var(--light-color);
    display: none;
}

.login-form-container{
    position: fixed;
    top:-105%; left:0;
    height:100%;
    width:100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background:rgba(255,255,255,.9);
    z-index: 10000;
}

.login-form-container.active{
    top:0;
}

.login-form-container form{
    margin:2rem;
    text-align: center;
    padding:2rem;
    width:40rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    border:var(--border);
    background: #fff;
}

.login-form-container form .buttons{
    display: flex;
    gap:1rem;
    align-items: center;
}

.login-form-container form .btn{
    display: block;
    width:100%;
    margin:.5rem 0;
}

.login-form-container form .box{
    margin:.7rem 0;
    width: 100%;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
    border:var(--border);
    padding:1rem 1.2rem;
    border-radius: .5rem;
}

.login-form-container form p{
    padding:1rem 0;
    font-size: 1.5rem;
    color:var(--light-color);
}

.login-form-container form p a{
    color:var(--yellow);
    text-decoration: underline;
}

.login-form-container form h3{
    padding-bottom:1rem;
    font-size: 2.5rem;
    color:var(--black);
    text-transform: uppercase;
}

.login-form-container #close-login-form{
    position: absolute;
    top:1.5rem; right:2.5rem;
    font-size: 5rem;
    color:var(--black);
    cursor: pointer;
}

.home{
    padding-top:15rem;
    text-align: center;
    overflow-x: hidden;
}

.home h3{
    color:var(--black);
    font-size: 2.5vw;
    text-transform: uppercase;
}

.home h4{
    color:var(--black);
    font-size: 1vw;
	font-style: italic;
    text-transform: uppercase;
}

.home h5{
    color:var(--navy);
    font-size: .75vw;
	font-style: italic;
    text-transform: uppercase;
}

.home img{
    width:75%;
    margin:1rem -50;
}


.icons-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
    padding-top: 5rem;
    padding-bottom: 5rem;
    background: #eee;
}

.icons-container .icons{
    background:#fff;
    display: flex;
    align-items: center;
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    padding:2rem;
    gap:1.5rem;
}

.icons-container .icons i{
    height:5rem;
    width:5rem;
    line-height:5rem;
    font-size:2.5rem;
    color:var(--black);
    background:#eee;
    text-align: center;
    border-radius: 50%;
}

.icons-container .icons .content h3{
    font-size: 2.5rem;
    color:var(--yellow);
}

.icons-container .icons .content p{
    font-size: 1.5rem;
    color:var(--light-color);
}

.icons-container .icons:hover{
    background:var(--black);
}

.icons-container .icons:hover i{
    background:var(--yellow);
}

.icons-container .icons:hover .content h3{
    color:#fff;
}

.icons-container .icons:hover .content p{
    color:#eee;
}

.vehicles .vehicles-slider{
    padding-bottom: 5rem;
}

.vehicles .vehicles-slider .box{
    text-align: center;
}

.vehicles .vehicles-slider .box img{
    width:100%;
    transform: scale(.8);
    opacity: .5;
}

.vehicles .vehicles-slider .box .content{
    padding-top: 1rem;
    transform: scale(0);
}

.vehicles .vehicles-slider .swiper-slide-active .content{
    transform: scale(1);
}

.vehicles .vehicles-slider .swiper-slide-active img{
    transform: scale(1);    
    opacity: 1;
}

.vehicles .vehicles-slider .box .content h3{
    font-size: 2.5rem;
    color:var(--black);
}

.vehicles .vehicles-slider .box .content .price{
    font-size: 2.2rem;
    color:var(--yellow);
    padding:1rem 0;
    font-weight: bolder;
}

.vehicles .vehicles-slider .box .content .price span{
    color:var(--light-color);
    font-size: 1.5rem;
    font-weight: normal;
}

.vehicles .vehicles-slider .box .content p{
    font-size: 1.6rem;
    color:var(--light-color);
    padding: 1rem 0;
    padding-top: 1.5rem;
    border-top: var(--border);
}

.vehicles .vehicles-slider .box .content span{
    font-size: 1rem;
    color:var(--yellow);
    padding:0 .5rem;
}

.swiper-pagination-bullet-active{
    background: var(--yellow);
}

.services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.services .box-container .box{
    padding:2rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    border:var(--border);
    text-align: center;
}

.services .box-container .box i{
    height:6rem;
    width:6rem;
    line-height: 6rem;
    border-radius: 50%;
    font-size: 2.5rem;
    margin-bottom: 1rem;
    background:var(--yellow);
    color:var(--black);
}

.services .box-container .box h3{
    font-size: 2.2rem;
    color:var(--black);
}

.services .box-container .box p{
    line-height: 1.8;
    padding:1rem 0;
    font-size: 1.4rem;
    color:var(--light-color);
}

.services .box-container .box:hover{
    background: var(--black);
}

.services .box-container .box:hover h3{
    color:#fff;
}

.services .box-container .box:hover p{
    color:#eee;
}

.featured .featured-slider{
    padding:1rem;
    padding-bottom: 4rem;
	font-size: 2rem;
}

.featured .featured-slider .box{
    padding:2rem;
    text-align: center;
    box-shadow: var(--box-shadow);
    border:var(--border);
    border-radius: .5rem;
}

.featured .featured-slider .box img{
    height: 15rem;
}

.featured .featured-slider .box:hover img{
    transform: scale(.9);
}

.featured .featured-slider .box .content h3{
    font-size: 1rem;
    color:var(--navy);
}

.featured .featured-slider .box .content .stars{
    padding:1rem 0;
}

.featured .featured-slider .box .content .stars i{
    font-size: 1rem;
    color:var(--yellow);
}

.featured .featured-slider .box .content .condition{
    font-size: 1.5rem;
    color:var(--dark black);
	padding:bold;
}



.newsletter{
    padding:6rem 2rem;
    background: url(../image/letter-bg.png) no-repeat;
    background-size: cover;
    background-position: center;
    text-align: center;
}

.newsletter h3{
    font-size: 3rem;
    color:var(--black);
}

.newsletter p{
    font-size: 1.3rem;
    color:var(--light-color);
    padding:1rem 0;
	text-transform:none;
}

.newsletter form{
    max-width: 60rem;
    height:5rem;
    background:#fff;
    border-radius: 5rem;
    overflow:hidden;
    display: flex;
    margin:1rem auto;
    box-shadow: var(--box-shadow);
}

.newsletter form input[type="email"]{
    height: 100%;
    width:100%;
    padding:0 2rem;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
}

.newsletter form input[type="submit"]{
    height: 100%;
    width:17rem;
    font-size: 1.7rem;
    color:var(--black);
    background: var(--light-yellow);
    cursor: pointer;
}

.newsletter form input[type="submit"]:hover{
    background: var(--yellow);
}

.reviews .review-slider{
    padding-bottom: 3rem;
}

.reviews .review-slider .box{
    text-align: center;
    padding:2rem;
    margin: 2rem 0;
    opacity: .4;
    transform: scale(.9);
}

.reviews .review-slider .swiper-slide-active{
    opacity: 1;
    transform: scale(1);
    box-shadow: var(--box-shadow);
    border:var(--border);
    border-radius: .5rem;
}

.reviews .review-slider .box img{
    height:7rem;
    width:7rem;
    border-radius: 50%;
    object-fit: cover;
}

.reviews .review-slider .box .content p{
    color:var(--light-color);
    font-size: 1.4rem;
    padding:1rem 0;
}

.reviews .review-slider .box .content h3{
    color:var(--black);
    font-size: 2.2rem;
    padding-bottom: .5rem;
}

.reviews .review-slider .box .content .stars i{
    color:var(--yellow);
    font-size: 1.7rem;
}

.contact .row{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.contact .row .map{
    flex:1 1 42rem;
    width: 100%;
    padding:2rem;
    box-shadow: var(--box-shadow);
    border:var(--border);
    border-radius: .5rem;
}

.contact .row form{
    padding:2rem;
    flex:1 1 42rem;
    box-shadow: var(--box-shadow);
    border:var(--border);
    text-align: center;
    border-radius: .5rem;
}

.contact .row form h3{
    font-size: 3rem;
    color:var(--black);
    padding-bottom: 1rem;
}

.contact .row form .box{
    width:100%;
    border-radius: .5rem;
    padding:1rem 1.2rem;
    font-size: 1.6rem;
    text-transform: none;
    border:var(--border);
    margin:.7rem 0;
}

.contact .row form textarea{
    height:15rem;
    resize: none;
}


.footer{
    background: var(--light-yellow);
    padding-bottom: 8rem;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    font-size: 2.2rem;
    padding:1rem 0;
    color:var(--black);
}

.footer .box-container .box a{
    display: block;
    font-size: 1.4rem;
    padding:1rem 0;
    color:var(--light-color);
}

.footer .box-container .box a i{
    padding-right: .5rem;
    color:var(--black);
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .credit{
    text-align: center;
    padding:1.5rem;
    padding-top: 2.5rem;
    margin-top: 2rem;
    border-top: var(--border);
    font-size: 2rem;
    color:var(--black);
}
















@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .header{
        padding:2rem;
    }

    .header.active{
        padding:2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: block;
    }

    #menu-btn.fa-times{
        transform:rotate(180deg);
    }

    #login-btn .btn{
        display: none;
    }

    #login-btn i{
        display: block;
    }

    .header .navbar{
        position: absolute;
        top:99%; left:0; right:0;
        background: #fff;
        border-top: var(--border);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    .header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    .header .navbar a{
        margin:2rem;
        display: block;
        font-size: 2rem;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

    .heading{
        font-size: 3rem;
    }

}
</style>
</head>

<body>
    
</body>
</html>
<footer>

<section class="footer" id="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"> <i class="fa fa-arrow-right"></i> home </a>
            <a href="aboutus.php"> <i class="fa fa-arrow-right"></i> cars </a>
            <a href="FAQ.php"> <i class="fa fa-arrow-right"></i>FAQ </a>
            <a href="contact-us.php"> <i class="fa fa-arrow-right"></i> contact us </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fa fa-phone"></i> 7856035695 </a>
            <a href="#"> <i class="fa fa-phone"></i>7209801790</a>
            <a href="#"> <i class="fa fa-envelope"></i>vinnusingh785@gmail.com</a>
            <a href="#"> <i class="fa fa-map-marker"></i> RKU,Rajkot- 360020   </a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fa fa-facebook-f"></i> facebook </a>
            <a href="https://github.com/vinnu78"> <i class="fa fa-github"></i> github </a>
            <a href="#"> <i class="fa fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/in/vinita-kumari-18b87a271/?lipi=urn%3Ali%3Apage%3Aprofile_common_profile_index%3B06e57ee5-0fbd-4afa-aeaf-d04cdadaf354"> <i class="fa fa-linkedin"></i> linkedin </a>
    
        </div>

    </div>

    <div class="credit"> created by Car Rental | all copyrights reserved by CarS - 2024 </div>

</section>
</footer>

