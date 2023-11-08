<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231102145453 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pret ADD user_emprunteur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pret ADD CONSTRAINT FK_52ECE9791E0AAD67 FOREIGN KEY (user_emprunteur_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_52ECE9791E0AAD67 ON pret (user_emprunteur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pret DROP FOREIGN KEY FK_52ECE9791E0AAD67');
        $this->addSql('DROP INDEX IDX_52ECE9791E0AAD67 ON pret');
        $this->addSql('ALTER TABLE pret DROP user_emprunteur_id');
    }
}
