<?php

    namespace Database\Seeders;

    use App\Models\Contact;
    use Illuminate\Database\Seeder;

    class ContactBookSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            Contact::truncate();
            $contacts = [
                ['first_name' => 'PETER', 'last_name' => 'Rabbit', 'mobile' => '0400505123', 'email' => 'peter@therabbit.com', 'post_code' => '3121'],
                ['first_name' => 'DARTH', 'last_name' => 'Vader', 'mobile' => '0409123123', 'email' => 'darth@theforce.com'],
                ['first_name' => 'CHARLIE', 'last_name' => 'Brown', 'mobile' => '0408998112', 'email' => 'living@thedream.com.au', 'post_code' => '3020'],
                ['first_name' => 'MICKEY', 'last_name' => 'Mouse', 'mobile' => '0411211211', 'email' => 'mouse@bestplace.com'],
                ['first_name' => 'DONALD', 'last_name' => 'Duck', 'mobile' => '0421121211'],
                ['first_name' => 'JULIUS', 'last_name' => 'Caesar', 'mobile' => '0417878123', 'post_code' => '4050'],
                ['first_name' => 'MIKE', 'last_name' => 'Tyson', 'mobile' => '0400500800', 'email' => 'mike@ipunch.com.au'],
                ['first_name' => 'CLINT', 'last_name' => 'Eastwood', 'mobile' => '0419345345', 'email' => 'clint@thebigdog.com'],
                ['first_name' => 'DAFFY', 'last_name' => 'Duck', 'mobile' => '0421121212', 'email' => 'daffy@alltheducks.com.au'],
                ['first_name' => 'MICHAEL', 'last_name' => 'Jordan', 'mobile' => '0418765543', 'email' => 'mike@idunk.com.au', 'post_code' => '5050'],
                ['first_name' => 'JULIA', 'last_name' => 'Roberts', 'mobile' => '0409678332', 'post_code' => '5'],
            ];
            foreach ($contacts as $contact)
                Contact::create($contact);
        }
    }
