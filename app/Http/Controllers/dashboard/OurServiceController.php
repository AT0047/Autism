<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use App\Traits\upload_imgs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OurServiceController extends Controller
{
    use upload_imgs;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourServices = OurService::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.dashboard.our_services.index', compact('ourServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.our_services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);
        try{
            OurService::create([
                'title' => $request->title,
                'description' => $request->description,
                'photo' =>  $this->uploadImg($request, 'photo', 'OurServiceImgs', 'Our_Service', 'upload_imgs')
            ]);
            return redirect()->route('our-services.index')->with(['message' => 'Entery Added Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('our-services.index')->with(['message' => $e->getMessage() ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ourService = OurService::findOrFail($id);
        return view('backend.dashboard.our_services.edit', compact('ourService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);
        try{
            $ourService = OurService::findOrFail($id);
            $ourService->title = $request->title;
            $ourService->description = $request->description;
            if($request->has('photo')){
                if($ourService->photo){
                    $oldImg = $ourService->photo;
                    $ourService->photo = $this->deleteImg('upload_imgs', $oldImg);
                }
            $ourService->photo = $this->uploadImg($request, 'photo', 'OurServiceImgs', 'Our_Service', 'upload_imgs');
            }
            $ourService->save();
            return redirect()->route('our-services.index')->with(['message' => 'Entery Updated Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('our-services.index')->with(['message' => $e->getMessage() ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $ourService = OurService::findOrFail($id);
            if($ourService->photo){
                $oldImg = $ourService->photo;
                $this->deleteImg('upload_imgs', $oldImg);
            }
            $ourService->delete();
            return redirect()->route('our-services.index')->with(['message' => 'Entery is Deleted Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('our-services.index')->with(['message' => $e->getMessage() ]);
        }
    }
}
