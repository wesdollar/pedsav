<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index() {

        $meta = [
            'title' => 'Pediatric Associates of Savannah | Caring from the Start',
            'description' => 'The Pediatric Associates of Savannah have been the local baby experts since 1971. Offering three convenient locations to ensure your baby\'s health needs are always met with weekend and urgent care hours.',
        ];

        $offices = [
            'main' => [
                'id' => 'main',
                'title' => 'Main',
                'phone' => '912.355.2462',
                'address' => '4600 Waters Ave, Ste 100',
                'city' => 'Savannah',
                'zip' => '31404',
                'hours' => [
                    '8am – 5pm Mon thru Fri',
                    '8am – 11am Weekend/Holidays'
                ],
            ],
            'pooler' => [
                'id' => 'pooler',
                'title' => 'Pooler',
                'phone' => '912.330.5010',
                'address' => '110  Medical Park Drive',
                'city' => 'Pooler',
                'zip' => '31322',
                'hours' => [
                    '8am – 5pm Mon thru Fri',
                ],
            ],
            'whitemarsh' => [
                'id' => 'whitemarsh',
                'title' => 'Whitemarsh Island',
                'phone' => '912.898.9800',
                'address' => '1001  Memorial Lane',
                'city' => 'Savannah',
                'zip' => '31410',
                'hours' => [
                    '8am – 5pm Mon thru Fri',
                ],
            ],
        ];

        $doctors = [
            [
                'name' => 'Dr. Michael D. DeMauro',
                'credentials' => 'MD, FAAP',
                'img' => 'dr-michael-demauro',
            ],
            [
                'name' => 'Dr. Diane R. Savage-Pedigo',
                'credentials' => 'MD, FAAP',
                'img' => 'dr-diane-savage-pedigo',
            ],
            [
                'name' => 'Dr. Paul L. Nave',
                'credentials' => 'MD, FAAP',
                'img' => 'dr-paul-nave',
            ],
            [
                'name' => 'Dr. Ben Spitalnick',
                'credentials' => 'MD, MBA, FAAP',
                'img' => 'dr-ben-spitalnick',
            ],
            [
                'name' => 'Dr. Steve Hobby',
                'credentials' => 'MD, CPC, FAAP',
                'img' => 'dr-steven-hobby',
            ],
            [
                'name' => 'Dr. Adria H. Wilkes',
                'credentials' => 'MD, FAAP',
                'img' => 'dr-adria-wilkes',
            ],
            [
                'name' => 'Dr. Chintak B. Patel',
                'credentials' => 'MD, FAAP',
                'img' => 'dr-chintak-patel',
            ],
            [
                'name' => 'Dr. Brandy Gheesling',
                'credentials' => 'MD, CLC, FAAP',
                'img' => 'dr-brandy-gheesling',
            ],
            [
                'name' => 'Dr. Giselle M. Rosinia',
                'credentials' => 'MD, FAAP',
                'img' => 'dr-giselle-rosinia',
            ],
            [
                'name' => 'Elaine Nussbaum',
                'credentials' => 'RN, APN',
                'img' => 'elaine-nussbaum',
            ],
        ];

        $data = [
            'meta' => $meta,
            'offices' => $offices,
            'doctors' => $doctors,
        ];

        return view('home', $data);
    }
}