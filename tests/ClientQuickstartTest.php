<?php
use PHPUnit\Framework\TestCase;
use Twilio\Rest\Client;


class ClientQuickstartTest extends TestCase
{
    protected function setUp(): void
    {
        $this->setOutputCallback(function() {});
    }

    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testVoiceResponseHasToParameter()
    {
        include_once('./voice.php');

        $response = get_voice_response("+5939999999");
        $this->assertStringContainsString('<Number>+5939999999</Number>', $response);
    }

    public function testVoiceResponseHasNoParameters()
    {
        include_once('./voice.php');

        $response = get_voice_response(null);
        $this->assertStringContainsString('<Say>Thanks for calling!</Say>', $response);
    }

    public function testTokenGeneration()
    {
      include_once('./token.php');
      $response = get_access_token('nezuko');

      $this->assertStringContainsString('"identity":"nezuko"', $response);
      $this->assertStringContainsString('"token":"', $response);
    }
}
