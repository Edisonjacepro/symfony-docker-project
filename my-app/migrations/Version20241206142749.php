<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241206142749 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entity_entity2 (entity_id INT NOT NULL, entity2_id INT NOT NULL, INDEX IDX_CA7F4D0081257D5D (entity_id), INDEX IDX_CA7F4D00D1828A49 (entity2_id), PRIMARY KEY(entity_id, entity2_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entity_entity2 ADD CONSTRAINT FK_CA7F4D0081257D5D FOREIGN KEY (entity_id) REFERENCES entity (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entity_entity2 ADD CONSTRAINT FK_CA7F4D00D1828A49 FOREIGN KEY (entity2_id) REFERENCES entity2 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entity2 DROP FOREIGN KEY FK_59B27F2381257D5D');
        $this->addSql('DROP INDEX IDX_59B27F2381257D5D ON entity2');
        $this->addSql('ALTER TABLE entity2 DROP entity_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entity_entity2 DROP FOREIGN KEY FK_CA7F4D0081257D5D');
        $this->addSql('ALTER TABLE entity_entity2 DROP FOREIGN KEY FK_CA7F4D00D1828A49');
        $this->addSql('DROP TABLE entity_entity2');
        $this->addSql('ALTER TABLE entity2 ADD entity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE entity2 ADD CONSTRAINT FK_59B27F2381257D5D FOREIGN KEY (entity_id) REFERENCES entity (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_59B27F2381257D5D ON entity2 (entity_id)');
    }
}
