
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>За контакти</h3>
		    			<p class="contact-us-details">
	        				<b>Адрес:</b> гр. <strong>Благоевград</strong>, ул. Свобода 1 етаж 2<br/>
	        				<b>Телефон:</b> 073/ 88 44 91<br/>
	        				<b>Fax:</b> няма<br/>
	        				<b>Email:</b> <a href="virtualworld@abv.bg">virtualworld@abv.bg</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3> <strong>Социалните мрежи</strong></h3>
						<p><a href="{{URL::route('index')}}">Читалище</a> <strong>Виртуален Свят гр. Благоевград. </strong> <strong>Социалните мрежи</strong> са добра възможност за популяризация на дейността чрез блога си,могат да привлекат бързо и безплатно определен брой посетители на страницата.</p>
		    			<div>
		    				<img src="{{URL('img/icons/facebook.png')}}" width="32" alt="Facebook">
		    				<img src="{{URL('img/icons/twitter.png')}}" width="32" alt="Twitter">
		    				<img src="{{URL('img/icons/linkedin.png')}}" width="32" alt="LinkedIn">
							<img src="{{URL('img/icons/rss.png')}}" width="32" alt="RSS Feed">
						</div>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Читалище "<strong>ВИРТУАЛЕН СВЯТ</strong>" </h3>
		    				<p>Скъпи приятели, вратите на нашето <strong>читалище</strong> гр. <strong>Благоевград</strong> са винаги отворени за нови членове. Много ще се радваме, ако се присъедините към нашето щастливо семейство.</p>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2017 <a href="http://www.gerivig.com">Gerivig </a> Kostadin Giuviyski .</div>
		    		</div>
		    	</div>
		    </div>
	    </div>



	    
        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write
        ('<script src="{{URL('js/Jscript.js')}}"><\/script>')
        </script>

        <script src="{{URL('js/Jscript.js')}}"></script>
		<script>
			$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
		</script>
	