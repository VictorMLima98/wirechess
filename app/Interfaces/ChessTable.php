<?php

namespace App\Interfaces;

interface ChessTable
{
    public const COLUMNS = 8;
    public const ROWS = 8;

    public const UPPER_TABLE_PIECES = [1, 2];
    public const LOWER_TABLE_PIECES = [7, 8];

    public const COLUMN_COORDINATES = [
        1 => "A",
        2 => "B",
        3 => "C",
        4 => "D",
        5 => "E",
        6 => "F",
        7 => "G",
        8 => "H"
    ];
}
