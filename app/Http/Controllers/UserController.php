<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Thumbnail;
use App\Models\Tag;
use App\Models\User;

class UserController extends Controller
{


    public function index()
    {
        return view("home");
        // return view("index");
    }

    public function dashboard()
    {
        $today = date("Y-m-d", strtotime('-18 years'));
        $users = Db::table('users')->get()->where('birthday', '<=', $today);
        return view('user.dashboard', compact('users'));
        // return view("user.dashboard", ['name' => 'рам', 'age' => '18']);
        // return view("user.dashboard",['users'=>[['name'=>'рам','age'=>'18'],['name'=>'qwe','age'=>'23'],['name'=>'asd','age'=>'34']]]);

        // return view("user.dashboard")
        //     ->with('name', 'рам')
        //     ->with('age', '18');

        // $name = "Рамз";
        // $age = 19;
        // return view("user.dashboard", compact('name', 'age'));

    }

    public function about()
    {
        return view("about", ['users' => [['name' => 'рам', 'age' => '18'], ['name' => 'qwe', 'age' => '23'], ['name' => 'asd', 'age' => '34']]]);
    }

    public function show($id)
    {
        switch ($id) {
            case 1:
                return $this->show1();
            case 2:
                return $this->show2();
            case 3:
                return $this->show3();
            case 4:
                return $this->show4();
            case 5:
                return $this->show5();
            case 6:
                return $this->show6();
            case 7:
                return $this->show7();
            case 8:
                return $this->show8();
            case 9:
                return $this->show9();
            case 10:
                return $this->show10();
            case 11:
                return $this->show11();
        }
    }

    public function show1()
    {
        return view('post.show1', [
            'links' => [
                [
                    'text' => 'text1',
                    'href' => 'href1',
                ],
                [
                    'text' => 'text2',
                    'href' => 'href2',
                ],
                [
                    'text' => 'text3',
                    'href' => 'href3',
                ],
            ],
        ]);
    }
    public function show2()
    {
        return view('post.show2', [
            'links' => [
                [
                    'text' => 'text1',
                    'href' => 'href1',
                ],
                [
                    'text' => 'text2',
                    'href' => 'href2',
                ],
                [
                    'text' => 'text3',
                    'href' => 'href3',
                ],
            ],
        ]);
    }
    public function show3()
    {
        return view('post.show3', [
            'employees' => [
                [
                    'name' => 'user1',
                    'surn' => 'surn1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surn' => 'surn2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surn' => 'surn3',
                    'salary' => 3000,
                ],
                [
                    'name' => 'user4',
                    'surn' => 'surn4',
                    'salary' => 4000,
                ],
                [
                    'name' => 'user5',
                    'surn' => 'surn5',
                    'salary' => 5000,
                ],
            ],
        ]);
    }
    public function show4()
    {
        return view('post.show4', [
            'employees' => [
                [
                    'name' => 'user1',
                    'surn' => 'surn1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surn' => 'surn2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surn' => 'surn3',
                    'salary' => 3000,
                ],
                [
                    'name' => 'user4',
                    'surn' => 'surn4',
                    'salary' => 4000,
                ],
                [
                    'name' => 'user5',
                    'surn' => 'surn5',
                    'salary' => 5000,
                ],
            ],
        ]);
    }
    public function show5()
    {
        return view('post.show5', [
            'employees' => [
                [
                    'name' => 'user1',
                    'surn' => 'surn1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surn' => 'surn2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surn' => 'surn3',
                    'salary' => 3000,
                ],
                [
                    'name' => 'user4',
                    'surn' => 'surn4',
                    'salary' => 4000,
                ],
                [
                    'name' => 'user5',
                    'surn' => 'surn5',
                    'salary' => 5000,
                ],
            ],
        ]);
    }
    public function show6()
    {
        return view('post.show6', [
            'employees' => [
                [
                    'name' => 'user1',
                    'surn' => 'surn1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surn' => 'surn2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surn' => 'surn3',
                    'salary' => 3000,
                ],
                [
                    'name' => 'user4',
                    'surn' => 'surn4',
                    'salary' => 4000,
                ],
                [
                    'name' => 'user5',
                    'surn' => 'surn5',
                    'salary' => 5000,
                ],
            ],
        ]);
    }
    public function show7()
    {
        return view('post.show7', [
            'users' => [
                [
                    'name' => 'user1',
                    'surn' => 'surn1',
                    'banned' => true,
                ],
                [
                    'name' => 'user2',
                    'surn' => 'surn2',
                    'banned' => false,
                ],
                [
                    'name' => 'user3',
                    'surn' => 'surn3',
                    'banned' => true,
                ],
                [
                    'name' => 'user4',
                    'surn' => 'surn4',
                    'banned' => false,
                ],
                [
                    'name' => 'user5',
                    'surn' => 'surn5',
                    'banned' => false,
                ],
            ],
        ]);
    }
    public function show8()
    {
        return view('post.show8', [
            'users' => [
                [
                    'name' => 'user1',
                    'surn' => 'surn1',
                    'banned' => true,
                ],
                [
                    'name' => 'user2',
                    'surn' => 'surn2',
                    'banned' => false,
                ],
                [
                    'name' => 'user3',
                    'surn' => 'surn3',
                    'banned' => true,
                ],
                [
                    'name' => 'user4',
                    'surn' => 'surn4',
                    'banned' => false,
                ],
                [
                    'name' => 'user5',
                    'surn' => 'surn5',
                    'banned' => false,
                ],
            ],
        ]);
    }
    public function show9()
    {
        return view('post.show9', [
            'arr' => ['aaa', 'bbb', 'ccc', 'ddd'],
        ]);
    }
    public function show10()
    {
        return view('post.show10', [
            'cities' => ['Moscow', 'London', 'Paris'],
        ]);
    }
    public function show11()
    {
        return view('post.show11', [
            'days' => [1, 2, 3, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30], // ваш код
            'today' => 23,
        ]);
    }

    public function posts()
    {
        $posts = Post::with(['thumbnail', 'category', 'tags'])->get();
        $allCategories = Category::all();
        return view("catalog", compact('posts', 'allCategories'));
    }

    public function oneCategory($id)
    {
        $category = Category::find($id);
        $posts = $category->post()->with(['thumbnail', 'category', 'tags'])->get();
        $allCategories = Category::all();
        return view('catalog', compact('posts', 'allCategories'));
    }
    public function oneTag($id)
    {
        $tag = Tag::find($id);
        $posts = $tag->posts()->get();
        return view('tag', compact('posts'));
    }

    public function test_factory(){
        User::factory()->create();
    }

}
