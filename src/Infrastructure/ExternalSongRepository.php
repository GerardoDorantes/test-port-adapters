<?php
namespace UCREA\Infrastructure;

use UCREA\Domain\Entities\Song;
use UCREA\Application\Repositories\SongRepositoryInterface;
use App\External\ExternalSongRepository as External;

//Adaptador para el puerto SongRepositoryInterface
class ExternalSongRepository implements SongRepositoryInterface
{
    public function findSong(int $id): Song
    {
        return new Song($id, External::getSongById($id));
    }
}