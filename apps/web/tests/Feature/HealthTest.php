<?php
it('returns ok on /health', function () {
    $response = $this->get('/health');
    $response->assertStatus(200)->assertSee('ok');
});
