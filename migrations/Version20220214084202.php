<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214084202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos ADD relcion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E64CB838A8 FOREIGN KEY (relcion_id) REFERENCES categoria (id)');
        $this->addSql('CREATE INDEX IDX_767490E64CB838A8 ON productos (relcion_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E64CB838A8');
        $this->addSql('DROP INDEX IDX_767490E64CB838A8 ON productos');
        $this->addSql('ALTER TABLE productos DROP relcion_id');
    }
}
