<?php

namespace Tests\Unit;

use App\Helper\Base62;
use PHPUnit\Framework\TestCase;

class Base62EncodeDecodeTest extends TestCase
{
    public function test_should_be_possible_to_encode_numbers()
    {

        $this->assertEquals('0', Base62::encode(0));
        $this->assertEquals('1', Base62::encode(1));
        $this->assertEquals('9', Base62::encode(9));
        $this->assertEquals('a', Base62::encode(10));
        $this->assertEquals('Z', Base62::encode(61));
        $this->assertEquals('10', Base62::encode(62));
        $this->assertEquals('19', Base62::encode(71));
        $this->assertEquals('1a', Base62::encode(72));
        $this->assertEquals('2KkMHfDwhH2', Base62::encode(2305843009213693952));
        $this->assertEquals('2KkMHfDwhH9', Base62::encode(2305843009213693959));
    }

    public function test_should_be_possible_to_decode_numbers()
    {
        $this->assertEquals(0, Base62::decode('0'));
        $this->assertEquals(1, Base62::decode('1'));
        $this->assertEquals(9, Base62::decode('9'));
        $this->assertEquals(10, Base62::decode('a'));
        $this->assertEquals(61, Base62::decode('Z'));
        $this->assertEquals(62, Base62::decode('10'));
        $this->assertEquals(71, Base62::decode('19'));
        $this->assertEquals(72, Base62::decode('1a'));
        $this->assertEquals(2305843009213693952, Base62::decode('2KkMHfDwhH2'));
        $this->assertEquals(2305843009213693959, Base62::decode('2KkMHfDwhH9'));
    }
}
