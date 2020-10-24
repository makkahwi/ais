<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemarkstypesRequest;
use App\Http\Requests\UpdatemarkstypesRequest;
use App\Repositories\markstypesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use Illuminate\Support\Facades\Mail;
use App\Mail\markComplain;

use App\Models\markstypes;

use App\Models\sches;

class markstypesController extends AppBaseController
{
    /** @var  markstypesRepository */
    private $markstypesRepository;

    public function __construct(markstypesRepository $markstypesRepo)
    {
        $this->markstypesRepository = $markstypesRepo;
    }

    /**
     * Display a listing of the markstypes.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {
        return view('marks.index');
    }

    public function dynamicMarkT(Request $request){ // Dynamic Classroom Show ///////////////////////////////////////////

        $types = $request->get('id');

        $markstypes = markstypes::with('sem', 'course', 'classroom')
        ->where('id', '=', $types)
        ->get();

        return Response::json($type);
        
    }

    /**
     * Store a newly created markstypes in storage.
     *
     * @param CreatemarkstypesRequest $request
     *
     * @return Response
     */

    public function store(CreatemarkstypesRequest $request)
    {
        $this->authorize('create', markstypes::class);

        $input = $request->all();

        if (!empty($input['name2'])) {
            $typeName = $input['name1'].' '.$input['name2'].' '.$input['name3'];
        }
        else {
            $typeName = $input['name1'].' '.$input['name3'];
        }

        $input += ['title' => $typeName];

        $markstypes = $this->markstypesRepository->create($input);

        Flash::success('The mark type was saved successfully<br><br>تم حفظ بيانات نوع العلامة بنجاح');

        return redirect(route('marks.index'));
    }

    /**
     * Update the specified markstypes in storage.
     *
     * @param int $id
     * @param UpdatemarkstypesRequest $request
     *
     * @return Response
     */

    public function update(UpdatemarksTypesRequest $request) // Updating with Modal
    {
        $this->authorize('update', markstypes::class);

        $input = $request->all();

        $marktype = markstypes::findOrFail($input['id']);

        if (empty($marktype)) {
            Flash::error('The mark type was not found<br><br>بيانات نوع العلامة المطلوبة غير موجودة');

            return redirect(route('marks.index'));
        }

        if (!empty($input['name2'])) {
            $typeName = $input['name1'].' '.$input['name2'].' '.$input['name3'];
        }
        else {
            $typeName = $input['name1'].' '.$input['name3'];
        }

        $input += ['title' => $typeName];
        
        $marktype->update($input);

        Flash::success('The mark type was updated successfully<br><br>تم تحديث بيانات نوع العلامة بنجاح');

        return redirect(route('marks.index'));
    }

    /**
     * Remove the specified marks from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    public function destroy(Request $request)
    {
        $this->authorize('delete', markstypes::class);

        $id = $request['id'];
        
        $markstypes = $this->markstypesRepository->find($id);

        if (empty($markstypes)) {
            Flash::error('The mark was not found<br><br>بيانات العلامة المطلوبة غير موجودة');

            return redirect(route('marks.index'));
        }

        $this->markstypesRepository->delete($id);

        Flash::success('The mark was deleted successfully<br><br>تم حذف بيانات العلامة بنجاح');

        return redirect(route('marks.index'));
    }
}
