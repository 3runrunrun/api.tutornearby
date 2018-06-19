<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function sendResponse($msg, $data = [])
    {
        $res = [
            'success' => true,
            'message' => $msg
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return response()->json($res, 200);
    }

    public function sendError($msg, $errMsg = [], $errCode = 404)
    {
        $res = [
            'success' => false,
            'message' => $msg
        ];

        if (!empty($errMsg)) {
            $res['data'] = $errMsg;
        }

        return response()->json($res, $errCode);
    }
}