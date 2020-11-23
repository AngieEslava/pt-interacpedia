<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement("INSERT INTO users (name, email, password, created_at ) VALUES ('admin', 'admin@admin.com', '$2y$10\$TxnlY1.vAP9PqbiJOg7H6eX2MD3F5T2UhBMVKjgab5y2WI1g7gevW' , '2020-11-22 01:59:39')");
    }
}
