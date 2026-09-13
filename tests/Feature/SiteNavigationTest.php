<?php

namespace Tests\Feature;

use Tests\TestCase;

class SiteNavigationTest extends TestCase
{
    public function test_inicio_page_loads_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('TechFreelancer');
        $response->assertSee('Ayudo a negocios a trabajar mejor con tecnología');
    }

    public function test_servicios_page_loads_successfully(): void
    {
        $response = $this->get('/servicios');
        $response->assertStatus(200);
        $response->assertSee('Desarrollo de sitios web');
        $response->assertSee('Automatización de procesos');
    }

    public function test_proyectos_page_loads_successfully(): void
    {
        $response = $this->get('/proyectos');
        $response->assertStatus(200);
        $response->assertSee('FinDash Analytics');
        $response->assertSee('Lumina Retail');
    }

    public function test_sobre_mi_page_loads_successfully(): void
    {
        $response = $this->get('/sobre-mi');
        $response->assertStatus(200);
        $response->assertSee('Perfil Profesional');
        $response->assertSee('Mi forma de trabajar');
    }

    public function test_contacto_page_loads_successfully(): void
    {
        $response = $this->get('/contacto');
        $response->assertStatus(200);
        $response->assertSee('Cuéntame qué necesitas');
        $response->assertSee('Enviar consulta');
    }

    public function test_contacto_form_submission(): void
    {
        $response = $this->post('/contacto', [
            'nombre' => 'Test User',
            'empresa' => 'Test Company',
            'email' => 'test@example.com',
            'whatsapp' => '+34600000000',
            'necesidad' => 'web',
            'mensaje' => 'Hola, me gustaría desarrollar un nuevo sitio web.',
        ]);

        $response->assertRedirect('/contacto');
        $response->assertSessionHas('success');
    }
}
