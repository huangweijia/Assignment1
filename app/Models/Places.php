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
            'name' => 'Tracer',
            'fullname' => 'Lena Oxton',
            'position' => 'London',
            'nationality' => 'England',         
            'profession' => 'adventurer',            
            'image' => 'Tracer.jpg',
        ],
        '2' => [
           'id' => 2,
            'name' => 'genji',
            'fullname' => 'Shimada genji',
            'position' => 'Nepal',
            'nationality' => 'Japan',
            'profession' => 'adventurer',            
            'image' => 'genji.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Wrecking Ball',
            'fullname' => 'Hammond',
            'position' => '(front) The Horizon Moon Base',
            'nationality' => 'NONE',
            'profession' => 'Mech driver',            
            'image' => 'Ball.jpg',
        ],
        '4' => [
             'id' => 4,
            'name' => 'Mercy',
            'fullname' => 'Angela Ziegler',
            'position' => 'The Swiss',
            'nationality' => 'The Swiss',
            'profession' => 'War physician',            
            'image' => 'Mercy.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'D.Va',
            'fullname' => 'Song Hannah',
            'position' => 'South Korea busan',
            'nationality' => 'South Korea',
            'profession' => 'Professional player, mecha driver',            
            'image' => 'DVA.jpg',
        ],
        '6'=> [
             'id' => 6,
            'name' => 'Ana',
            'fullname' => 'Ana Amari',
            'position' => 'Cairo Egypt',
            'nationality' => 'Egypt', 
            'profession' => 'A bounty hunter',            
            'image' => 'Ana.jpg',
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