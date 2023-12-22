
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/about_us.php"
              )
            );?>
          </div>

        </div>
        
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu_footer", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "top_menu_footer",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?>
            

        <div class="col-lg-4 mb-5 mb-lg-0">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/follow_us.php"
            )
          );?>
        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/footer_info.php"
            )
          );?>
        </div>

      </div>
    </div>
  </footer>

  </div>
  <?
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-3.3.1.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-migrate-3.0.1.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-ui.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/popper.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/mediaelement-and-player.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.stellar.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.countdown.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.magnific-popup.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap-datepicker.min.js" );
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/aos.js" );

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js" );
  ?>

</body>

</html>