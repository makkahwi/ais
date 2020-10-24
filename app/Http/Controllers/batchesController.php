<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Repositories\batchesRepository;
use Illuminate\Http\Request;
use App\Models\batches;
use Response;
use Flash;

class batchesController extends AppBaseController
{
    public function __construct()
    {
        //
    }

    public function store(Request $request)
    {
        $this->authorize('create', batches::class);

        $input = $request->all();

        $batches = batches::firstOrCreate(['batch' => $input['batch']]);

        if($batches->wasRecentlyCreated){
            Flash::success('The batch was saved successfully<br><br>تم حفظ بيانات الدفعة بنجاح');
        }
        else {
            Flash::error($input["batch"].' data already exist<br><br>بيانات الدفعة موجودة بالفعل');
        }
        return redirect(route('sfCategories.index'));
    }
}
