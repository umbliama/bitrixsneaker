<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
<div class="product__slider-container">
    <div class="swiper-container product__slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            class="product__slider-img--big"
            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"];?>"
            alt=""
          />
        </div>
      </div>
    </div>

    <div class="product__thumbs">
      <img
        class="product__slider-img--small js-productImgSmall"
        src="./images/product__photo-small1.png"
        alt=""
      />
      <img
        class="product__slider-img--small js-productImgSmall"
        src="./images/product__photo-small2.png"
        alt=""
      />
      <img
        class="product__slider-img--small js-productImgSmall"
        src="./images/product__photo-small3.png"
        alt=""
      />
      <img
        class="product__slider-img--small js-productImgSmall"
        src="./images/product__photo-small4.png"
        alt=""
      />
    </div>
    <?php endforeach; ?>

    <div
      class="swiper__button-prev product__slider-button--prev"
    ></div>
    <div
      class="swiper__button-next product__slider-button--next"
    ></div>
  </div>