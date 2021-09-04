<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id'=>1,'name'=>'admin','type'=>'admin','mobile'=>'7905839710','email'=>'admin@admin.com'
                ,'password'=>'$2y$10$AH/P9q4/XvmduYDyiBQFt.N7WT2TiPKosAk1LCXHC.FSpHsA/wfna','image'=>'','status'=>1 
            ],
            [
                'id'=>2,'name'=>'Prachi','type'=>'subadmin','mobile'=>'7905839710','email'=>'prachi@admin.com'
                ,'password'=>'$2y$10$AH/P9q4/XvmduYDyiBQFt.N7WT2TiPKosAk1LCXHC.FSpHsA/wfna','image'=>'','status'=>1 
            ],
            [
                'id'=>3,'name'=>'Randhir','type'=>'subadmin','mobile'=>'7905839710','email'=>'randhir@admin.com'
                ,'password'=>'$2y$10$AH/P9q4/XvmduYDyiBQFt.N7WT2TiPKosAk1LCXHC.FSpHsA/wfna','image'=>'','status'=>1 
            ],
            [
                'id'=>4,'name'=>'Amit','type'=>'accounts','mobile'=>'7905839710','email'=>'amit@admin.com'
                ,'password'=>'$2y$10$AH/P9q4/XvmduYDyiBQFt.N7WT2TiPKosAk1LCXHC.FSpHsA/wfna','image'=>'','status'=>1 
            ],
            [
                'id'=>5,'name'=>'John','type'=>'accounts','mobile'=>'7905839710','email'=>'john@admin.com'
                ,'password'=>'$2y$10$AH/P9q4/XvmduYDyiBQFt.N7WT2TiPKosAk1LCXHC.FSpHsA/wfna','image'=>'','status'=>1 
            ],
        ];

        foreach($adminRecords as $key => $record) {
            \App\Admin::create($record);
        }
    }
}