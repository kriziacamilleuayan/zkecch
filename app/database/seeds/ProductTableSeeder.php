<?php

class ProductTableSeeder extends Seeder {
	public function run() {
		DB::table('tblProduct')
		->delete();

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strName'	=> 'When Im with You',
				'strDescription'		=> 'A Request from Client',
				'strYearCreated'	=> '2016',
				'strImagePath'		=> 'img/macbook-pro.png',
				'intStatusId'		=> 1,
				'intCategory'		=> 3,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strName'	=> 'Red Strings',
				'strDescription'		=> 'Based on the Japanese Folklore of Red String of Fate',
				'strYearCreated'	=> '2016',
				'strImagePath'		=> 'img/artwork1.jpg',
				'intStatusId'		=> 2,
				'intCategory'		=> 2,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strName'	=> 'Subliminal Duality',
				'strDescription'		=> 'What You See is Not Always There',
				'strYearCreated'	=> '2016',
				'strImagePath'		=> 'img/artwork2.jpg',
				'intStatusId'		=> 3,
				'intCategory'		=> 1,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strName'	=> 'Wolf in a Lamb Sheet',
				'strDescription'		=> 'Be Careful',
				'strYearCreated'	=> '2016',
				'strImagePath'		=> 'img/artwork3.jpg',
				'intStatusId'		=> 2,
				'intCategory'		=> 1,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strName'	=> 'RED',
				'strDescription'		=> 'Anime Sketch',
				'strYearCreated'	=> '2016',
				'strImagePath'		=> 'img/artwork4.jpg',
				'intStatusId'		=> 1,
				'intCategory'		=> 2,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strName'	=> 'Bored...',
				'strDescription'		=> 'Just Passing Time',
				'strYearCreated'	=> '2016',
				'strImagePath'		=> 'img/artwork5.jpg',
				'intStatusId'		=> 2,
				'intCategory'		=> 4,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

	}
}