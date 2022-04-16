<!-- 
$block_title = "";
$block_headline = "";
$block_description = "";
$block_image = ""; 
-->


<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3><?= $block_title ?></h3>
                    <h2><?= $block_headline ?></h2>
                    <p>
                        <?= $block_description ?> </p>
                    <div class="text-center text-lg-start">
                        <a href="<?= $block_link ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Read More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?= $block_image ?>" class="img-fluid" alt="">
            </div>

        </div>
    </div>

</section>