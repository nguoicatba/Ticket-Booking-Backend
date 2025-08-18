<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventStatus;

class EventStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'Pending', 'description' => 'Event is pending approval'],
            ['name' => 'Approved', 'description' => 'Event has been approved'],
            ['name' => 'Rejected', 'description' => 'Event has been rejected'],
            ['name' => 'Completed', 'description' => 'Event has been completed'],
        ];

        foreach ($statuses as $status) {
            EventStatus::create($status);
        }

        // Seed thêm dữ liệu random từ factory (tuỳ chọn)
        EventStatus::factory()->count(5)->create();
    }
}
