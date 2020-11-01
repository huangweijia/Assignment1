<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Tarja',
            'fullname' => 'Tarja_Soile_Susanna_Turunen',
            'position' => 'Lead Singer (leave)',
            'nationality' => 'Finland',
            'birthplace' => 'Finland_basety',
            'profession' => 'Singer',            
            'image' => 'tarja.jpg',
        ],
        '2' => [
           'id' => 2,
            'name' => 'empuu',
            'fullname' => 'EmppuVuorinen',
            'position' => 'guitarist',
            'nationality' => 'Finland',
            'birthplace' => 'Kerava',
            'profession' => 'Actors, original music',            
            'image' => 'empuu.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'jukka',
            'fullname' => 'Jukka"Julius"Nevalainen',
            'position' => 'drummer',
            'nationality' => 'Finland',
            'birthplace' => 'Joensuu,Finland',
            'profession' => 'musician',            
            'image' => 'jukka.png',
        ],
        '4' => [
             'id' => 4,
            'name' => 'Anette Olsson ',
            'fullname' => 'Anette Ingegerd Olsson',
            'position' => 'Second vocalist(leave)',
            'nationality' => 'Sweden',
            'birthplace' => 'Katerina Holm',
            'profession' => 'Singer',            
            'image' => 'AnetteOlzon.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Marco',
            'fullname' => 'Marco Tapani Hietala',
            'position' => 'bass player',
            'nationality' => 'Finland',
            'birthplace' => 'Kerava,Finland',
            'profession' => 'bass player',            
            'image' => 'Marco Tapani Hietala.jpg',
        ],
        '6'=> [
             'id' => 6,
            'name' => 'Tuomas',
            'fullname' => 'Tuomas Holopainen',
            'position' => 'keyboardist',
            'nationality' => 'Finland',
            'birthplace' => 'FinlandKitee',
            'profession' => 'Composer, keyboardist, producer',            
            'image' => 'TuomasHolopainen.png',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
