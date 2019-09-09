<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?><section class="header">
<div class="header-container">
	<div class="header__content">
		<div class="header__menu-overlay">
		</div>
		<div class="header__menu-button">
 <span class="header__menu-item"></span> <span class="header__menu-item"></span> <span class="header__menu-item"></span>
		</div>
		<div class="header__logo">
      <a href="#">
			<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo.svg" alt="" class="logo__item">
      
      </a>
		</div>
		<ul class="header__nav-list">
			<li class="header__nav-item"> <a class="header__nav-link" href="#">Кроссовки</a> </li>
			<li class="header__nav-item"> <a class="header__nav-link" href="#">Преимущества</a> </li>
			<li class="header__nav-item"> <a class="header__nav-link" href="#">Отзывы</a> </li>
			<li class="header__nav-item"> <a class="header__nav-link" href="#">Доставка</a> </li>
			<li class="header__nav-item"> <a class="header__nav-link" href="#">Контакты</a> </li>
		</ul>
		<div class="header__phone">
 <a class="header__phone-link" href="tel:+73822405006">8 (3822) 40-50-06</a>
		</div>
	</div>
 <main class="header__main"> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"template1", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "template1",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "index",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "url",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?><br>
 </main> <footer class="header__footer">
	<div class="header__footer-scrolldown ">
		<h2 class="header__footer-text">перейти дальше</h2>
 <a href="#" class="header__footer-link js-scrolldown"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/header-scrolldown.svg" alt=""> </a>
	</div>
	<div class="swiper__pagination header__slider-pagination">
	</div>
	<div class="header__footer-social">
		<ul class="header__footer-social-list">
			<li class="header__footer-social-item"> <a href="#"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/social_vk.svg" alt=""> </a> </li>
			<li class="header__footer-social-item"> <a href="#"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/social_fb.svg" alt=""> </a> </li>
			<li class="header__footer-social-item"> <a href="#"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/social_twitter.svg" alt=""> </a> </li>
			<li class="header__footer-social-item"> <a href="#"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/social_inst.svg" alt=""> </a> </li>
		</ul>
	</div>
 </footer>
</div>
 </section> 
<section class="product">
  <div class="product-container">
    <header class="product__header">
      <h2 class="product__header-title">Кроссовки</h2>
    </header>
    <main class="product__main">
      <div class="product__item">
        <div class="product__slider">
          <ul class="product__season-list">
            <li class="product__season-item">
              <a
                href="#"
                class="product__season-link product__season-link-active js-link"
                >Лето</a
              >
            </li>
            <li class="product__season-item">
              <a href="#" class="product__season-link js-link">Зима</a>
            </li>
            <li class="product__season-item">
              <a href="#" class="product__season-link js-link">Mega Sport</a>
            </li>
            <li class="product__season-item">
              <a href="#" class="product__season-link js-link">Air Statix</a>
            </li>
          </ul>
          <div class="product__slider-container">
            <div class="swiper-container product__slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img
                    class="product__slider-img--big"
                    src="<?=SITE_TEMPLATE_PATH?>/assets/images/product__photo-big.png"
                    alt=""
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    class="product__slider-img--big"
                    src="<?=SITE_TEMPLATE_PATH?>/assets/images/product__photo-big2.png"
                    alt=""
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    class="product__slider-img--big"
                    src="<?=SITE_TEMPLATE_PATH?>/assets/images/product__photo-big3.png"
                    alt=""
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    class="product__slider-img--big"
                    src="<?=SITE_TEMPLATE_PATH?>/assets/images/product__photo-big4.png"
                    alt=""
                  />
                </div>
              </div>
            </div>

            <div class="product__thumbs">
              <img
                class="product__slider-img--small js-productImgSmall"
                src="<?=SITE_TEMPLATE_PATH?>/assets/images/product__photo-small1.png"
                alt=""
              />
              <img
                class="product__slider-img--small js-productImgSmall"
                src="<?=SITE_TEMPLATE_PATH?>/assets/images/product__photo-small2.png"
                alt=""
              />
              <img
                class="product__slider-img--small js-productImgSmall"
                src="<?=SITE_TEMPLATE_PATH?>/assets/images/product__photo-small3.png"
                alt=""
              />
              <img
                class="product__slider-img--small js-productImgSmall"
                src="<?=SITE_TEMPLATE_PATH?>/assets/images/product__photo-small4.png"
                alt=""
              />
            </div>

            <div class="swiper__button-prev product__slider-button--prev"></div>
            <div class="swiper__button-next product__slider-button--next"></div>
          </div>
        </div>
        <div class="product__description">
          <div class="product__title">Летние fizzy peach</div>
          <div class="product__paragraph">
            Отличаются великолепным качеством изготовления и применением
            новейших технологий, появляющихся в области спортивной обуви. Сетка
            достаточно плотная, чтобы выдерживать высокие нагрузки, возникающие
            во время активных движений, например, бега, и, в то же время,
            достаточно крупная, чтобы обеспечить отличную вентиляцию стоп. Носок
            кроссовок укреплен кожей, что предохраняет обувь от потери формы и
            надежно фиксирует стопу
          </div>
          <div class="product__size">
            <select name="size" class="product__size-select">
              <option selected>Выберите размер</option>
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <div class="product__size-appearance"></div>
            </select>
          </div>
          <div class="product__price--new">
            3500 &#8381; <span class="product__price--old">5000 &#8381;</span>
          </div>
          <div class="product__buy">
            <button class="btn product__buy-btn" href="">
              Добавить в корзину
            </button>
          </div>
        </div>
      </div>
    </main>
  </div>
</section>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>