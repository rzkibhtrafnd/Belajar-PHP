<?php

class Response
{
    public static function json($status, $data = null, $message = null, $code = 200)
    {
        http_response_code($code);

        echo json_encode([
            "status" => $status,
            "data" => $data,
            "message" => $message
        ]);

        exit;
    }
}
