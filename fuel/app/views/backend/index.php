<?php include APPPATH.'views/layouts/main/header.php'; ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Админка</h1>
        </div>
    </div>

    <div class="main-container container">
        <div class="flex-1">
            <!-- Example row of columns -->
            <div class="row">
                <?php foreach ($pages as $page) { ?>
                    <div class="col-md-12">
                        <a href="<?php echo $page['url']; ?>"><?php echo $page['title']; ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <footer>
            <hr>
            <p>&copy; 2022 Тестовое задание</p>
        </footer>
    </div>

<?php include APPPATH.'views/layouts/main/footer.php'; ?>