<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
			    [
			    	'name' => 'role-read',
			    	'display_name' => 'Display Role Listing',
			    	'description' => 'Crearte New Role'
			    ],
			    [
			    	'name' => 'role-create',
			    	'display_name' => 'Create Role',
			    	'description' => 'Crearte New Role'
			    ],
			    [
			    	'name' => 'role-edit',
			    	'display_name' => 'Edit Role',
			    	'description' => 'Edit Role'
			    ],
			    [
			    	'name' => 'role-delete',
			    	'display_name' => 'Delete Role',
			    	'description' => 'Delete Role'
			    ],
			    [
			    	'name' => 'user-read',
			    	'display_name' => 'Display User Listing',
			    	'description' => 'Crearte New User'
			    ],
			    [
			    	'name' => 'user-create',
			    	'display_name' => 'Create User',
			    	'description' => 'Crearte New User'
			    ],
			    [
			    	'name' => 'user-edit',
			    	'display_name' => 'Edit User',
			    	'description' => 'Edit User'
			    ],
			    [
			    	'name' => 'user-delete',
			    	'display_name' => 'Delete User',
			    	'description' => 'Delete User'
			    ],
			    [
			    	'name' => 'document-read',
			    	'display_name' => 'Display Document Listing',
			    	'description' => 'Crearte New Document'
			    ],
			    [
			    	'name' => 'document-create',
			    	'display_name' => 'Create Document',
			    	'description' => 'Crearte New User'
			    ],
			    [
			    	'name' => 'document-edit',
			    	'display_name' => 'Edit Document',
			    	'description' => 'Edit Document'
			    ],
			    [
			    	'name' => 'document-delete',
			    	'display_name' => 'Delete Document',
			    	'description' => 'Delete Document'
			    ]
		];

		foreach ($permissions as $key => $value) {
			# code...
			Permission::create($value);
		}
    }
}
