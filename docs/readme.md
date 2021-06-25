<h1 align="center">Helpers Array: Documentation</h1>

### Methods

#### isAssociative
evaluates the first argument for being an associative array and returns a boolean indicated response.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_IsAssociative::_IsAssociative(['a' => 'A']);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::IsAssociative(['a' => 'A']);
```

#### has
checks the first argument as an array to verify the second parameter as a key exists within the array and returns a boolean indicator response.
note: this supports dot notation key paths.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_Has::_Has(['a' => 'A', 'a']);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::Has(['a' => 'A', 'a']);
```

#### get
Retruns the relative value at the second argument's key or uses the third argument as a default.
note: this supports dot notation key paths.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_Get::_Get(['a' => 'A'], 'b', 'B');

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::Get(['a' => 'A'], 'b', 'B');
```

#### set
Sets the third agrument value into the first argument's array at the second argument's key.
note: this supports dot notation key paths.
note: the first argument must be a defined variable.
```php
$array = ['a' => 'A'];

// Direct usage ( not intended )
Mossengine\Helpers\_Array\_Set::_Set($array, 'b', 'B');

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::Set($array, 'b', 'B');
```

#### forget
unsets a key from the first argument using the second argument as the indicated key.
note: this supports dot notation key paths.
note: the first argument must be a defined variable.
```php
$array = ['a' => 'A'];

// Direct usage ( not intended )
Mossengine\Helpers\_Array\_Forget::_Forget($array, 'a');

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::Forget($array, 'a');
```

#### every
Iterates over the second argument array using the first argument as a callable that must return a boolean like value, any non-true return will stop the iterator and return a false indicator result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_Every::_Every(function($value) { return $value > 0; }, ['a' => 1,'b' => 2,'c' => 3]);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::Every(function($value) { return $value > 0; }, ['a' => 1,'b' => 2,'c' => 3]);
```

#### some
Iterates over the second argument array using the first argument as a callable that must return a boolean like value, any true return will stop the iterator and return a true indicator result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_Some::_Some(function($value) { return $value > 0; }, ['a' => 0,'b' => 2,'c' => 3]);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::Some(function($value) { return $value > 0; }, ['a' => 0,'b' => 2,'c' => 3]);
```

#### firstKey
Returns the first key in the first argument's array
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_FirstKey::_FirstKey(['a' => 'A', 'b' => 'B', 'c' => 'C']);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::FirstKey(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### nthKey
Returns the key at the nth position in the first argument's array
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_NthKey::_NthKey(['a' => 'A', 'b' => 'B', 'c' => 'C']);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::NthKey(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### lastKey
Returns the last key in the first argument's array
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_LastKey::_LastKey(['a' => 'A', 'b' => 'B', 'c' => 'C']);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::LastKey(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### firstValue
Returns the first value in the first argument's array
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_FirstValue::_FirstValue(['a' => 'A', 'b' => 'B', 'c' => 'C']);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::FirstValue(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### nthValue
Returns the value at the nth position in the first argument's array
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_NthValue::_NthValue(['a' => 'A', 'b' => 'B', 'c' => 'C']);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::NthValue(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```

#### lastValue
Returns the last value in the first argument's array
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Array\_LastValue::_LastValue(['a' => 'A', 'b' => 'B', 'c' => 'C']);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Array()::LastValue(['a' => 'A', 'b' => 'B', 'c' => 'C']);
```
