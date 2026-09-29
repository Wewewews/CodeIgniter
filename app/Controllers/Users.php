<?php

namespace App\Controllers;

class Users extends BaseController{
    public function index(){
        $users = [
            [
                'username' => 'BJ',
                'fullname' => 'Bustin Jieber',
                'role' => 'Admin'
            ],
            [
                'username' => 'Clairo',
                'fullname' => 'Claire Cotril',
                'role' => 'Basset'
            ],
            [
                'username' => 'Leeseo',
                'fullname' => 'Hyunseo Lee',
                'role' => 'Eacakes'
            ],
            [
                'username' => 'KD',
                'fullname' => 'Kiben Duwan',
                'role' => 'Asset'
            ],
            [
                'username' => 'MasterBuilder123',
                'fullname' => 'Emmet',
                'role' => 'Mixer'
            ]
        ];
        return view('users', ['users' => $users]);
    }
}