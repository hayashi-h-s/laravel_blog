<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;

use Illuminate\Support\Facades\Auth;

use Validator;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')
            ->except(['index', 'show']);
    }

    public function index()
    {
        $auth = Auth::user(); // 認証ユーザー取得
        $articles = Article::orderBy('id', 'desc')->paginate(5);
        // $articles = Article::paginate(5);
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authUser = Auth::user(); // 認証ユーザー取得

        $params = [
            'authUser' => $authUser,
        ];
        return view('articles.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // モデルからインスタンスを生成
        $authUser = Auth::user(); // 認証ユーザー取得
        $form = $request->all();
        $article = new Article;

        $rules = [
            'user_id' => 'integer|required', // 2項目以上条件がある場合は「 | 」を挟む
            'title' => 'required',
            'body' => 'required',
        ];

        $message = [
            'user_id.integer' => 'System Error',
            'user_id.required' => 'System Error',
            'title.required'=> 'タイトルか内容が入力されていません。',
            'body.required'=> 'タイトルか内容が入力されていません。'
        ];
        $validator = Validator::make($form, $rules, $message);

        if($validator->fails()){
            return redirect('/articles/create')
                ->withErrors($validator)
                ->withInput();
        }else{
            unset($form['_token']);
            $article->user_id = $request->user_id;
            $article->title = $request->title;
            $article->body = $request->body;
            $article->save();
            return redirect('/articles')->with('flash_message', '投稿が完了しました。');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article= Article::find($id);
        // viewにデータを渡す
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authUser = Auth::user(); // 認証ユーザー取得
        $params = [
            'authUser' => $authUser,
        ];
        $article = Article::find($id);
        return view('articles.edit', ['article' => $article],$params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  // idを元にレコードを検索して$articleに代入
        $article = Article::find($id);
        // editで編集されたデータを$articleにそれぞれ代入する
        $article->title = $request->title;
        $form = $request->all();
        $article->body = $request->body;
        $article->user_id = $request->user_id;

        $rules = [
            'user_id' => 'integer|required', // 2項目以上条件がある場合は「 | 」を挟む
            'title' => 'required',
            'body' => 'required',
        ];

        $message = [
            'user_id.integer' => 'System Error',
            'user_id.required' => 'System Error',
            'title.required'=> 'タイトルか内容が入力されていません。',
            'body.required'=> 'タイトルか内容が入力されていません。'
        ];
        $validator = Validator::make($form, $rules, $message);

        if($validator->fails()){
            return redirect('/articles/edit')
                ->withErrors($validator)
                ->withInput();
        }else{
            unset($form['_token']);
            $article->user_id = $request->user_id;
            $article->title = $request->title;
            $article->body = $request->body;
            $article->save();
            return redirect("/articles/".$id)->with('flash_message', '編集が完了しました。');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        // 削除
        $article->delete();
        // 一覧にリダイレクト
        return redirect("/users/".$article->user->id )->with('flash_message', '削除が完了しました。');
        // return redirect("/articles")->with('flash_message', '削除が完了しました');
          // 一覧にリダイレクト
//   return redirect('/articles');
    }
}
