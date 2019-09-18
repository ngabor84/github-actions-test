<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HealthcheckController extends Controller
{
    public function check(): JsonResponse
    {
        return new JsonResponse(['success' => true]);
    }
}
