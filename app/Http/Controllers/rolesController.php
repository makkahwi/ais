<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterolesRequest;
use App\Http\Requests\UpdaterolesRequest;
use App\Repositories\rolesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\roles;

class rolesController extends AppBaseController
{
    /** @var  rolesRepository */
    private $rolesRepository;

    public function __construct(rolesRepository $rolesRepo)
    {
        $this->rolesRepository = $rolesRepo;
    }

    /**
     * Display a listing of the roles.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {

        $currentSem = sems::with('year')
        ->where('start', '<=', today())
        ->where('end', '>=', today())->limit(1)->get();
        
        $roles = roles::all();

        return view('roles.index', compact('roles', 'currentSem'));
    }

    /**
     * Store a newly created roles in storage.
     *
     * @param CreaterolesRequest $request
     *
     * @return Response
     */

    public function store(Request $request)
    {
        $this->authorize('create', roles::class);

        $input = $request->all();
        
        $roles = roles::firstOrCreate(['title' => $input['title']],
        ['description' => $input['description']]);

        if($roles->wasRecentlyCreated){
            Flash::success('The role was saved successfully<br><br>تم حفظ بيانات صلاحية الوصول بنجاح');
        }
        else {
            Flash::error($input["title"].' data already exist<br><br>بيانات صلاحية الوصول موجودة بالفعل');
        }

        return redirect(route('roles.index'));
    }

    /**
     * Update the specified roles in storage.
     *
     * @param int $id
     * @param UpdaterolesRequest $request
     *
     * @return Response
     */

    public function update(Request $request) // Updating with Modal
     {
        $this->authorize('update', roles::class);

        $role = roles::findOrFail($request->role_id);

        if (empty($role)) {
            Flash::error('The role was not found<br><br>بيانات صلاحية الوصول المطلوبة غير موجودة');

            return redirect(route('roles.index'));
        }
    
        $role->update($request->all());

        Flash::success('The role was updated successfully<br><br>تم تحديث بيانات صلاحية الوصول بنجاح');

        return redirect(route('roles.index'));
     }

    /**
     * Remove the specified roles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    public function destroy(Request $request)
    {
        $this->authorize('delete', roles::class);

        $id = $request['id'];

        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('The role was not found<br><br>بيانات صلاحية الوصول المطلوبة غير موجودة');

            return redirect(route('roles.index'));
        }

        $this->rolesRepository->delete($id);

        Flash::success('The role was deleted successfully<br><br>تم حذف بيانات صلاحية الوصول بنجاح');

        return redirect(route('roles.index'));
    }
}
