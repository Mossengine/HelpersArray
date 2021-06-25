<?php

/**
 * Class HelperSArrayTest
 */
class HelperSArrayTest extends PHPUnit_Framework_TestCase
{
    public function testIfArrayIsAssociative() {
        $this->assertTrue(
            \Mossengine\Helpers\_Array\_IsAssociative::_IsAssociative(['a' => 'A'])
        );
    }
    public function testIfNotArrayIsAssociative() {
        $this->assertFalse(
            \Mossengine\Helpers\_Array\_IsAssociative::_IsAssociative(['a','b'])
        );
    }
    public function testIfArrayHas() {
        $this->assertTrue(
            \Mossengine\Helpers\_Array\_Has::_Has(['a' => 'A'], 'a')
        );
    }
    public function testIfNotArrayHas() {
        $this->assertFalse(
            \Mossengine\Helpers\_Array\_Has::_Has(['b' => 'B'], 'a')
        );
    }
    public function testIfArrayGet() {
        $this->assertEquals(
            'A',
            \Mossengine\Helpers\_Array\_Get::_Get(['a' => 'A'], 'a')
        );
    }
    public function testIfNotArrayGet() {
        $this->assertNotEquals(
            'A',
            \Mossengine\Helpers\_Array\_Get::_Get(['b' => 'B'], 'a', 'default')
        );
    }
    public function testIfArraySet() {
        $array = \Mossengine\Helpers\_Array\_Set::_Set([], 'a', 'A');
        $this->assertEquals(
            [
                'a' => 'A'
            ],
            $array
        );
    }
    public function testIfNotArraySet() {
        $array = \Mossengine\Helpers\_Array\_Set::_Set([], 'a', 'A');
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