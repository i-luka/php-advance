

<div class="row">
    <? foreach ($products as $product):?>
    <div class="col-lg-3 col-md-4 col-6 ">

            <div class="card card-catalog" style="width: 18rem;">
                <a href="/product/card/?id=<?=$product['id_product']?>">
                    <img src="<?=IMG_SMALL . $product['img'][0]?>" class="card-img-top card-img-top-catalog" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <?=$product['name_product']?>
                    </h5>
                    <p class="card-text">
                        <?=$product['description']?>
                    </p>
                    <p class="card-text">
                        <?=$product['price']?>
                    </p>
                    <p class="card-text">
                        <?=$product['category']?>
                    </p>
                    <a href="/cart/add/?id=<?=$product['id_product']?>" class="btn btn-primary">
                        Купить
                    </a>
                </div>
            </div>
    </div>


    <?endforeach;?>
</div>