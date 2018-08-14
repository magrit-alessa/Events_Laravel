<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('EventsSeeder');
        $this->call('TicketTypesSeeder');
    }
}

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   DB::table('events')->delete();
    	DB::table('events')->insert(array(
        [
  		'Date'=> '2018-10-07',
  		'Title'=> 'Free Plant Extract Sample'
  		],
  		[
  		'Date'=> '2018-08-31',
  		'Title'=> 'AromaTouch Technique Training'
  		],
  		[
  		'Date'=> '2018-11-01',
  		'Title'=> 'PBL Certification'
  		],
  		[
  		'Date'=> '2018-12-31',
  		'Title'=> 'Lourdes University Alumni Card'
  		],
  	    [
  		'Date'=> '2018-11-11',
  		'Title'=> 'Animal Training & Behavioral Wellness Caribbean Event!'
  		])
    	);

    }
}

class TicketTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
    	DB::table('ticket_types')->delete();
    	DB::table('ticket_types')->insert(array(
        [
  		'type'=> 'Free',
  		'description'=> 'Free Tickets allow you entry to the our event. Ticket holders enter via the standard entrance.',
  		'price' => '0.00'
  		],
  		[
  		'type'=> 'Standard',
  		'description'=> 'Standard tickets give all visitors safe and easy access to comfortable seats.',
  		'price' => '50.00'
  		],
  		[
  		'type'=> 'Premium',
  		'description'=> 'At the event, premium ticket holders will have the best seats in the event. Not only will the seats be extra comfortable, but they will also be located in the best possible position, making sure you get the very best viewing experience.',
  		'price' => '100.00'
  		])
    	);

    }
}
