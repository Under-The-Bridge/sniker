<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    private $days = [
        'вс',
        'пн',
        'вт',
        'ср',
        'чт',
        'пт',
        'сб'
    ];

    public function index()
    {
        return view("index", ["days" => $this->days]);
    }

    public function second($id)
    {
        return view("second", ["day" => $this->days[$id]]);
    }
    public function third($id)
    {
        return view("third", ["day" => $this->days[$id]]);
    }
}
