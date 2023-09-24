<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SongController extends BaseController
{
    private $music;
    private $play;
    private $cons;
    public function __construct(){
        $this->music = new \App\models\SongModel();
        $this->play = new \App\models\PlaylistModel();
        $this->cons = new \App\models\ConnectionModel();
    }
    public function index()
    {
        
    }
    public function save(){
        $data =['playlist' => $this->request->getVar('playlist')];
        $this->play->save($data);
        return redirect()->to('chan');
    }
    public function cons(){
        $data = ['playlistID' => $this->request->getVar('playlistID'),
        'musicID' => $this->request->getVar('musicID'),
    ];
    $this->music->save($data);
    return redirect()->to('chan');
}
        public function insertMusic()
        {
            $data = ['file' => $this->request->getVar('file'),
                    'artist' => $this->request->getVar('artist'),
                    'title' => $this->request->getVar('title'),
        ];
        $this->music->save($data);
        return redirect()->to('chan');
        }
    public function song()
    {       
        $data= ['music' => $this->music->findAll(),
        'plays' => $this->play->findAll()];
        // var_dump($data);
        return view ('song', $data);
    }
    public function searchsong(){
        $searchQuery = $this->request->getVar('search');

        if ($searchQuery) {
           
          
        $data= ['music' => $this->music->like('file', $searchQuery)->findAll(),
        'plays' => $this->play->findAll()]; 
    }
    return view('song', $data);
    return redirect()->to('chan');
}
public function playlist(){
    $playlist = $this->request->getVar('add');

    if ($searchQuery) {
    $data= ['music' => $this->music->findAll(),
    'plays' => $this->play->like('file', $searchQuery)->findAll()]; 
}
return view('song', $data);
return redirect()->to('chan');
}
}

