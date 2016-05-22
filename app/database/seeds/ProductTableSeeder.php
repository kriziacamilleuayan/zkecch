<?php

class ProductTableSeeder extends Seeder {
	public function run() {
		DB::table('tblProduct')
		->delete();

		DB::table('tblProduct')
		->insert(
			[
				'intUserId'		=> 2,
				'strName'	=> 'Jayrianne by kcNeko',
				'strDescription'		=> 'Malandeh talagah si RJ',
				'strYearCreated'	=> '2016',
				'strImagePath'		=> 'img/macbook-pro.png',
				'intStatusId'		=> 1,
				'intCategory'		=> 1,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

	}
}