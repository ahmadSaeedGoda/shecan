<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$industries = Industry::orderBy('id', 'desc')->paginate(10);

		return view('industries.index', compact('industries'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('industries.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$industry = new Industry();

		$industry->name = $request->input("name");

		$industry->save();

		return redirect()->route('industries.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$industry = Industry::findOrFail($id);

		return view('industries.show', compact('industry'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$industry = Industry::findOrFail($id);

		return view('industries.edit', compact('industry'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$industry = Industry::findOrFail($id);

		$industry->name = $request->input("name");

		$industry->save();

		return redirect()->route('industries.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$industry = Industry::findOrFail($id);
		$industry->delete();

		return redirect()->route('industries.index')->with('message', 'Item deleted successfully.');
	}

}
