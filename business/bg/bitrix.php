<div class="pageTitle fs24 text-white">
    <div class="inner">
        Банковская гарантия
    </div>
</div>
<section class="promoBlock promoBlockInfo noPadding" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/rko-prom.jpg');">
    <div class="bgTransparentBlue">
        <div class="inner text-white align-c">
            <h2 class="margin-bottom-m">Получите банковскую гарантию прямо сейчас</h2>
            <div class="tabsSwitcherContainer">
                <div class="btnsSwitch">
                    <ul class="menuItems tabsSwitcher">
                        <li><a href="#switch_0" class="btn btn_sec_two active">Через интернет</a></li>
                        <li><a href="#switch_1" class="btn btn_sec_two">В офисе</a></li>
                    </ul>
                </div>
                <div id="switch_0" class="switchable active">
                    <p>Зарегистрируйте заявку в интернете самостоятельно всего за минуту</p>
                    <svg class="ico-svg" data-ico="monitor"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=SITE_TEMPLATE_PATH?>/images/icon-set.svg#monitor"></use></svg>
                    <ul class="row customItems">
                        <li class="col4">
                            <div class="itemNumb">1</div>
                            <h4>Отправьте заявку</h4>
                            <p>Оставьте контактные данные уполномоченного лица. Наш менеджер свяжется с Вами и подтвердит заявку.</p>
                        </li>
                        <li class="col4">
                            <div class="itemNumb">2</div>
                            <h4>Загрузите документы</h4>
                            <p>Документы будут проверены без Вашего личного присутствия в Банке с целью экономии Вашего времени.</p>
                        </li>
                        <li class="col4">
                            <div class="itemNumb">3</div>
                            <h4>Получите договор и Банковскую гарантию</h4>
                            <p>Курьер бесплатно доставит документы в удобном для вас месте. Или Вы сможете самостоятельно забрать в любом из наших отделений Банка.</p>
                        </li>
                    </ul>
                    <!--<a href="#formRKO" class="btn btn-imp openPopUp">ОФОРМИТЬ ЗАЯВКУ</a>-->

                </div>
                <div id="switch_1" class="switchable">
                    <p>Посетите ближайший офис банка, где наши менеджеры помогут найти оптимальное <br>решение для вашего бизнеса</p>
                    <svg class="ico-svg" data-ico="locate_big"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=SITE_TEMPLATE_PATH?>/images/icon-set.svg#locate_big"></use></svg>
                    <div>
                        <svg class="ico-svg" data-ico="check"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=SITE_TEMPLATE_PATH?>/images/icon-set.svg#check"></use></svg>
                    </div>
                    <div class="row">
                        <div class="col8 offcol2">
                            <h4>Услуга «Срочное открытие счета за 3 часа»</h4>
                            <p>Предоставляется при наличии требуемого пакета документов, при прохождение всех проверок. Стоимость услуги – 3 500 рублей.</p>
                        </div>
                    </div>

                </div>
            </div><!-- .tabsSwitcherContainer -->
            <style>
              .vsb-bg-calculator{
                font-size:16px;
                color:rgba(255,255,255,.8);
                padding-top: 1em;
                border: solid rgba(255,255,255,.2) 1px;
                background-color: rgba(255,255,255,.4);
                border-radius: .4em;
                margin-bottom: 1em; 
              }
              .vsb-bg-calculator fieldset{
                display:inline-block;
                text-align:center;
              }
              .vsb-bg-calculator fieldset label{
                display: block;
                margin-bottom: .4em;
              }
              .vsb-bg-calculator fieldset input{
                font-size:16px;
                color:rgba(0,0,0,.8);
              }
              .vsb-bg-calculator fieldset label[for="vsb-bg-client"]{
                float:right;
                bottom-left:.2em;
              }
            </style>
            <div class="vsb-bg-calculator">
              <fieldset>
                <label for="vsb-bg-amount">Сумма гарантии</label><input name="vsb-bg-amount" id="vsb-bg-amount" placeholder="до 10 млн. рублей"/>
              </fieldset>
              <fieldset>
                <label for="vsb-bg-period">Срок гарантии</label><input name="vsb-bg-period" id="vsb-bg-period" placeholder="до 24 месяцев"/>
              </fieldset>
              <fieldset>
                <label for="vsb-bg-client">Я клиент Ренессанс Банка</label><input name="vsb-bg-client" id="vsb-bg-client" type="checkbox"/>
              </fieldset>
              <fieldset>
                <label for="vsb-bg-fee">Коммиссия</label><input name="vsb-bg-fee" id="vsb-bg-fee" readonly="true"/>
              </fieldset>
              <script>
                  $("#vsb-bg-amount,#vsb-bg-period,#vsb-bg-client").on("change keyup",function(e){
                    e.preventDefault();
                    var $t=$(this),
                    amount=$("#vsb-bg-amount").val().length?$("#vsb-bg-amount").val():0,
                    period=$("#vsb-bg-period").val().length?$("#vsb-bg-period").val():0,
                    check=$("#vsb-bg-client").val().length?$("#vsb-bg-client").val():1,
                    fee=0;
                    check=(check==="on")?.8:1;
                    console.debug($t.attr("name")+" = "+($t.val()=="on")?.8:$t.val());
                    fee = amount*.02*period*check;
                    if(fee>0) $("#vsb-bg-fee").val(fee.toFixed(2)+" руб");
                  });
                  $("#vsb-bg-amount").on("change",function(){
                    $("input[name=form_text_28]").val($(this).val());
                  });
                  $("#vsb-bg-period").on("change",function(){
                    $("input[name=form_text_29]").val($(this).val());
                  });
              </script>
            </div>
            <a href="#formBG" class="btn btn-imp">ОФОРМИТЬ ЗАЯВКУ</a>
        </div>
    </div>
