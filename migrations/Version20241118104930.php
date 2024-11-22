<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\Core\User\Domain\Status\UserStatus;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241118104930 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(sprintf('ALTER TABLE users ADD status VARCHAR(255) DEFAULT "%s" NOT NULL', UserStatus::INACTIVE->value));
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE users DROP status');

    }
}
