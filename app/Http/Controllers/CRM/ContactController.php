<?php

namespace App\Http\Controllers\CRM;

use App\contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //对应/campaign的get
    public function index()
    {
        //这里with后面接的一定要写对
        return view('contact/index')->withContacts(contact::all());
    }
    //对应的/camgaign/create的get
    public function create(){
        echo("create is called");
        return view('contact/create');
    }

    public function edit($id){
        return view('contact/edit')->withContact(contact::find($id));
    }
    //该函数用来存储，对应/campaign的post
    public function store(Request $request){
//        // 数据验证
//        $this->validate($request, [
//            'title' => 'required|unique:articles|max:255', // 必填、在 articles 表中唯一、最大长度 255
//            'body' => 'required', // 必填
//        ]);
//
//        // 通过 Article Model 插入一条数据进 articles 表
//        $article = new Article; // 初始化 Article 对象
//        $article->title = $request->get('title'); // 将 POST 提交过了的 title 字段的值赋给 article 的 title 属性
//        $article->body = $request->get('body'); // 同上
//        $article->user_id = $request->user()->id; // 获取当前 Auth 系统中注册的用户，并将其 id 赋给 article 的 user_id 属性
//
//        // 将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
//        if ($article->save()) {
//            return redirect('admin/article'); // 保存成功，跳转到 文章管理 页
//        } else {
//            // 保存失败，跳回来路页面，保留用户的输入，并给出提示
//            return redirect()->back()->withInput()->withErrors('保存失败！');
//        }
        //验证输入这个先不做
        $contact = new contact();
        $contact->first_name =$request->get('first_name');
        $contact->last_name =$request->get('last_name');
        $contact->title = $request->get('title');
        $contact->organization_id = $request->get('organization_id');
        $contact->email = $request->get('email');
        $contact->office_phone = $request->get('office_phone');
//        下面的步骤是设置外键，现在先可以不用
//        $article->user_id = $request->user()->id; // 获取当前 Auth 系统中注册的用户，并将其 id 赋给 article 的 user_id 属性
        //将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
        if($contact->save()){
            return redirect('contact'); //跳到campaign的index页面
        }else{
            //保存失败，跳回来路页面，保留用户的输入，并且给出提示
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }

    }

    public function destroy($id){
        contact::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }

    public function update(Request $request, $id){
        $contact = contact::find($id);
        $contact->first_name =$request->get('first_name');
        $contact->last_name =$request->get('last_name');
        $contact->title = $request->get('title');
        $contact->organization_id = $request->get('organization_id');
        $contact->email = $request->get('email');
        $contact->office_phone = $request->get('office_phone');
        if($contact ->save()){
            return redirect('contact');
        }else{
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }

    }
}
