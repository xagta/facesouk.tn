<?php 

namespace App\Http\Controllers;

use App\Opportunities;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class OpportunitiesController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
   $opps= Opportunities::all()->load('owner') ;

     // echo json_encode($opps) ;
        return view('other.opportunities.index',['opps'=>$opps]) ;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('other.opportunities.create') ;
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $input = $request->all();
      $user = Auth::user()->getAuthIdentifier() ;
      $input['user_id'] = $user ;


     $op= Opportunities::create($input) ;

     // return json_encode($op) ;
      return redirect(route('opportunities.index')) ;

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>