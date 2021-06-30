<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'password' => Hash::make('OOOO'),
            'email' => $this->faker->unique()->email,
            'phone_number' => $this->faker->phoneNumber(),
            'created_at' => $this->faker->dateTimeBetween('-30 years', 'now', 'UTC'),
            'updated_at' => null
        ];
    }
}
/* 
Schema::create('view', function (BluePrint $table) {
    $table->id();
    $table->string('username');
    $table->string('password');
    $table->string('phone_number')->nullable();
    $table->string('email')->nullable();
    $table->timestamps();
}); */