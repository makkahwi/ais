<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Repositories\batchesRepository;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\batches;

class batchesController extends AppBaseController
{
  public function __construct()
  {
    //
  }

  // Create Data ////////////////////////////////////////////

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
