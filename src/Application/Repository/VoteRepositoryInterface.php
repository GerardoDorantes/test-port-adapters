<?php
namespace UCREA\Application\Repositories;

use UCREA\Domain\Entities\Song;

//Puerto
interface VoteRepositoryInterface
{
    public function saveVote(Song $song): void;
    public function findSong(int $songId): ?Song;
    public function findAll(): ?array;
}