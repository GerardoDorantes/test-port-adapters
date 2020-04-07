<?php
namespace UCREA\Application\Repositories;

use UCREA\Domain\Entities\Song;

//Puerto
interface SongRepositoryInterface
{
    public function findSong(int $id): ?Song;
}