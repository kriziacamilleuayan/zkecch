<?php

class AccountTableSeeder extends Seeder {
	public function run() {
		DB::table('tblAccount')
		->delete();

		DB::table('tblAccount')
		->insert(
			[
				'strUserEmail'		=> 'admin@yahoo.com',
				'strUserPassword'	=> 'admin12345',
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblAccount')
		->insert(
			[
				'strUserEmail'		=> 'artist1@yahoo.com',
				'strUserPassword'	=> 'artist12345',
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);
	}
}