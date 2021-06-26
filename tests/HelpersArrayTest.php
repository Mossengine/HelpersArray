<?php

/**
 * Class HelpersArrayTest
 */
class HelpersArrayTest extends PHPUnit_Framework_TestCase
{
    public function testIfArrayIsAssociative() {
        $array = ['a' => 'A'];
        $this->assertTrue(
            \Mossengine\Helpers\_Array\_IsAssociative::_IsAssociative($array)
        );
    }
    public function testIfNotArrayIsAssociative() {
        $array = ['a','b'];
        $this->assertFalse(
            \Mossengine\Helpers\_Array\_IsAssociative::_IsAssociative($array)
        );
    }
    public function testIfArrayHas() {
        $array = ['a' => 'A'];
        $this->assertTrue(
            \Mossengine\Helpers\_Array\_Has::_Has($array, 'a')
        );
    }
    public function testIfNotArrayHas() {
        $array = ['b' => 'B'];
        $this->assertFalse(
            \Mossengine\Helpers\_Array\_Has::_Has($array, 'a')
        );
    }
    public function testIfArrayGet() {
        $array = ['a' => 'A'];
        $this->assertEquals(
            'A',
            \Mossengine\Helpers\_Array\_Get::_Get($array, 'a')
        );
    }
    public function testIfNotArrayGet() {
        $array = ['b' => 'B'];
        $this->assertNotEquals(
            'A',
            \Mossengine\Helpers\_Array\_Get::_Get($array, 'a', 'default')
        );
    }
    public function testIfArraySet() {
        $array = [];
        $array = \Mossengine\Helpers\_Array\_Set::_Set($array, 'a', 'A');
        $this->assertEquals(
            [
                'a' => 'A'
            ],
            $array
        );
        $array = \Mossengine\Helpers\_Array\_Set::_Set($array, 'b.c.d', 'D');
        $this->assertEquals(
            [
                'a' => 'A',
                'b' => [
                    'c' => [
                        'd' => 'D'
                    ]
                ]
            ],
            $array
        );
    }
    public function testIfNotArraySet() {
        $array = [];
        $array = \Mossengine\Helpers\_Array\_Set::_Set($array, 'a', 'A');
        $this->assertNotEquals(
            [
                'b' => 'B'
            ],
            $array
        );
    }
    public function testIfArrayForget() {
        $array = [
            'a' => 'A',
            'b' => 'B',
            'c' => 'C'
        ];
        $array = \Mossengine\Helpers\_Array\_Forget::_Forget($array, 'b');
        $this->assertEquals(
            [
                'a' => 'A',
                'c' => 'C'
            ],
            $array
        );
    }
    public function testIfNotArrayForget() {
        $array = [
            'a' => 'A',
            'b' => 'B',
            'c' => 'C'
        ];
        $array = \Mossengine\Helpers\_Array\_Forget::_Forget($array, 'z');
        $this->assertNotEquals(
            [
                'a' => 'A',
                'c' => 'C'
            ],
            $array
        );
    }
    public function testIfArrayEvery() {
        $this->assertTrue(
            \Mossengine\Helpers\_Array\_Every::_Every(
                [
                    1,
                    2,
                    3,
                    4
                ],
                function ($value) {
                    return $value > 0;
                }
            )
        );
    }
    public function testIfNotArrayEvery() {
        $this->assertFalse(
            \Mossengine\Helpers\_Array\_Every::_Every(
                [
                    1,
                    2,
                    -1,
                    4
                ],
                function ($value) {
                    return $value > 0;
                }
            )
        );
    }
    public function testIfArraySome() {
        $this->assertTrue(
            \Mossengine\Helpers\_Array\_Some::_Some(
                [
                    1,
                    -1,
                    3,
                    4
                ],
                function ($value) {
                    return $value > 0;
                }
            )
        );
    }
    public function testIfNotArraySome() {
        $this->assertFalse(
            \Mossengine\Helpers\_Array\_Some::_Some(
                [
                    -1,
                    -2,
                    -1,
                    -4
                ],
                function ($value) {
                    return $value > 0;
                }
            )
        );
    }
    public function testIfArrayFirstKey() {
        $this->assertEquals(
            'a',
            \Mossengine\Helpers\_Array\_FirstKey::_FirstKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfNotArrayFirstKey() {
        $this->assertNotEquals(
            'b',
            \Mossengine\Helpers\_Array\_FirstKey::_FirstKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfArrayNthKey() {
        $this->assertEquals(
            'b',
            \Mossengine\Helpers\_Array\_NthKey::_NthKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                2
            )
        );
    }
    public function testIfNotArrayNthKey() {
        $this->assertNotEquals(
            'c',
            \Mossengine\Helpers\_Array\_NthKey::_NthKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                2
            )
        );
    }
    public function testIfArrayNthKeyOutOfRange() {
        $this->assertEquals(
            'd',
            \Mossengine\Helpers\_Array\_NthKey::_NthKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                4,
                'd'
            )
        );
    }
    public function testIfArrayLastKey() {
        $this->assertEquals(
            'c',
            \Mossengine\Helpers\_Array\_LastKey::_LastKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfNotArrayLastKey() {
        $this->assertNotEquals(
            'a',
            \Mossengine\Helpers\_Array\_LastKey::_LastKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfArrayFirstValue() {
        $this->assertEquals(
            'A',
            \Mossengine\Helpers\_Array\_Firstvalue::_FirstValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfNotArrayFirstValue() {
        $this->assertNotEquals(
            'B',
            \Mossengine\Helpers\_Array\_FirstValue::_FirstValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfArrayNthValue() {
        $this->assertEquals(
            'B',
            \Mossengine\Helpers\_Array\_NthValue::_NthValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                2
            )
        );
    }
    public function testIfNotArrayNthValue() {
        $this->assertNotEquals(
            'C',
            \Mossengine\Helpers\_Array\_NthValue::_NthValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                2
            )
        );
    }
    public function testIfArrayNthValueOutOfRange() {
        $this->assertEquals(
            'D',
            \Mossengine\Helpers\_Array\_NthValue::_NthValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                4,
                'D'
            )
        );
    }
    public function testIfArrayLastValue() {
        $this->assertEquals(
            'C',
            \Mossengine\Helpers\_Array\_LastValue::_LastValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfNotArrayLastValue() {
        $this->assertNotEquals(
            'A',
            \Mossengine\Helpers\_Array\_LastValue::_LastValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }

}