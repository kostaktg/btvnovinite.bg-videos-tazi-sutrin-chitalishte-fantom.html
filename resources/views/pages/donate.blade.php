
@extends('layouts.master', ['title' => '5'])



@section('title')

Дарения

@endsection



@section('content')  


@include('includes.pagetitle')
{{-- от тука почвам даренията  --}}



    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        /* Add a gray background color and some padding to the footer */
        
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
        
        .carousel-inner img {
            width: 100%;
            /* Set width to 100% */
            margin: auto;
            min-height: 200px;
        }
        /* Hide the carousel text when the screen is less than 600 pixels wide */
        
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }

        A.epay-button { border: solid  1px #FFF; background-color: #168; padding: 6px; color: #FFF; background-image: none; font-weight: normal; padding-left: 20px; padding-right: 20px; }
        A.epay-button:hover       { border: solid  1px #ABC; background-color: #179; padding: 6px; color: #FFF; background-image: none; font-weight: normal; padding-left: 20px; padding-right: 20px; }

        A.epay { text-decoration: none; border-bottom: dotted 1px #168; color: #168; font-weight: bold; }
        A.epay:hover              { text-decoration: none; border-bottom: solid  1px #179; color: #179; font-weight: bold; }

        TABLE.epay-view { white-space: nowrap; background-color: #CCC; }

        /********** VIEWES **********************************************************/

        TD.epay-view { width: 100%; text-align: center; background-color: #DDD; }
        TD.epay-view-header {                                  background-color: #168; color: #FFF; height: 30px; }
        TD.epay-view-name { width:  25%; text-align: right;  background-color: #E9E9F9; border-bottom: none;  height: 30px; }
        TD.epay-view-value { width:  75%; text-align: left;   background-color: #E9E9F9; border-bottom: none; white-space: normal; }

        INPUT.epay-button { border: solid  1px #FFF; background-color: #168; padding: 4px; color: #FFF; background-image: none; padding-left: 20px; padding-right: 20px; }
        INPUT.epay-button:hover   { border: solid  1px #ABC; background-color: #179; padding: 4px; color: #FFF; background-image: none; padding-left: 20px; padding-right: 20px; }
    </style>


    <div class="container text-center">    
      <h3><p>НАРОДНО ЧИТАЛИЩЕ "ВИРТУАЛЕН СВЯТ  гр. <strong>Благоевград</strong> - 15.11.2004Г."</p> 
          <p>Набираме дарения по проект:</p> <p> "Социално посредничество за интеграция на
          бежанците в страните на Европейския съюз"</p></h3><br>
          <div class="row">
            <div class="col-sm-4">
               <div class="well">
                   <p>Банкова сметка:</p>
                   <p>Интернешънъл Асет Банк АД<br> IBAN:BG19IABG74581100282101</p>
                   ВIC:IABGBGSF<br> НПО“СНЦ Пирин тв”
               </div>

           </div>
           <div class="col-sm-4"> 
              <img src="https://socalcosh.files.wordpress.com/2016/03/donate-700x240.jpg" class="img-responsive" style="width:100%" alt="Image">

          </div>
          <div class="col-sm-4">
              <div class="well">
              <p>За дарения с Пейпал</p>
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
           <p>За дарения с ePay над 300 BGN моля използвайте име: Емил Войнов Радев , email: pirin.tv@abv.bg , код: 9376022866</p>
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
<p>Дарения с кредитни карти чрез пос терминал на телефон: +359 897 8 555 95</p>
       </div>
   </div>
</div>
</div><br>
<div class="well"> 
    <h4>Общи условия за извършване на онлайн дарение, през уебсайта на НАРОДНО ЧИТАЛИЩЕ "ВИРТУАЛЕН СВЯТ  гр. <strong>Благоевград</strong> - 15.11.2004Г."</h4>
    <p>25 май 2017</p>
    <p><b>I. Общи условия</b></p>

    <p class="text-left">1. Тези „общи условия“ описват правилата за предоставяне на услугата „Извършване на онлайн дарение“ между НАРОДНО ЧИТАЛИЩЕ "ВИРТУАЛЕН СВЯТ  гр. <strong>Благоевград</strong> - 15.11.2004Г."”, наричана по-долу “Читалището”, с адрес Ул. “Свобода” № 1, 2700 Благоевград, България virtualworld@abv.bg

        Телефон: +359 897855595 .

        И лицата, подкрепили Читалището, посредством онлайн паричен превод, наричани по-долу ДАРИТЕЛИ.</p>

        <p class="text-left">2. Уебсайтът на Читалището, дава възможност на дарителите да направят дарение чрез дебитна или кредитна карта, явно или анонимно.</p>

        <p class="text-left">3. Дарителят посочва сумата, която иска да дари.</p>

        <p class="text-left">4. Дарителят извършва дарението в американски долари (USD).</p>

        <p class="text-left">5. 5. Дарителят дарява посочената в т.3 сума на основание чл.225 от ЗЗД и безвъзмездно в полза на Читалището.</p>

        <p class="text-left">6. Направеното дарение по чл. 255 от ЗЗД не подлежи на отказ и възстановяване.</p>

        <p class="text-left">7. Читалището, приема дарението с благодарност и се задължава да използва получените средства в съответствие с целите и мисията на сдружението.</p>

        <p><b>II. Защита на данните</b></p>

        <p class="text-left">1. Читалището е администратор на лични данни по смисъла на ЗЗЛД, регистриран от Комисията за защита на личните данни,

            рег. No 139917</p>

            <p class="text-left">2. Данните Ви няма да бъдат споделяни с трети страни без Вашето предварително съгласие и ще бъдат използвани единствено с цел

                комуникация с Вас.</p></div>


        

		@endsection('content') 