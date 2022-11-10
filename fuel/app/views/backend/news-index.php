<?php include APPPATH.'views/layouts/main/header.php'; ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Новости</h1>
        </div>
    </div>

    <div class="main-container container">
        <div class="flex-1">
            <a href="<?php echo \Fuel\Core\Router::get('backend.news.create'); ?>" class="btn btn-primary">Создать</a>
            <table class="table table-bordered">
                <thead>
                    <th>id</th>
                    <th>title</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach ($news as $n) { ?>
                        <tr>
                            <td><?php echo $n->id; ?></td>
                            <td><?php echo $n->title; ?></td>
                            <td>
                                <a href="<?php echo \Fuel\Core\Router::get('backend.news.edit',['id' => $n->id]); ?>">Ред.</a>
                                <a href="#" onclick="
                                    if(confirm('Удалить?')){event.preventDefault();document.getElementById('form-delete-elem-<?php echo $n->id; ?>').submit();}
                                ">Удал.</a>
                                <form id="form-delete-elem-<?php echo $n->id; ?>" action="<?php echo \Fuel\Core\Router::get('backend.news.destroy',['id' => $n->id]); ?>" method="post">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php echo Pagination::instance('newsPagination')->render(); ?>
        </div>

        <footer>
            <hr>
            <p>&copy; 2022 Тестовое задание</p>
        </footer>
    </div>

<?php include APPPATH.'views/layouts/main/footer.php'; ?>