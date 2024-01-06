<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    function fileUpload()
    {
        return view('upload.file-upload');
    }
    function prosesFileUpload(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:1000'
        ]);

        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile = 'lisa-'.time().'.'.$extFile;

        $path = $request->berkas->move('image', $namaFile);
        $path = str_replace('\\','/', $path);
        echo "Variabel path berisi: $path <br>";

        $pathBaru = asset('image/'.$namaFile);
        echo "Proses upload berhasil, file berada di: <a href='$pathBaru'>$pathBaru</a>";
    }
    function fileUploadRename()
    {
        return view('upload.file-upload-rename');
    }
    function prosesFileUploadRename(Request $request)
    {
        $request->validate([
            'nama_gambar' => 'required|min:5|alpha_dash',
            'gambar_profile' => 'required|file|image|max|1000'
        ]);

        $extFile = $request->gambar_profile->getClientOriginalExtension();
        $namaFile = $request->nama_gambar.".".$extFile;
        $request->gambar_profile->storeAs('public/gambar', $namaFile);
        $pathPublic = asset('storage/gambar/'.$namaFile);

        echo "Gambar berhasil di upload ke <a href=".$pathPublic.">$namaFile</a>";
        echo "<br><br>";
        echo "<img src='".$pathPublic."' width='200px'>";
    }
}
