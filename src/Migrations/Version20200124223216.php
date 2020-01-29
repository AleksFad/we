<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200124223216 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(155) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, categories_id INT DEFAULT NULL, title VARCHAR(155) NOT NULL, description VARCHAR(500) NOT NULL, content TEXT NOT NULL, date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, picture VARCHAR(255) NOT NULL, INDEX IDX_1DD39950A21214B7 (categories_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD39950A21214B7 FOREIGN KEY (categories_id) REFERENCES category (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE news DROP FOREIGN KEY FK_1DD39950A21214B7');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE news');
    }
}
