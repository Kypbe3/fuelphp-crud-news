<?php include APPPATH.'views/layouts/main/header.php'; ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Создание новости</h1>
        </div>
    </div>

    <div class="main-container container">
        <div class="flex-1">
            <form method="post" action="<?php echo \Fuel\Core\Router::get('backend.news.store'); ?>">
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок">
                </div>
                <div class="form-group">
                    <label for="body">Заголовок</label>
                    <textarea id="body" name="body" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>

        <footer>
            <hr>
            <p>&copy; 2022 Тестовое задание</p>
        </footer>
    </div>

<?php include APPPATH.'views/layouts/main/footer.php'; ?>