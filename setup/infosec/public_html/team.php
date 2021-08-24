<?php
if (!isset($_SESSION['oturum']))
{
    header("Location: index.php");
    die();
}
?>
<div class="container">
    <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="/images/berkant.png">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Berkant Demirci</h3>
                        <h4 class="title">Web Developer</h4>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.linkedin.com/in/berkant-demirci/" class="fa-linkedin" aria-hidden="true">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="/images/emirhan.png">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Emirhan Mutlu</h3>
                        <h4 class="title">Web Developer</h4>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.linkedin.com/in/emirhanmtl/" class="fa-linkedin" aria-hidden="true">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="/images/gizem.png">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Gizem Bulut</h3>
                        <h4 class="title">Web Developer</h4>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.linkedin.com/in/gizembulut/" class="fa-linkedin" aria-hidden="true">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="/images/safiye.png">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Safiye Kako</h3>
                        <h4 class="title">Web Developer</h4>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.linkedin.com/in/safiye-kako-6b302a199/" class="fa-linkedin" aria-hidden="true">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="/images/yusuf.png">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Yusuf Çetinkaya</h3>
                        <h4 class="title" bottom="10px" id="abc">Web Developer</h4>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.linkedin.com/in/yusuf-%C3%A7etinkaya-87b1a3206/" class="fa-linkedin" aria-hidden="true">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
    </div>
</div>

<style>
    .container{
    margin: 0 auto;
    }
    .row{
    display: flex;
    flex-direction: row;
    margin: 0 auto;
    align-items: center;
    }

    body {
    font-family: tahoma;
    height: 100vh;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    }

    .our-team {
    padding: 30px 10px 40px;
    margin: 30px;
    width: 200px;
    height: 350px;
    background-color: #f7f5ec;
    text-align: center;
    overflow: hidden;
    position: relative;
    border-radius: 10px 10px 10px 10px;
    }

    .our-team .picture {
    display: inline-block;
    height: 130px;
    width: 130px;
    margin-bottom: 50px;
    z-index: 1;
    position: relative;
    }

    .our-team .picture::before {
    content: "";
    width: 100%;
    height: 0;
    border-radius: 50%;
    background-color: #7386d5;
    position: absolute;
    bottom: 135%;
    right: 0;
    left: 0;
    opacity: 0.9;
    transform: scale(3);
    transition: all 0.3s linear 0s;
    }

    .our-team:hover .picture::before {
    height: 100%;
    }

    .our-team .picture::after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #7386d5;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    }

    .our-team .picture img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    transform: scale(1);
    transition: all 0.9s ease 0s;
    }

    .our-team:hover .picture img {
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.7);
    }

    .our-team .title {
    display: block;
    font-size: 15px;
    color: #4e5052;
    text-transform: capitalize;
    }

    .our-team .social {
    width: 100%;
    padding: 0;
    margin: 0;
    background-color: #7386d5;
    position: absolute;
    bottom: -100px;
    left: 0;
    transition: all 0.5s ease 0s;
    }

    .our-team:hover .social {
    bottom: 0;
    }

    .our-team .social li {
    display: inline-block;
    }

    .our-team .social li a {
    display: block;
    padding: 5px;
    margin: 5px;
    font-size: 14px;
    background-color: white;
    transition: all 0.3s ease 0s;
    text-decoration: none;
    border-radius: 10px 10px 10px 10px;
    }

    .our-team .social li a:hover {
    color: #1369ce;
    background-color: #f7f5ec;
    }

</style>
