<?php

class UserTableSeeder extends Seeder {
	public function run() {
		DB::table('tblUser')
		->delete();

		DB::table('tblUser')
		->insert(
			[
				'intUserType'		=> 1,
				'strName'	=> 'Arianne Grace S. Labtic',
				'strPenName'	=> 'SysAdmin',
				'strDescription'		=> 'System Admin Nga Eh',
				'strWebsite'	=> '',
				'strContactNumber'		=> '',
				'strImagePath'		=> 'img/agsl.jpg',
				'intStatusId'		=> 1,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblUser')
		->insert(
			[
				'intUserType'		=> 2,
				'strName'	=> 'Krizia Camille Uayan',
				'strPenName'	=> 'kcNeko',
				'strDescription'		=> 'Bully',
				'strWebsite'	=> 'deviantart.com/kcneko',
				'strContactNumber'		=> '09282807080',
				'strImagePath'		=> 'img/team-leader-pic6.jpg',
				'intStatusId'		=> 1,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);
	}
}