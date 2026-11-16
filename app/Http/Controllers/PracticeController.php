<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function practice1()
    {
        $user = new User();
        $user->name = "Рамз";
        $user->email = "temp@mail.ru";
        $user->password = "123";
        $user->birthday = "1989-01-01";
        $user->save();
        return redirect('/practice');
    }

    public function practice2()
    {
        $user = User::find(7);
        $user->name = 'Самат';
        $user->save();
        return redirect('/practice');
    }

    public function practice3()
    {
        $date = date('Y-m-d', strtotime('-30 years'));
        User::where('birthday', '<', $date)->delete();
        return redirect('/practice');
    }

    public function practice4()
    {
        User::destroy(10,12,14);
        return redirect('/practice');
    }

    public function practice5()
    {
        // Post::find(19)->delete();
        Post::withTrashed()->find(19)->restore();
        return redirect('/catalog');
    }

    public function practice6()
    {
        $post = new Post;
        $post->title = 'пост';
        $post->description = 'description';
        $post->user_id = 4;
        $post->category_id = 8;
        $post->thumbnail_id = 34;
        $post->photo = "a.png";
        $post->save();
        return redirect('/practice');
    }

    public function practice7()
    {
        return redirect('/practice');
    }

    public function practice8()
    {
        return redirect('/practice');
    }

    public function practice9()
    {
        return redirect('/practice');
    }

    public function practice10()
    {
        return redirect('/practice');
    }

    public function practice11()
    {
        return redirect('/practice');
    }

    public function practice12()
    {
        return redirect('/practice');
    }

    public function practice13()
    {
        return redirect('/practice');
    }

    public function practice14()
    {
        return redirect('/practice');
    }

    public function practice15()
    {
        return redirect('/practice');
    }

    public function practice16()
    {
        return redirect('/practice');
    }

    public function practice17()
    {
        return redirect('/practice');
    }

    public function practice18()
    {
        return redirect('/practice');
    }

    public function practice19()
    {
        return redirect('/practice');
    }

    public function practice20()
    {
        return redirect('/practice');
    }

    public function practice21()
    {
        return redirect('/practice');
    }
}
