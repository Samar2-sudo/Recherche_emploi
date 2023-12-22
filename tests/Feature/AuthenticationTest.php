<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_login()
    {
        // Créer un utilisateur de test
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Effectuer une demande POST pour simuler la soumission du formulaire de connexion
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // Vérifier si l'utilisateur est connecté après la tentative de connexion
        $this->assertTrue(Auth::check());

        // Vous pouvez également vérifier si la redirection après la connexion est correcte
        $response->assertRedirect('/dashboard');
    }
}
