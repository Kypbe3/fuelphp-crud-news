<?php


namespace Fuel\Migrations;


class Create_news_table
{
    function up()
    {
        \DBUtil::create_table('news', [
            'id' => ['type' => 'int', 'constraint' => 5, 'auto_increment' => true],
            'title' => ['type' => 'varchar', 'constraint' => 100],
            'body' => ['type' => 'text'],
        ], ['id']);
    }

    function down()
    {
        \DBUtil::drop_table('news');
    }
}