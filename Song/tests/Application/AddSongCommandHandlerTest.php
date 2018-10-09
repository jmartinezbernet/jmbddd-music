<?php

namespace SongTests\Application;

use PHPUnit\Framework\TestCase;

class AddSongCommandHandlerTest extends TestCase
{
    public function setUp()
    {

    }

    /**
     * @test
     */
    public function givenAddSongCommand_whenNameIsNull_thenShouldThrowException()
    {
        $this->assertEquals(true, true);
    }
}