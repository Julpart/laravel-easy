<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_main_content_home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSeeText('Приветствую');
    }
    public function test_main_content_news()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);

        $response->assertSeeText('Новости');
    }
    public function test_protect_content_news()
    {
        $response = $this->get('/news/1');

        $response->assertStatus(200);

        $response->assertSeeText('Зарегистрируйтесь для просмотра');
    }
    public function test_menu()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSeeText('Категории');
    }
    public function test_admin_menu()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);

        $response->assertSeeText('Скачать изображение');
    }

}
