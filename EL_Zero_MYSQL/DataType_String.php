
            |===========================|
            |=======MySql DataType======|
            |===========================|

    Char      => Character
        - Store Fixed Vslue
        - Max Character 255
        - Faster Than varchar
        - use static memory

    Varchar   => Variable Character
        - Store Variable Value
        - Max Character Mysql v 5.0.3 => 255 | v 5.0.3+ => 65.535
        - Slower than count_char
        - Use Dynamic memory

////////////////////////////////////////////////////////////////

    Text     => Store String
        - Deal & Compered Depend on Charset
        - Store Long Strings

    BLOB     => Binary Large Object
        - Has no Charset
        - Deal and Compared depend on Numeric value of Byte
        - Used to Store Image and oyhers file
///////////////////////////////////////////////////////////////

    Enum      => chose one value
    Set       => chose multiple values
