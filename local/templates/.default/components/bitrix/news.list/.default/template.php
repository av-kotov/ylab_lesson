<?php

foreach ($arResult['ITEMS'] as $item)
{
    ?>
  <div class='block'>
      <?php
      $res = CIBlockElement::GetProperty(
        IntVal($item['PROPERTIES']['ADRES']['LINK_IBLOCK_ID']),
        IntVal($item['PROPERTIES']['ADRES']['VALUE'])
      );

      ?>
    <p><?= getMessage('NAME') ?><b><?= $item['PROPERTIES']['NAME']['VALUE'] ?></b></p>
    <p><?= getMessage('PHONE') ?><b><?= $item['PROPERTIES']['PHONE']['VALUE'] ?></b></p>
    <?php while ($adres = $res->GetNext()){ ?>
    <p><?= $adres['NAME'] ?> - <b><?= $adres['VALUE'] ?></b></p>

    <?php } ?>
      <br />
  </div>
    <?php
}
