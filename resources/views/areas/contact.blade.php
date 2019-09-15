 <!--contact start-->
 <section class="contact" id="contact">
        <div class="container topCon">
          <div class="heading">
            <h2>Contactez-moi</h2>
            <p></p>
          </div>
        </div>
    
      <!-- CARTE -->
        <!----div class="row mapArea">
          <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=-37.817682,144.957595&amp;spn=0.01134,0.026157&amp;t=m&amp;z=16&amp;output=embed"></iframe>
        </div-->
        
      </section>
      <section class="contactDetails">
        <div class="container">
          <!--contact info start-->
          <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
            <h4>Mes coordonnées</h4>
    <p> <i class="fa fa-map-marker fa-lg"></i> 34 Rue Léon Fontaine, 95210 Saint-Gratien</p>
            <p> <i class="fa fa-linkedin-square fa-lg"></i> <a href="https://www.linkedin.com/in/a%C3%AFssatou-tandian-20335760/">Mon profil Linkedin</a></p>
            <p> <i class="fa fa-envelope-o "></i> <a href="mailto:atandian@yahoo.fr">atandian@yahoo.fr</a></p>
            <!--p> <i class="fa fa-link "></i> <a href="www.websitename.com">www.atandian.com</a></p-->
          </div>
          <!--contact info end-->
          <!--contact form start-->
          <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 conForm">
            <h4>Ecrivez-moi !</h4>
            <div id="message"></div>
            <form method="post" action="php/contact.php" name="cform" id="cform">
              <input name="name" id="name" type="text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" placeholder="Nom..." >
              <input name="email" id="email" type="email" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 noMarr" placeholder="Email..." >
              <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
              <input type="submit" id="submit" name="send" class="submitBnt" value="Envoyer">
              <div id="simple-msg"></div>
            </form>
          </div>
          <!--contact form end-->
        </div>
    </section>
    <!--contact end-->