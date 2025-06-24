<div class="accordion">
    <?php foreach($arResult["ITEMS"] as $key => $value): ?>
    <?=$key?>
        <?php
        $this->AddEditAction(
            $value['ID'],
            $value['EDIT_LINK'],
            CIBlock::GetArrayByID($arParams["IBLOCK_ID"],"ELEMENT_EDIT"));
        $this->AddDeleteAction(
            $value['ID'],
            $value['DELETE_LINK'],
            CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"),
            ["CONFIRM" => GetMessage('FAQ_DELETE_CONFIRM', ["#ELEMENT#" => CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_NAME")])]);
        ?>
        <div class="accordion-item" id="<?=$this->GetEditAreaId($value['ID'])?>">
            <h2 class="accordion-header">
                <button class="accordion-button <?= ($key != 0 ? "collapsed" : '')?>"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#<?=$value['ID']?>"
                    aria-expanded="<?= ($key != 0 ? 'false' : 'true')?>"
                    aria-controls="<?=$value['ID']?>"
                >
                    <?=$value['NAME']?>
                </button>
            </h2>
            <div id="<?=$value['ID']?>" class="accordion-collapse collapse <?= ($key == 0 ? 'show' : '')?>">
                <div class="accordion-body">
                    <div><?=$value['PREVIEW_TEXT']?></div>
                    <div><?=$value['DETAIL_TEXT']?></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
