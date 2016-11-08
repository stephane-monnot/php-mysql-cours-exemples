<?php

/**
 * Calcule la distance entre 2 points avec la formule Haversine formula.
 *
 * @param float     $latitudeFrom  Latitude du point de départ
 * @param float     $longitudeFrom Longitude du point de départ
 * @param float     $latitudeTo    Latitude du point d'arrivée
 * @param float     $longitudeTo   Longitude du point d'arrivée
 * @param float|int $earthRadius   Rayon de la Terre
 *
 * @return float Distance entre les 2 points en mètres
 */
function haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
    // On convertit les degrés en radians
    $latFrom = deg2rad($latitudeFrom);
    $lonFrom = deg2rad($longitudeFrom);
    $latTo   = deg2rad($latitudeTo);
    $lonTo   = deg2rad($longitudeTo);

    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;

    $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));

    return $angle * $earthRadius;
}

$startPoint  = [45.750000, 4.850000]; // Lyon
$targetPoint = [48.856614, 2.3522219000000177]; // Paris

$distance = haversineGreatCircleDistance($startPoint[0], $startPoint[1], $targetPoint[0], $targetPoint[1]);
echo 'La distance entre Lyon et Paris est d\'environ ' . round($distance/1000) . 'km';