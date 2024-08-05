<?php

namespace App\Controller;

use App\Document\Feed;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class FeedsController extends AbstractController
{

    #[Route('/api/feeds', name: 'get_feeds', methods: ['GET'])]
    public function getFeeds(DocumentManager $documentManager, SerializerInterface $serializer, Request $request): JsonResponse
    {
        $page = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', 10);
        $offset = ($page - 1) * $limit;
    
        $total = $documentManager->createQueryBuilder(Feed::class)
            ->count()
            ->getQuery()
            ->execute();
        $totalPages = ceil($total / $limit);
    
        if ($page < 1 || $page > $totalPages) {
            return new JsonResponse([
                'error' => 'Page not found',
            ], JsonResponse::HTTP_NOT_FOUND); 
        }
    
        $feeds = $documentManager->getRepository(Feed::class)
            ->findBy([], null, $limit, $offset);
    
        $data = $serializer->serialize($feeds, 'json', ['groups' => 'feed']);
    
        $meta = [
            'page' => $page,
            'limit' => $limit,
            'total' => $total,
            'totalPages' => $totalPages
        ];
    
        return new JsonResponse([
            'data' => json_decode($data, true),
            'meta' => $meta
        ], JsonResponse::HTTP_OK);
    }
}