<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\User;
use App\EmergencyPlanTemplate;
//use Yajra\Datatables\Datatables;

//include( '' );

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        echo "foo is 1212 ";
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        
        //return Datatables::of(User::query())->make(true);
        //return Datatables::of(EmergencyPlanTemplate::query())->make(true);
        return Datatables::of(EmergencyPlanTemplate::select([ 'facility_id', 'name','display_sequence','user_editable','required','description','type']))->make(true);
    }

  public function dataResponse(Request $req) {

        $input = $req->input();
        $action = $input['action'];
        $rowIdArray = array_keys($input['data']);

        foreach($rowIdArray as $rowId) {
           $dataArray[] = $input['data'][$rowId];
        }

        // do form validation
        $validator = Validator::make($input['data'][$rowIdArray[0]], [
            //'first_name' => 'required|max:5',
            //'last_name' => 'required|max:30'
        ]);

        $validator->setCustomMessages([
            //'first_name.required' => 'Please provide your first name.',
            //'first_name.max' => 'Please shorten your first name.',
            //'last_name.required' => 'Please provide your last name.',
            //'last_name.max' => 'Please shorten your last name.',
        ]);

        $returnArray =  DatatablesEditor::process($req,  $validator,   /* 'App\Models\User' */  /* User::all() */  EmergencyPlanTemplate::where ('facility_id',   '<=', 50) );

        // This was used to create static json responses for testing purposes
        // $returnArray =  DatatablesEditor::processStaticTest($req,  $validator, 'App\Models\User');

        return $returnArray;
    }
}
