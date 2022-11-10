<?php include APPPATH.'views/layouts/main/header.php'; ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Новости</h1>
            <p>Главная страница портала новостей.</p>
        </div>
    </div>

    <div class="main-container container">
        <div class="flex-1">
            <!-- Example row of columns -->
            <div class="row">
                <?php foreach ($news as $n) { ?>
                    <div class="col-md-12">
                        <h2><?php echo $n->title; ?></h2>
                        <p><?php echo $n->body; ?></p>
                    </div>
                <?php } ?>
            </div>
            <?php echo Pagination::instance('newsPagination')->render(); ?>
        </div>

        <footer>
            <hr>
            <p>&copy; 2022 Тестовое задание</p>
        </footer>
    </div>

<?php include APPPATH.'views/layouts/main/footer.php'; ?>