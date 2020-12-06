<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterelativesRequest;
use App\Http\Requests\UpdaterelativesRequest;
use App\Repositories\relativesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use Illuminate\Support\Facades\Mail;
use App\Mail\requestGuardianDataUpdate;

use App\Models\relatives;
use App\Models\users;

class relativesController extends AppBaseController
{
    /** @var  relativesRepository */
    private $relativesRepository;

    public function __construct(relativesRepository $relativesRepo)
    {
        $this->relativesRepository = $relativesRepo;
    }

    /**
     * Display a listing of the relatives.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $relatives = relatives::with('contacts.user')->get();

        return view('relatives.index',compact('relatives'));
    }

    public function requestupdate(Request $request)
    {

        $data = $request->all();

        if (empty($data['org'])) $data['org'] = "None";
        if (empty($data['orgNew'])) $data['orgNew'] = "None";
        if (empty($data['waddress'])) $data['waddress'] = "None";
        if (empty($data['waddressNew'])) $data['waddressNew'] = "None";
        if (empty($data['more'])) $data['more'] = "None";
        if (empty($data['moreNew'])) $data['moreNew'] = "None";
        if (empty($data['nation'])) $data['nation'] = "None";
        if (empty($data['nationNew'])) $data['nationNew'] = "None";
        if (empty($data['ppno'])) $data['ppno'] = "None";
        if (empty($data['ppnoNew'])) $data['ppnoNew'] = "None";
        if (empty($data['ppExpiry'])) $data['ppExpiry'] = "None";
        if (empty($data['ppExpiryNew'])) $data['ppExpiryNew'] = "None";
        
        if (empty($data['passport'])) $data['passport'] = "None";
        if (empty($data['visa'])) $data['visa'] = "None";

        $splitPath = explode($data['ppno']."_", $data['passport']); // Passport
        $path = $splitPath[0];

        if ($files = $request->file('passportNew')) {
            $passport = $data['ppno'] . "_" . "NewPassport" . "." . $files->getClientOriginalExtension();
            $files->move($path, $passport);
            $data += ['passportNewf' => $path.$passport];
        }
        else {$data += ['passportNewf' => $data['passport']];}


        $splitPath = explode($data['ppno']."_", $data['visa']); // Visa
        $path = $splitPath[0];

        if ($files = $request->file('visaNew')) {
            $visa = $data['ppno'] . "_" . "NewVisa" . "." . $files->getClientOriginalExtension();
            $files->move($path, $visa);
            $data += ['visaNewf' => $path.$visa];
        }
        else {$data += ['visaNewf' => $data['visa']];}

        $secretary = users::where('role_id', '=', 4)->where('status_id', '=', 2)->get('email');

        Mail::to($secretary[0])->cc('principal@aqsa.edu.my')->send(new requestGuardianDataUpdate($data));

        Flash::success('The update request was sent successfully and soon data will be updated<br><br>تم إرسال طلب تحديث البيانات بنجاح وسيتم قريباً تحديثها');

        return redirect(route('users.index'));
    }

    /**
     * Store a newly created relatives in storage.
     *
     * @param CreaterelativesRequest $request
     *
     * @return Response
     */
    public function store(CreaterelativesRequest $request)
    {
        $this->authorize('create', relatives::class);

        $input = $request->all();

        $relatives = $this->relativesRepository->create($input);

        Flash::success('Relatives saved successfully.');

        return redirect(route('relatives.index'));
    }

    /**
     * Update the specified relatives in storage.
     *
     * @param int $id
     * @param UpdaterelativesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterelativesRequest $request)
    {
        $this->authorize('update', relatives::class);

        $relative = $this->relativesRepository->find($request['id']);

        if (empty($relative)) {
            Flash::error('Relatives not found');

            return redirect(route('relatives.index'));
        }

        relatives::where('id', '=', $request['id'])
        ->update(['eName' => $request['eName'], 'aName' => $request['aName'],
        'name' => $request['name'], 'gender' => $request['gender'],
        'relation' => $request['relation'], 'job' => $request['job'],
        'org' => $request['org'], 'email' => $request['email'],
        'phone' => $request['phone'],
        'hAddress' => $request['hAddress'], 'wAddress' => $request['wAddress'],
        'more' => $request['more'], 'nation' => $request['nation'],
        'ppno' => $request['ppno'], 'ppExpiry' => $request['ppExpiry'],
        'passport' => $request['passport'], 'visa' => $request['visa']]);

        $users = users::all();

        foreach ($users as $user)
            if ($user->email == $relative->rEmail)
                users::where('id', '=', $user->id)
                ->update(['email' => $request['email']]);
        

        Flash::success('The Relative Data was updated successfully<br><br>تم تحديث بيانات القريب بنجاح');

        return redirect(route('relatives.index'));
    }

    /**
     * Remove the specified relatives from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
        $this->authorize('delete', relatives::class);

        $id = $request['id'];
        
        $relatives = $this->relativesRepository->find($id);

        if (empty($relatives)) {
            Flash::error('Relatives not found');

            return redirect(route('relatives.index'));
        }

        $this->relativesRepository->delete($id);

        Flash::success('Relatives deleted successfully.');

        return redirect(route('relatives.index'));
    }
}
