<section class="s-top-rated-videos top-rated">
    <div class="container">
        <div class="section-title">
            <h4>Top Rated</h4>
            <h2>Sex Videos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
        </div>
        <div class="row">
            <?php foreach ($topVideos as $top): ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article>
                        <div class="video-wrapper">
                            <img src="<?=$top->getImage()->getUrl(); ?>" alt="">
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>