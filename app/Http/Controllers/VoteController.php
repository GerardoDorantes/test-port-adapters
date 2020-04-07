<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use UCREA\Application\Services\VotingService;
use App\External\ExternalSongRepository;
use Response;

class VoteController extends Controller
{   
     /**
     * @param VotingService $votingService
     */
    public function __construct(VotingService $votingService)
    {
        $this->votingService = $votingService;
    }

    /**
     * @var VotingService $votingService
     */
    private $votingService;

    public function index()
    {
        return Response::json([
            'message' =>  'Welcome!'
        ], 200);
    }

    /**
     * @Route("/songs/list")
     *
     * @return Response
     */
    public function listSongs()
    {
        return Response::json(ExternalSongRepository::getAllSongs(), 200);
    }

    /**
     * @Route("/vote/{songId}/{score}")
     *
     * @param int $songId
     * @param int $score
     *
     * @return Response
     */
    public function voteSong(int $songId, int $score)
    {
        return Response::json($this->votingService->vote($songId, $score),200);
    }

    /**
     * @Route("/votes/list")
     *
     * @return Response
     */
    public function listVotes()
    {
        return Response::json($this->votingService->getVotes(),200);
    }
}