</section>
<section>
  <div class="inner" id="formBG">
    <div class=""><?
      $APPLICATION->IncludeComponent(
	     "bitrix:form.result.new",
	      "feedback",
	       array(
           "COMPONENT_TEMPLATE" => "feedback",
		       "WEB_FORM_ID" => "8",
		       "IGNORE_CUSTOM_TEMPLATE" => "N",
		      "USE_EXTENDED_ERRORS" => "N",
      		"SEF_MODE" => "N",
      		"CACHE_TYPE" => "A",
      		"CACHE_TIME" => "3600",
      		"LIST_URL" => "",
      		"EDIT_URL" => "",
      		"SUCCESS_URL" => "",
      		"CHAIN_ITEM_TEXT" => "",
      		"CHAIN_ITEM_LINK" => "",
      		"VARIABLE_ALIASES" => array(
      			"WEB_FORM_ID" => "",
      			"RESULT_ID" => "",
      		)
      	),
      	false
      );
    ?></div>
  </div>
</section>
<section>
    <div class="inner">
        <p class="text-grey-light">
            Документы, представляемые в Банк для открытия счета, должны быть подписаны уполномоченным лицом. Подпись уполномоченного лица, представляющего юридической лицо, должна быть заверена печатью этого юридического лица. В документах, представляемых в Банк и содержащих более одного листа, листы должны быть пронумерованы, прошиты и скреплены на оборотной стороне последнего листа заверительной надписью с указанием цифрами и прописью количества пронумерованных листов, подписанной ее составителем с указанием фамилии, имени, отчества (если последнее имеется), указанием должности и даты составления.
        </p>
    </div>
</section>
<section class="bgGray">
    <div class="inner align-c learnMore fs24">
        <?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			".default",
			array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"AREA_FILE_RECURSIVE" => "N",
				"EDIT_TEMPLATE" => "",
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => "/include/telephone.php"
			),
			false
		);?>
    </div>
</section>
