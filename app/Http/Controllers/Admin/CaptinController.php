<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Captin;
use App\Http\Requests\Admin\CaptinRequest;

class CaptinController extends Controller
{
  /**
   * Show all admins
   *
   * @return response
   */
  public function index(Captin $captin) {
     $captins = $captin->orderBy('id', 'asc')->get();

     return view('admin.captins.index', compact('captins'));
  }

  public function getcaptins(Captin $captin) {
     $captins = $captin->orderBy('id', 'asc')->get();

     return view('admin.captins.captin', compact('captins'));
  }
  /**
   * Create new admin
   *
   * @return response
   */
  public function create() {
    return view('admin.captins.create');
  }

  /**
   * Store new admin
   *
   * @return response
   */
  public function store(CaptinRequest $request) {
    // request()->validate([
    //   'password' => 'required|min:6',
    //   'email' => 'required|email|unique:users',
    // ]);
    $captin = Captin::create($request->all());
    $captin->save();

    return redirect()->back()->with(['success' => 'captin inserted successfully']);
  }

  /**
   * edit existing admin
   *
   * @return response
   */
  public function edit($id) {
    $captin = Captin::where('id', $id)->first();

    if (! $captin) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
      return view('admin.captins.edit', compact('captin'));
  }

  /**
   * update existing admin
   *
   * @return response
   */
  public function update($id, CaptinRequest $request) {
    $captin = Captin::where(['id' => $id])->first();

    if (! $captin) {
      return redirect()->back()->with(['error' => 'Sorry, An error occurs']);
    }

    // request()->validate([
    //   'email' => 'required|email|unique:users,email,'.$id,
    // ]);

    // if ($request->password != null) {
    //   request()->validate([
    //     'password' => 'required|min:6',
    //   ]);
    // }

    $captin = $captin->fill();
    // if ($request->password != null) {
    //   $admin->password =  bcrypt($request->password);
    // }
    $captin->save();

   return redirect()->back()->with(['success' => 'captin updated successfully']);
  }

  /**
   * Delete admin by the given id
   *
   * @return message
   */
  public function destroy($id) {
    $captin = Captin::where(['id' => $id])->first();

    if (! $captin) {
      return redirect()->back()->with(['error' => 'Data Not Found']);
    }
    Captin::destroy($id);
    return redirect()->back()->with(['success' => 'Admin deleted successfully']);
  }
}
