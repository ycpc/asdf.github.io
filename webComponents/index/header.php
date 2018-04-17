<style>
  .masthead {
    height: 80% !important;
    overflow: hidden!important;
    background-color: #000;
  }
  .primaryTitle{
    background-color: rgba(0, 153, 204, 0) !important;
    padding-top: 10%;
    font-size: 25px;
    font-weight: bolder;
    font-family: Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  }
  .primaryDescription{
    font-family:'hero'; padding-bottom:4%;
    background-color: rgba(0, 153, 204, 0) !important;
    padding-bottom: 10%
    font-size: 15px!important;
  }
   .primaryad{
     font-family:'Montserrat'; padding-bottom:4%;
    background-color: rgba(0, 153, 204, 0) !important;
    padding-top: 10%;
    font-size: 30px;
    font-weight: bolder;
     color: rgb(199, 206, 229) !important;
       text-decoration: none;
  }
  #headerIndex {
    color: #dedeff;
    z-index: 5;
    min-height: 90%;
    padding-bottom: 0!important;
    padding-top: 0!important;
    height: 100% !important;
    background: #09C bottom center no-repeat fixed url(img/backgrounds/PicMonkey2.jpg);
    background: url(img/backgrounds/PicMonkey2.jpg) !important;
    background-size: cover !important;
  }
  #bluetransOuter {
    background-color: rgba(0, 153, 204, 0.6);
    content: "";
    top: 0;
    left: 0;
    background-color: rgba(0, 153, 204, 0.8) !important;
    bottom: 0;
    right: 0;
    z-index: -2;
  }
  #bluetrans {
    padding:5%;
    content: "";
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
    -webkit-mask: -webkit-linear-gradient(left, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1) 3%, rgba(255, 255, 255, 1) 97%, rgba(255, 255, 255, 0));
    background-color: rgba(0, 153, 204, 0.25)!important;
  }
  .whitetrans {
    background-color: rgba(255, 255, 255, 0)!important;
    padding-top: 10% !important;
    padding-left: 0px;
    padding-right: 0px;
    content: "";
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
  }
  @media(min-width:767px) {
    #headerIndex{
      background: #09C;
      background-size:cover !important;
    }
    .primaryTitle{
      background-color: rgba(0, 153, 204,0) !important; 
      font-size: 350%!important
    }
    .primaryDescription{
      background-color: rgba(0, 153, 204,0) !important; 
      font-size: 36px!important;
    }
  }
</style>
<header class = "masthead" style = "height:auto !important;">
  <section class="container-fluid" id="headerIndex" style = "padding-left:0px; padding-right:0px; height:auto !important;">
    <div id = "bluetransOuter">
      <div class = 'alert alert-danger' id = "donate" role='alert' style = 'width:100% !important; margin:0% !important; margin-bottom:0% !important; padding-left:10%; padding-right:none !important; padding-top:65px !important; position:absolute;visibility:hidden;'>
        <h1>Online donations are currently offline.</h1>
        <p>Please make all checks payable to: "Youth Competitive Programming Circle".</p>
        <br>
      </div>
      <div id = "bluetrans">
        <br><br>
        <p class="text-center v-center primaryTitle">YOUTH COMPETITIVE PROGRAMMING CIRCLE</p>
        <h1 class = "text-center toptext primaryDescription">Student-Oriented Hackathon Preparation</h1>
        <!--  <a href="http://www.ycpc.us/internships" target="_blank">
        <h1 class = "text-center toptext primaryad" > APPLY FOR OUR SUMMER 2017 INTERNSHIP TODAY!<br></h1>
        </a> -->
        <div class = "row">
          <div class = "col-sm-8"></div>
          <div class = "col-sm-4" align="center">
            <script type="text/javascript">
              $(window).bind("load", function() {
                $.getScript('https://apis.google.com/js/plusone.js', function() {});
              });
            </script>
          <a href="http://www.guidestar.org/organizations/46-5024245/youth-competitive-programming-circle.aspx" target="_blank">
            <img src="https://widgets.guidestar.org/gximage2?o=9459738&l=v4" />
          </a>
          <br><br>
          <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FYouth-Competitive-Programming-Circle%2F1458389094420402&amp;width=120&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:60px;" allowTransparency="true"></iframe>
          <g:plusone style = "padding-right:5%; margin-right:5%; " size="tall"></g:plusone>
          <br><br>
        </div>
      </div>
    </div>
  </div>
</section>
</header>
