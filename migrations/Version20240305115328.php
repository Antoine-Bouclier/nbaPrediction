<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240305115328 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE est_playoff (id INT AUTO_INCREMENT NOT NULL, pi1 VARCHAR(255) NOT NULL, pi2 VARCHAR(255) NOT NULL, pi3 VARCHAR(255) NOT NULL, qf1 VARCHAR(255) NOT NULL, qf2 VARCHAR(255) NOT NULL, qf3 VARCHAR(255) NOT NULL, qf4 VARCHAR(255) NOT NULL, df1 VARCHAR(255) NOT NULL, df2 VARCHAR(255) NOT NULL, cf VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE est_ranking (id INT AUTO_INCREMENT NOT NULL, first VARCHAR(255) NOT NULL, second VARCHAR(255) NOT NULL, third VARCHAR(255) NOT NULL, fourth VARCHAR(255) NOT NULL, fifth VARCHAR(255) NOT NULL, sixth VARCHAR(255) NOT NULL, seventh VARCHAR(255) NOT NULL, eighth VARCHAR(255) NOT NULL, ninth VARCHAR(255) NOT NULL, tenth VARCHAR(255) NOT NULL, eleventh VARCHAR(255) NOT NULL, twelfth VARCHAR(255) NOT NULL, thirteenth VARCHAR(255) NOT NULL, fourteenth VARCHAR(255) NOT NULL, fifteenth VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE final_nba (id INT AUTO_INCREMENT NOT NULL, champion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE individual_reward (id INT AUTO_INCREMENT NOT NULL, mvp VARCHAR(255) NOT NULL, fmvp VARCHAR(255) NOT NULL, roy VARCHAR(255) NOT NULL, dpoy VARCHAR(255) NOT NULL, mip VARCHAR(255) NOT NULL, bc VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, est_ranking_id INT DEFAULT NULL, west_ranking_id INT DEFAULT NULL, est_playoff_id INT DEFAULT NULL, west_playoff_id INT DEFAULT NULL, individual_reward_id INT DEFAULT NULL, final_nba_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, points INT DEFAULT NULL, UNIQUE INDEX UNIQ_98197A65D18D3552 (est_ranking_id), UNIQUE INDEX UNIQ_98197A654AB89AC4 (west_ranking_id), UNIQUE INDEX UNIQ_98197A6553C352CA (est_playoff_id), UNIQUE INDEX UNIQ_98197A65C8F6FD5C (west_playoff_id), UNIQUE INDEX UNIQ_98197A65F0F4C0CD (individual_reward_id), UNIQUE INDEX UNIQ_98197A658A5AECF7 (final_nba_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE west_playoff (id INT AUTO_INCREMENT NOT NULL, pi1 VARCHAR(255) NOT NULL, pi2 VARCHAR(255) NOT NULL, pi3 VARCHAR(255) NOT NULL, qf1 VARCHAR(255) NOT NULL, qf2 VARCHAR(255) NOT NULL, qf3 VARCHAR(255) NOT NULL, qf4 VARCHAR(255) NOT NULL, df1 VARCHAR(255) NOT NULL, df2 VARCHAR(255) NOT NULL, cf VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE west_ranking (id INT AUTO_INCREMENT NOT NULL, first VARCHAR(255) NOT NULL, second VARCHAR(255) NOT NULL, third VARCHAR(255) NOT NULL, fourth VARCHAR(255) NOT NULL, fifth VARCHAR(255) NOT NULL, sixth VARCHAR(255) NOT NULL, seventh VARCHAR(255) NOT NULL, eighth VARCHAR(255) NOT NULL, ninth VARCHAR(255) NOT NULL, tenth VARCHAR(255) NOT NULL, eleventh VARCHAR(255) NOT NULL, twelfth VARCHAR(255) NOT NULL, thirteenth VARCHAR(255) NOT NULL, fourteenth VARCHAR(255) NOT NULL, fifteenth VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65D18D3552 FOREIGN KEY (est_ranking_id) REFERENCES est_ranking (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A654AB89AC4 FOREIGN KEY (west_ranking_id) REFERENCES west_ranking (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A6553C352CA FOREIGN KEY (est_playoff_id) REFERENCES est_playoff (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65C8F6FD5C FOREIGN KEY (west_playoff_id) REFERENCES west_playoff (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65F0F4C0CD FOREIGN KEY (individual_reward_id) REFERENCES individual_reward (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A658A5AECF7 FOREIGN KEY (final_nba_id) REFERENCES final_nba (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A65D18D3552');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A654AB89AC4');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A6553C352CA');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A65C8F6FD5C');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A65F0F4C0CD');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A658A5AECF7');
        $this->addSql('DROP TABLE est_playoff');
        $this->addSql('DROP TABLE est_ranking');
        $this->addSql('DROP TABLE final_nba');
        $this->addSql('DROP TABLE individual_reward');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP TABLE west_playoff');
        $this->addSql('DROP TABLE west_ranking');
    }
}
