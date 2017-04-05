    <div class="row">
        <div class="rodape">
            <div class="container">
                <h2>VIVO São Paulo</h2>
                <p>
                    <a href="/sao-paulo/" style="font-size:15px">VIVO estado de São Paulo, consulte sua cidade.</a>
                    <a href="/sao-paulo/" style="font-size:15px">VIVO Oferta 25 Mega</a>
                </p>

                <div class="redesSociais">
                    <ul>
                        <a href="https://www.facebook.com/vivocombo/"><li class="facebook"></li></a>
                        <a href="https://twitter.com/VivoPowercombo" target="_blank"><li class="twitter"></li></a>                       
                    </ul>
                </div>
            </div><!--container-->
        </div><!--rodape-->
    </div><!--row-->

    <footer class="site-footer">
        <div class="container">
            <div class="logoMini"></div>
            <div class="right">
                <p class="author vcard">
                    © 2015 - <span>.VIVO Agente Autorizado M2Center</span><br>
                    Direitos Reservados
                </p>

                <div class="clear"></div>
            </div>

        </div>
    </footer>

    <!--###################### MODAIS #######################-->

    <div class="remodal" data-remodal-id="ligamosParaVoce">
        <div>
        <h2 id="modal1Title" class="modal1Title">Ligamos Para você</h2>
            <div class="ligamos">
             <form id="ligamosParaVoceValidate" novalidate="novalidate" onsubmit="return false">
                <input type="text" id="nome" placeholder="Nome" name="nome"  data-validation="length" data-validation-length="min2" required>
                <input type="number" id="ddd" class="ddd_home" name="ddd" placeholder="DDD" maxlength="2" pattern="([0-9]|[0-9])" data-placement="right" required onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)">
                <input type="number" id="telefone" class="telefone_home" placeholder="telefone" maxlength="9"  name="telefone" data-placement="right" pattern="([0-9]|[0-9]|[0-9]|[0-9]|[0-9]|[0-9]|[0-9]|[0-9]|[0-9])" required onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)">   
                 <input type="hidden" name="site" id="site" value="powercombo">
                <input type="submit" class="submitLigamos">
                </form>
            </div>
        </div>
    </div>
 

    <script src="/js/jquery-3.2.0.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/jquery.flexslider.js"></script>
    <script src="/js/remodal.js"></script>
    <script src="https://rawgit.com/digitalBush/jquery.maskedinput/1.4.0/dist/jquery.maskedinput.js"></script>
   
    <script src="/js/jquery.validate.min.js"></script>
     <script src="/js/jquery-validate.bootstrap-tooltip.min.js"></script>
   
    <script src="/js/powercombo.js"></script>


           <script type="text/javascript">
        
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69039319-2', 'auto');
  ga('send', 'pageview');

    </script>

     <script type="text/javascript">
      window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
      d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
      _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
      $.src="//v2.zopim.com/?3LArJL4fDH3tNNiRAVLRFK5QvpzO4zFQ";z.t=+new Date;$.
      type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
</body>
</html>