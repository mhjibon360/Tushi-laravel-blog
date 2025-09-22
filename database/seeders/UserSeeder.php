<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['Mehedi Hassan Jibon', 'mehedi.bd@gmail.com', 'mehedi', 'Rangpur bashay thake. IT peshay kaj kore.', 1],
            ['Rahim Uddin', 'rahim.bd@gmail.com', 'rahim', 'Dhaka bashay thake. IT peshay kaj kore.', 1],
            ['Karim Mia', 'karim.mia@yahoo.com', 'karim', 'Chattogram er lok. Business kore.', 0],
            ['Jamal Hossain', 'jamal.h@gmail.com', 'jamal', 'Sylhet er hotel e job kore.', 1],
            ['Sajeda Begum', 'sajeda@gmail.com', 'sajeda', 'Rajshahi te teacher hisebe kaj kore.', 1],
            ['Nusrat Jahan', 'nusratj@gmail.com', 'nusrat', 'Khulna te freelancing kore.', 0],
            ['Faisal Ahmed', 'faisal.a@gmail.com', 'faisal', 'Dhaka University te porashona kore.', 1],
            ['Mourin Rahman', 'mourin.r@gmail.com', 'mourin', 'Jashore er garment e kaj kore.', 0],
            ['Tanvir Hossain', 'tanvir@gmail.com', 'tanvir', 'Comilla te business kore.', 1],
            ['Hasib Khan', 'hasib.khan@gmail.com', 'hasib', 'Barisal er ekta bank e kaj kore.', 1],
            ['Sumi Akter', 'sumi.a@gmail.com', 'sumi', 'Rangpur e college student.', 0],
            ['Rana Chowdhury', 'rana.c@gmail.com', 'rana', 'Gazipur e factory te supervisor.', 1],
            ['Nila Sultana', 'nila.s@gmail.com', 'nila', 'Narayanganj e teacher.', 1],
            ['Babu Mia', 'babu.m@gmail.com', 'babu', 'Dhaka er driver.', 0],
            ['Monir Hossain', 'monir.h@gmail.com', 'monir', 'Sylhet er chef.', 1],
            ['Rafiq Ahmed', 'rafiq.a@gmail.com', 'rafiq', 'Khulna e sromik.', 0],
            ['Shirin Akter', 'shirin.a@gmail.com', 'shirin', 'Rajshahi er nurse.', 1],
            ['Jannat Ara', 'jannat.a@gmail.com', 'jannat', 'Barisal er housewife.', 1],
            ['Habib Rahman', 'habib.r@gmail.com', 'habib', 'Comilla er shopkeeper.', 0],
            ['Anisur Rahman', 'anisur.r@gmail.com', 'anisur', 'Dhaka er banker.', 1],
            ['Mamun Hossain', 'mamun.h@gmail.com', 'mamun', 'Sylhet e student.', 1],
            ['Asma Khatun', 'asma.k@gmail.com', 'asma', 'Khulna er tailor.', 0],
            ['Bashir Uddin', 'bashir.u@gmail.com', 'bashir', 'Rajshahi er driver.', 1],
            ['Morshed Alam', 'morshed.a@gmail.com', 'morshed', 'Barisal e deliveryman.', 1],
            ['Rokeya Begum', 'rokeya.b@gmail.com', 'rokeya', 'Gazipur e nurse.', 0],
            ['Liton Mia', 'liton.m@gmail.com', 'liton', 'Narayanganj er mechanic.', 1],
            ['Polash Hossain', 'polash.h@gmail.com', 'polash', 'Dhaka er student.', 0],
            ['Ruhul Amin', 'ruhul.a@gmail.com', 'ruhul', 'Comilla er manager.', 1],
            ['Mim Akter', 'mim.a@gmail.com', 'mim', 'Sylhet e cashier.', 1],
            ['Sumon Khan', 'sumon.k@gmail.com', 'sumon', 'Khulna e deliveryboy.', 0],
            ['Jahidul Islam', 'jahidul.i@gmail.com', 'jahidul', 'Dhaka er graphic designer.', 1],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'username' => $user[2],
                'details' => $user[3],
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => (string) $user[4],
                'created_at' => Carbon::now()->subDays(rand(1, 30)),
            ]);
        }
    }
}
