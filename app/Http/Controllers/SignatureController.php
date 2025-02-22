<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signature;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class SignatureController extends Controller
{
    public function create()
    {
        return view('signature.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'document_url' => 'required|url'
        ]);

        $name = $request->name;
        $documentUrl = $request->document_url;

        // Generate QR Code
        $qrCodeFileName = uniqid('qrcode_') . '.png';
        $qrCodePath = 'qrcodes/' . $qrCodeFileName;

        $qrCode = QrCode::format('png')->size(200)->generate($documentUrl);
        Storage::disk('public')->put($qrCodePath, $qrCode);

        // Simpan ke database
        $signature = Signature::create([
            'name' => $name,
            'document_url' => $documentUrl,
            'qr_code_path' => $qrCodePath
        ]);

        return redirect()->route('signature.show', $signature->id);
    }

    public function show($id)
    {
        $signature = Signature::findOrFail($id);
        return view('signature.show', compact('signature'));
    }
}
