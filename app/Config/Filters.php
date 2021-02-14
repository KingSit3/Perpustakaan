<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'loginfilter' => \App\Filters\LoginFilter::class,
		'roleanggota' => \App\Filters\RoleAnggotaFilter::class,
		'rolestaff' => \App\Filters\RoleStaffFilter::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			// keadaan sebelum login, yang boleh diakses
			'loginfilter' => 	[
									'except' => [
													'/',
													'login',
													'login/*',
												],
								],
			'roleanggota' => 	[
									'except' => [
													'/',
													'login',
													'login/*',
												],
								],
			'rolestaff' => 	[
									'except' => [
													'/',
													'login',
													'login/*',
												],
								],

			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			// Keadaan sesudah login, yang boleh diakses
			'loginfilter' => 	[
									'except' => [
													'dashboard/*', 
													'dashboard',
													'books',
													'books/*',
													'myprofile',
													'myprofile/*',
													'users',
													'users/*',
													'bylost/*',
													'bylost',
													'byisbn',
													'byisbn/*',
													'byscrap',
													'byscrap/*',
													'staff',
													'staff/*',
													'peminjaman/*',
													'peminjaman',
													'pengembalian/*',
													'pengembalian',
													'denda/*',
													'denda',
													'login/logout',
													'login/login',
												],
								],
			'roleanggota' => 	[
									'except' => [
													'dashboard/*', 
													'dashboard',
													'myprofile',
													'myprofile/*',
													'login/logout',
													'login/login',
												],
								],
			'rolestaff' => 	[
									'except' => [
													'dashboard/*', 
													'dashboard',
													'books',
													'books/*',
													'myprofile',
													'myprofile/*',
													'users',
													'users/*',
													'bylost/*',
													'bylost',
													'byisbn',
													'byisbn/*',
													'byscrap',
													'byscrap/*',
													'peminjaman/*',
													'peminjaman',
													'pengembalian/*',
													'pengembalian',
													'denda/*',
													'denda',
													'login/logout',
													'login/login',
												],
			],
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}
