
<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
            <?php foreach ($categories as $key => $categorie): ?>
            <li class="promo__item promo__item--<?=$key;?>">
                <a class="promo__link" href="pages/all-lots.html"><?=$categorie;?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами-->
            <?php foreach ($goods as $key => $good): ?>
            <li class="lots__item lot">
                <div class="lot__image ">
                    <img src="<?=$good["image"]; ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=$good["category"];?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=htmlspecialchars($good["title"]);?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>                            
                            <span class="lot__cost"><?=format_coost(htmlspecialchars($good["price"]));?></b></span>
                        </div>
                        <?php $res = get_time_left(htmlspecialchars($good["end_date"])) ?>
                        <div class="lot__timer timer <?php if ($res[0] < 1) : ?>timer--finishing<?php endif; ?>">
                            <?= "$res[0]: $res[1]"; ?>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>

        
    </section>