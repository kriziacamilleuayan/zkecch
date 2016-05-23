<?php

class ProductTableSeeder extends Seeder {
	public function run() {
		DB::table('tblProduct')
		->delete();

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strArtName'	=> 'When Im with You',
				'strArtDescription'		=> 'A Request from Client',
				'strYearCreated'	=> '2016',
				'strArtImagePath'		=> 'img/macbook-pro.png',
				'intStatus'		=> 1,
				'intCategory'		=> 3,
				'strPrice'			=> 'P300.00',
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strArtName'	=> 'Red Strings',
				'strArtDescription'		=> 'Based on the Japanese Folklore of Red String of Fate',
				'strYearCreated'	=> '2016',
				'strArtImagePath'		=> 'img/artwork1.jpg',
				'intStatus'		=> 2,
				'intCategory'		=> 2,
				'strPrice'			=> 'P200.00',
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strArtName'	=> 'Subliminal Duality',
				'strArtDescription'		=> 'What You See is Not Always There',
				'strYearCreated'	=> '2016',
				'strArtImagePath'		=> 'img/artwork2.jpg',
				'intStatus'		=> 3,
				'intCategory'		=> 1,
				'strPrice'			=> 'P100.00',
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strArtName'	=> 'Wolf in a Lamb Sheet',
				'strArtDescription'		=> 'Be Careful',
				'strYearCreated'	=> '2016',
				'strArtImagePath'		=> 'img/artwork3.jpg',
				'intStatus'		=> 2,
				'intCategory'		=> 1,
				'strPrice'			=> 'P400.00',
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strArtName'	=> 'RED',
				'strArtDescription'		=> 'Anime Sketch',
				'strYearCreated'	=> '2016',
				'strArtImagePath'		=> 'img/artwork4.jpg',
				'intStatus'		=> 1,
				'intCategory'		=> 2,
				'strPrice'			=> 'P500.00',
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strArtName'	=> 'Bored...',
				'strArtDescription'		=> 'Just Passing Time',
				'strYearCreated'	=> '2016',
				'strArtImagePath'		=> 'img/artwork5.jpg',
				'intStatus'		=> 2,
				'intCategory'		=> 4,
				'strPrice'			=> 'P700.00',
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

	}
}