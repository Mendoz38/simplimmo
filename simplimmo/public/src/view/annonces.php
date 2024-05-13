<?php foreach ($annonces as $annonce) : ?>

    <div class="col-sm-6 col-md-3 p0">
        <div class="box-two proerty-item">
            <div class="item-thumb">
                <a href="detail.php?id= <?= $annonce['id'] ?> "><img src="assets/img/demo/property-<?= rand(1, 5); ?>.jpg"></a>
            </div>
            <div class="item-entry overflow">
                <h5><a href="detail.php"> <?= $annonce['title'] ?> </a></h5>
                <div class="dot-hr"></div>
                <span class="pull-left"><b> Surface :</b> <?= $annonce['surface'] ?> m² </span>
                <span class="proerty-price pull-right"><?= $annonce['price'] ?> €</span>
                <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                <div class="property-icon">
                    <img src="assets/img/icon/bed.png"> ( <?= $annonce['rooms'] ?> )|
                    <img src="assets/img/icon/shawer.png"> (2)|
                    <img src="assets/img/icon/cars.png"> (1)
                </div>
            </div>


        </div>
    </div>
<?php endforeach; ?>