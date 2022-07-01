<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Services\StorageService;
use App\Http\Requests\FileRequest;
use App\Http\Requests\FileUpdateRequest;

class FileController extends Controller
{

    public function __construct(File $file, StorageService $storage_service)
    {
        $this->file = $file;
        $this->storage_service = $storage_service;
        $this->file_path = "files/";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $historicos = File::all();

        return view('index',compact('historicos'));
    }

    public function historico()
    {
        $files = $this->file->all();
        if($files->count()>0){
            foreach($files as $item){
                $item->file_url = $this->storage_service->getAwsFile($this->file_path,$item->filename);
                $item->extension = "." .substr(strrchr($item->filename, "."), 1);
            }
        }

        return view('historico',compact('files'));
    }

    public function administrador()
    {

        return view('administrador');
    }
    public function novo()
    {

        return view('novo');
    }

    public function salvar(FileRequest $request)
    {

        $this->storage_service->saveAwsFile($this->file_path,$request->filename);
        $this->file->create([
            'filename'      =>  $request->filename->getClientOriginalName(),
            'description'   =>  $request->description
        ]);


        return redirect('/administrador/AmAtOrY/sandrocastro/pagamentos');

    }

    public function pagamentos()
    {
        $pagamentos = File::all();

        return view('pagamentos',compact('pagamentos'));

    }









    public function update(FileUpdateRequest $request, File $file)
    {
        $data = $request->all();
        if($request->filename){
            $this->storage_service->deleteAwsFile($this->file_path,$file->filename);
            $this->storage_service->saveAwsFile($this->file_path,$request->filename);
            $data['filename']=$request->filename->getClientOriginalName();
        }
        $file->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $this->storage_service->deleteAwsFile($this->file_path,$file->filename);
        $file->delete();
        return redirect()->route('files.index');
    }
}
