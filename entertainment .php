<?php include('header.php'); ?>
<main class="home">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                        ENTERTAINMENT NEWS
                        </div>   
                        <div class="content-right">
                            <marquee behavior="" direction="left">
                                <div class="text-news">
                                    <?php get_trending_entertainment_news() ?>
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="news">
        <div class="container">
            <div class="row">
                <?php
                    get_latest_news_homepage('entertainment');
                ?>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>