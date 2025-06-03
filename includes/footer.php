<style type="text/css">
    
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap');

/**{
  margin: 0;
  padding: 0;
  color: #d9d9d9;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.content1{
  position: relative;
  margin: 130px auto;
  text-align: center;
  padding: 0 20px;
}*/
.content1 .text{
  font-size: 2.5rem;
  font-weight: 600;
  color: #202020;
}
.content1 .p{
  font-size: 2.1875rem;
  font-weight: 600;
  color: #202020;
}
footer{
  position: relative;
  bottom: 0px;
  width: 100%;
  background: #111;
  color: #d9d9d9;
  font-family: 'Bubblegum Sans', cursive;
  font-weight: bold;
}
.main-content{
  display: flex;
}
.main-content .box{
  flex-basis: 50%;
  padding: 10px 20px;
}
.box h2{
  font-size: 1.125rem;
  font-weight: 600;
  text-transform: uppercase;
}
.box .content{
  margin: 20px 0 0 0;
  position: relative;
}
.box .content:before{
  position: absolute;
  content: '';
  top: -10px;
  height: 2px;
  width: 100%;
  background: #1a1a1a;
}
.box .content:after{
  position: absolute;
  content: '';
  height: 2px;
  width: 15%;
  background: #f12020;
  top: -10px;
}
.left .content p{
  text-align: justify;
}
.left .content .social{
  margin: 20px 0 0 0;
}
.left .content .social a{
  padding: 0 2px;
}
.left .content .social a span{
  height: 40px;
  width: 40px;
  background: #fff;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
}

.fb{
    color: #3B5998;
}

.fb:hover{
    color: white;
}

.tw{
    color: #26a7de;
}

.tw:hover{
    color: ghostwhite;
}

.yt{
    color: #c4302b;
}

.yt:hover{
    color: ghostwhite;
}

.left .content .social a .fb:hover{
  background: #3B5998;
}
.left .content .social a .tw:hover{
  background: black;
}

.left .content .social a .yt:hover{
  background: black;
}

.center .content .fas{
  font-size: 1.4375rem;
  background: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  cursor: pointer;
}
.center .content .fas:hover{
  background: #f12020;
}
.center .content .text{
  font-size: 1.0625rem;
  font-weight: 500;
  padding-left: 10px;
}
.center .content .phone{
  margin: 15px 0;
}

.phone .text a{
    font-size: .84em;
    color: white;
    text-decoration: none;
}

.email .text a{
    font-size: 1em;
    color: white;
    text-decoration: none;
} 
.bottom center{
  padding: 5px;
  font-size: 0.9375rem;
  background: #151515;
}
.bottom center span{
  color: #656565;
}
.bottom center a{
  color: #f12020;
  text-decoration: none;
}
.bottom center a:hover{
  text-decoration: underline;
}
.footlinks{
    color: lightcyan;
    text-decoration: none;
}

.footlink{
    padding: 5px;
}

@media screen and (max-width: 900px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }
}
</style>
  <body>
    <footer>
      <div class="main-content">
        <div class="left box">
          <h2 style="color: ghostwhite;">Links</h2>
          <div class="content">
            <div>
                <ul style="list-style: none;padding: 10px;">
                    <li class="footlink"><a class="footlinks" href="index.php">HOME</a></li>
                    <li class="footlink"><a class="footlinks" href="admissionprocess.php">ADMISSION</a></li>
                    <li class="footlink"><a class="footlinks" href="newscorner.php">NEWS CORNER</a></li>
                    <li class="footlink"><a class="footlinks" href="imagegallery.php">IMAGE GALLERY</a></li>
                    <li class="footlink"><a class="footlinks" href="achievements.php">ACHIEVEMENTS</a></li>
                </ul>
            </div>
            <div class="social">
              <a href="https://www.facebook.com/sssamboli/"><span class="fa-brands fa-facebook-f fb"></span></a>
              <a href="#"><span class="fa-brands fa-twitter tw"></span></a>
              <a href="https://www.youtube.com/channel/UCl8Q0dKY-AOLxn9l0U1prMg"><span class="fa-brands fa-youtube yt"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2>Contact</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Amboli, Sawantwadi</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text"><a href="tel:7822942081"> 7822942081</a> / <a href="tel:9420195518"> 9420195518</a></span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text"><a href="mailto:schoolamboli@yahoo.co.in">sainikschoolamboli@yahoo.co.in</a></span>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Find us</h2>
          <div class="content">
                <div style="text-align: center;padding: 50px auto;">
                    <iframe style="margin-top: 20pt;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3171.67624752992!2d73.99775127412597!3d15.962416042290558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc077a4a61308f3%3A0xb6c5cabd90764eb4!2sSindhudurg%20Sainik%20School%2C%20Amboli!5e1!3m2!1sen!2sin!4v1686646712822!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit" style="color: whitesmoke;">Created By <a style="color: yellow;text-decoration: underline;" href="https://www.instagram.com/siddhesh_gawade11/">Siddhesh A. Gawade</a> | © <?php echo date("Y"); ?> Sindhudurg Sainik School Amboli</span>
        </center>
        <a style="color: yellow;text-align:center" target="_blank" href="https://www.amazon.in/MSI-Katana-15-i5-12450H-B12UDXK-1005IN/dp/B0C3HY3226/?_encoding=UTF8&amp;pd_rd_w=P1qyZ&amp;content-id=amzn1.sym.e5c03be3-10ba-4bc8-b9be-6fcea12320ed%253Aamzn1.symc.adba8a53-36db-43df-a081-77d28e1b71e6&amp;pf_rd_p=e5c03be3-10ba-4bc8-b9be-6fcea12320ed&amp;pf_rd_r=9D5T0T07GXYNBDYJG2AZ&amp;pd_rd_wg=5IOQv&amp;pd_rd_r=2643840c-f354-48b6-88ee-86007cd5793b&amp;ref_=pd_gw_ci_mcx_mr_hp_atf_m&amp;th=1&_encoding=UTF8&tag=siddhu4554-21&linkCode=ur2&linkId=0fe66b54b0869e7a316f058d449d450d&camp=3638&creative=24630">Best Gaming Laptops Online</a>
      </div>
    </footer>