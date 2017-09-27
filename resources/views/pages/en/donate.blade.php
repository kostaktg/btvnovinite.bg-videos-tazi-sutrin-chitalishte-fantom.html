
@extends('layouts.enmaster', ['title' => '5'])



@section('title')

Дарения

@endsection



@section('content')  


@include('includes.pagetitle')
{{-- от тука почвам даренията  --}}




   

    <div class="container text-center">    
      <h3><p>Narodno chitalishte Virtualen sviat - 15.11.2004g.</p> 
          <p>We collect donations under a project :</p> <p> "Social mediation for integration of refugees in countries of the European Union"</p></h3><br>
           <div class="row">
            <div class="col-sm-4">
               <div class="well">
               <p>Bank account: International Asset Bank<br> IBAN:BG19IABG74581100282101</p>
                    ВIC:IABGBGSF<br> “SNC- Pirin TV”
                   
               </div>
               </div>
               <div class="col-sm-4"> 
              <img src="https://socalcosh.files.wordpress.com/2016/03/donate-700x240.jpg" class="img-responsive" style="width:100%" alt="Image">

          </div>
<div class="col-sm-4">
<div class="well">
Donate with PayPal
                  
                                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="267VV9CPFT492">
                                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>
               </div>
               </div>
                </div>

           
            
                                        

                                        
                                  
                                   
                                 <div class="well"> 
<p>For donations over 300 BGN with ePay use Name: Емил Войнов Радев , email: pirin.tv@abv.bg , code: 9376022866</p>
                                <form method="POST" action="https://www.epay.bg/v3main/paylogin">
                                    <table class=epay-view cellspacing=1 cellpadding=4 width=100%>
                                        <tr>
                                            <td class=epay-view-header align=center>Описание</td>
                                            <td class=epay-view-header align=center>Сума</td>
                                        </tr>
                                        <tr>
                                            <td class=epay-view-value><b>DONATE</b></td>
                                            <td class=epay-view-name> <input type=text name=TOTAL value="1000" size=5> BGN
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=2 class=epay-view-name>
                                                <input class=epay-button type=submit name=BUTTON:EPAYNOW value=" DONATE ">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=2 class=epay-view-value style="white-space: normal; font-size: x-small">
                                                Плащането се осъществява чрез <a class=epay href="https://www.epay.bg/">ePay.bg</a> - Интернет системата за плащане с банкови карти и микросметки
                                            </td>
                                        </tr>
                                    </table>

                                    <input type="hidden" name="MIN" value="6761637338">  <input type="hidden" name="DESCR" value="DONATE">
                                    <input type="hidden" name="URL_OK" value="https://www.epay.bg/v3main/front?p=thanks">
                                    <input type="hidden" name="URL_CANCEL" value="https://www.epay.bg/v3main/front?p=cancel">
                                    <input type="hidden" name="ENCODING" value="utf8"> <input type="hidden" name="CHECKSUM" value="9ec70f7e016092aced1480ee5d4ba068a3facd39"> </form>
                                    <p></p>
<p>Donate with credit cards from pos terminal with phone: +359 897 8 555 95</p>
                                    </div>
 </div>
</div>
<div class="well"> 
    <h4>General terms for online donating through Narodno chitalishte Virtualen sviat - 15.11.2004g. website</h4>
    <p>27 May 2017</p>
    <p><b>I. Generals</b></p>

    <p class="text-left">1. These "general terms" describe the conditions for "online donating" between NON-Governmental Organization “SNC- Pirin TV” , 1 "Svoboda" Street, 2700 Blagoevgrad, Bulgaria and persons who support the Association with donation, will be referred as Donor. virtualworld@abv.bg

     phone: +359 897855595 .

        </p>

        <p class="text-left">2. The website and Narodno chitalishte give the Donors the opportunity to donate via debit card or credit card.</p>

        <p class="text-left">3. The Donors indicate the donation sum, which he wants to donate.</p>

        <p class="text-left">4. The donation will be made in USD.</p>

        <p class="text-left">5. Under Article 225 of LOC, the Donor, donates the sum that he indicated in 3rd Section, free of charge in favor of Narodno chitalishte.</p>

        <p class="text-left">6. The donation under Article 225 of LOC is NON refundable and can not be refused.</p>

        <p class="text-left">7. Narodno chitalishte accepts the donation with gratitude. Narodno chitalishte shall use the received funds in accordance with objectives and the mission of the Association.</p>

        <p><b>II. Data Protection</b></p>

        <p class="text-left">1. Narodno chitalishte Foundation is as itself Data Protector under the PDPA, registered by the Commission for Personal Data Protection No 139917</p>

            <p class="text-left">2. Your Data will not be shared with third parties without your permission and will be used only to communicate with you.</p></div>
                

            </body>
            </html>

        </body>

        

		@endsection('content') 