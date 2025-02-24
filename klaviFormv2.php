<?php
require_once('vendor/autoload.php');

use GuzzleHttp\Client;

// Verifica si se recibió un email por POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];  // Captura el email enviado por el formulario

    $client = new Client();

    $data = [
        "data" => [
            "type" => "profile-subscription-bulk-create-job",
            "attributes" => [
                "custom_source" => "Marketing Event",
                "profiles" => [
                    "data" => [
                        [
                            "type" => "profile",
                            "attributes" => [
                                "email" => $email,  // 🔹 Inserta el email recibido
                                "phone_number" => "+15005550006",
                                "subscriptions" => [
                                    "email" => [
                                        "marketing" => [
                                            "consent" => "SUBSCRIBED"
                                        ]
                                    ],
                                ],
                            ]
                        ]
                    ]
                ],
            ],
            "relationships" => [
                "list" => [
                    "data" => [
                        "type" => "list",
                        "id" => "TphUAA"  // Reemplázalo con tu ID de lista en Klaviyo
                    ]
                ]
            ]
        ]
    ];

    try {
        $response = $client->request('POST', 'https://a.klaviyo.com/api/profile-subscription-bulk-create-jobs', [
            'json' => $data,
            'headers' => [
                'Authorization' => 'Klaviyo-API-Key ',
                'accept' => 'application/vnd.api+json',
                'content-type' => 'application/vnd.api+json',
                'revision' => '2025-01-15',
            ],
        ]);

        // echo "Usuario suscrito exitosamente.";
        header("Location: exitoSuscripcion.php");
    } catch (Exception $e) {
        // echo "Error al suscribir: " . $e->getMessage();
        header("Location: errorSuscripcion.php");
    }
} else {
    // echo "No se recibió un email válido.";
    header("Location: errorSuscripcion.php");
}
