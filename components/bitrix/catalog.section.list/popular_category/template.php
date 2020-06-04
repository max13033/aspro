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
//pr( count($arResult) );
//pr($arResult);
?>
<div class="swiper-container s2">
    <div class="swiper-wrapper">
        <? foreach ($arResult['SECTIONS'] as $SECTION) {
            $img = isset($SECTION['UF_ICON_POPULAR']) ? CFile::GetPath($SECTION['UF_ICON_POPULAR']) : SITE_TEMPLATE_PATH . '/assets/build/img/po9.svg' ;
            ?>
            <div class="swiper-slide">
                <a href="<?=$SECTION['SECTION_PAGE_URL']?>" class="popular__link-wrap">
                    <img src="<?=$img?>" data-id="<?=$SECTION['ID']?>" alt="<?=$SECTION['NAME']?>" class="popular__img">
                    <p class="popular__text"><?=$SECTION['~NAME']?></p>
                </a>
            </div>
        <?}?>
    </div>
</div>