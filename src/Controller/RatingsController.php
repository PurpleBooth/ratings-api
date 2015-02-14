<?php

namespace PurpleBooth\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class RatingsController
{

    private $ratingData = [
        "0345496531" => 3,
        "1591024439" => 2,
        "0425258114" => 4.5

    ];

    public function getAction($isbn)
    {
        if (!array_key_exists($isbn, $this->ratingData)) {
            return new JsonResponse(null, 404);
        }

        return new JsonResponse($this->ratingData[$isbn] - (rand(0, 9) / 10));
    }
}