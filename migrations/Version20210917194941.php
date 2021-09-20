<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210917194941 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation ADD id_formateur_id INT NOT NULL, ADD id_societe_id INT NOT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF369CFA23 FOREIGN KEY (id_formateur_id) REFERENCES formateur (id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF597DF5D4 FOREIGN KEY (id_societe_id) REFERENCES societe (id)');
        $this->addSql('CREATE INDEX IDX_404021BF369CFA23 ON formation (id_formateur_id)');
        $this->addSql('CREATE INDEX IDX_404021BF597DF5D4 ON formation (id_societe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF369CFA23');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF597DF5D4');
        $this->addSql('DROP INDEX IDX_404021BF369CFA23 ON formation');
        $this->addSql('DROP INDEX IDX_404021BF597DF5D4 ON formation');
        $this->addSql('ALTER TABLE formation DROP id_formateur_id, DROP id_societe_id');
    }
}
