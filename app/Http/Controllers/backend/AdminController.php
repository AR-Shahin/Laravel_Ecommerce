<?php

namespace App\Http\Controllers\backend;

use App\Admin;
use App\Http\Controllers\Controller;
use function file_exists;
use Illuminate\Http\Request;
use App\Http\Requests\AddAdminRequest;
use function view;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\ChangePassword;
class AdminController extends Controller
{
    public function index(){
        if(Auth::guard('web')->user()->status == 0) return redirect()->back();
        $this->data['admins'] = Admin::latest()->get();
        return view('backend.admin.index',$this->data);
    }
    public function profile(){
        $this->data['admin'] = Admin::find(Auth::user()->id);
        return view('backend.admin.profile',$this->data);
    }
    public function create(){
        if(Auth::guard('web')->user()->status == 0) return redirect()->back();
        return view('backend.admin.create',$this->data);
    }
    public function storeNewAdmin(AddAdminRequest $request){
        //return $request->all();
        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $upload = 'uploads/admin/';
        $last_image = $upload . $img_name;
        $formData =  $request->all();
        $password = $request->password;
        $formData['image'] = $last_image;
        $formData['password'] = Hash::make($password);

        $create = Admin::create($formData);
        if($create){
            $image->move($upload,$img_name);
            return redirect()->route('admin.index')->with('toast_success','New Admin Added!');
        }else{
            return redirect()->back();
        }
    }

    public function promoteAdmin($id){
        if(Auth::guard('web')->user()->status == 0) return redirect()->back();
        $update = Admin::findorFail($id)->update([
            'status' => 1
        ]);
        if($update){
            return redirect()->back()->with('success','Promote Admin.');
        }
    }
    public function demoteAdmin($id){
        if(Auth::guard('web')->user()->status == 0) return redirect()->back();
        $update = Admin::findorFail($id)->update([
            'status' => 0
        ]);
        if($update){
            return redirect()->back()->with('success','Demote Admin.');
        }
    }
    public function blockAdmin($id){
        if(Auth::guard('web')->user()->status == 0) return redirect()->back();
        $update = Admin::findorFail($id)->update([
            'status' => 3
        ]);
        if($update){
            return redirect()->back()->with('success','Blocked');
        }
    }
    public function unblockAdmin($id){
        if(Auth::guard('web')->user()->status == 0) return redirect()->back();
        $update = Admin::findorFail($id)->update([
            'status' => 0
        ]);
        if($update){
            return redirect()->back()->with('success','Unblocked Admin.');
        }
    }

    public function deleteAdmin($id){
        if(Auth::guard('web')->user()->status == 0) return redirect()->back();
        $ob = Admin::findorFail($id);
        $img = $ob->image;
        $update = Admin::findorFail($id)->delete();
        if($update){
            if(file_exists($img)){unlink($img);}
            return redirect()->back()->with('success','Deleted Admin.');
        }
    }

    public function update(){
        $this->data['admin'] = Admin::find(Auth::user()->id);
        return view('backend.admin.update',$this->data);
    }

    public function updateProfile(Request $request){

        $image = $request->file('image');
        if ($image) {
            $old_image = $request->old_image;
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $upload = 'uploads/admin/';
            $last_image = $upload . $img_name;

            $update = Admin::findorFail(Auth::user()->id)->update([
                'name' => ucwords($request->name),
                'image' => $last_image,
                'updated_at' => Carbon::now()
            ]);
            if($update){
                $image->move($upload,$img_name);
                if(file_exists($old_image)){unlink($old_image);}
            }
        }else{
            $update = Admin::findorFail(Auth::user()->id)->update([
                'name' => ucwords($request->name),
                'updated_at' => Carbon::now()
            ]);
        }
        return redirect()->route('profile')->with('success','Profile Updated Successfully!');
    }

    public function changePassword(ChangePassword $request){
        $db_pass = Auth::user()->getAuthPassword();
        $new_pass = $request->password;
        $old_pass = $request->old_pass;
        if(Hash::check($old_pass,$db_pass)){
            $update = Admin::find(Auth::user()->id)->update([
                'password'=>Hash::make($new_pass),
                'updated_at' => Carbon::now()
            ]);
            if($update)
            {
                Auth::guard('web')->logout();
                return Redirect()->route('admin.login')->with('toast_success','Password has Changed! You have to login now!!');
            }
        }else{
            return redirect()->back()->with('toast_error','Invalid old Password : )');
        }
    }
}
