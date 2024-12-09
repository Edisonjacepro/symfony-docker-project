<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241206124409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entity2 ADD entity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE entity2 ADD CONSTRAINT FK_59B27F2381257D5D FOREIGN KEY (entity_id) REFERENCES entity (id)');
        $this->addSql('CREATE INDEX IDX_59B27F2381257D5D ON entity2 (entity_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entity2 DROP FOREIGN KEY FK_59B27F2381257D5D');
        $this->addSql('DROP INDEX IDX_59B27F2381257D5D ON entity2');
        $this->addSql('ALTER TABLE entity2 DROP entity_id');
    }
}
