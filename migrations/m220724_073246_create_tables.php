<?php

use yii\db\Migration;

/**
 * Class m220724_073246_create_tables
 */
class m220724_073246_create_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('user', [
            'id'           => $this->primaryKey(),
            'username'     => $this->string(55)->notNull(),
            'password'     => $this->string(255)->notNull(),
            'auth_key'     => $this->string(255)->notNull(),
            'access_token' => $this->string(255)->notNull(),
        ]);

        $this->createTable('article', [
            'id'         => $this->primaryKey(),
            'title'      => $this->string(1024)->notNull(),
            'slug'       => $this->string(1024)->notNull(),
            'body'       => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('article_created_by_fk', 'article', 'created_by', 'user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('user');
        $this->dropTable('article');
    }
}
