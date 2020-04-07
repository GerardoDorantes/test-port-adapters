<?php

namespace Tests\Domain\Service;

use App\Domain\Entity\Song;
use App\Domain\Exception\ScoreOutOfBoundsException;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VotingServiceTest extends TestCase
{
    public function _testIfVoteIsStored()
    {
        $id = 1;
        $score = 4;
        $song = new Song("some song");
        $this->songRepository->expects($this->once())->method('findSong')->with($id)->willReturn($song);
        $this->voteRepository->expects($this->once())
            ->method('saveVote')
            ->with($song);
        $this->assertEquals("success", $this->votingService->vote($id, $score));
    }
}
