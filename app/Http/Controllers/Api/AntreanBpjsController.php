<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\AuthAntreanBpjsRequest;
use App\Models\BpjsSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AntreanBpjsController extends ApiController
{
    public function auth(AuthAntreanBpjsRequest $request)
    {
        $bpjsSetting = BpjsSetting::where('username', $request->username)->first();
        if (!Hash::check($request->password, $bpjsSetting->password)) {
            return $this->errorResponse('Akses tidak diizinkan.');
        }

        $token = [
            'token' => $bpjsSetting->createToken('authToken')->plainTextToken
        ];

        return $this->successResponse($token, "Akses berhasil diberikan.");
    }

    public function antrean()
    {
        return false;
    }

    public function rekap()
    {
        return false;
    }

    public function operasi()
    {
        return false;
    }

    public function jadwaloperasi()
    {
        return false;
    }
}
