<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <?php foreach ($categories as $category_key => $category_name): ?>
        <li class="promo__item promo__item--<?= $category_key; ?>">
            <a class="promo__link" href="pages/all-lots.html"><?= $category_name; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <?php foreach ($ads as $ad_item): ?>
        <li class="lots__item lot">
            <div class="lot__image">
                <img src="<?= $ad_item['img_url']; ?>" width="350" height="260" alt="">
            </div>
            <div class="lot__info">
                <span class="lot__category"><?= $ad_item['category']; ?></span>
                <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= htmlspecialchars($ad_item['title']); ?></a></h3>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount">Стартовая цена</span>
                        <span class="lot__cost"><?= format_price(htmlspecialchars($ad_item['price'])); ?></span>
                    </div>
                    <?php $get_dt_range = get_dt_range((htmlspecialchars($ad_item['dt']))); ?>
                    <div class="lot__timer timer<?php if ($get_dt_range[0] < 1): ?> timer--finishing<?php endif; ?>">
                        <?= "$get_dt_range[0] : $get_dt_range[1]"; ?>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</section>