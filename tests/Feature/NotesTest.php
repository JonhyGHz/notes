<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;
class NotesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
      Note::create(['note'] => 'Mi primera nota');
      Note::create(['note'] => 'Segunda nota');
      $this->visit('notes')
        ->see('Mi primera nota')
        ->see('Segunda nota');
    }
}
