<?php
namespace UCREA\Infrastructure;

use UCREA\Domain\Entities\Song;
use UCREA\Application\Repositories\VoteRepositoryInterface;
use App\Song as EloquentManager;

//Adaptador para el puerto VoteRepositoryInterface
class EloquentVoteRepository implements VoteRepositoryInterface
{     
    private $entityManager;
    
    public function __construct(EloquentManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function saveVote(Song $song): void {
        dd('save',$song);
        $this->entityManager->persist($song);
        $this->entityManager->flush();
    }
    public function findSong(int $songId): ?Song{
        return $this->entityManager->getRepository(Song::class)->findOneBy(['songId' => $songId]);

        // return new Song($songId, ExternalSongRepository::getSongById($id));
    }
    public function findAll(): ?array {
        return $this->entityManager->get()->toArray();

        // return $this->entityManager->getRepository(Song::class)->findAll();
    }
}