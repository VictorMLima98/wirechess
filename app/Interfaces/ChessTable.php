<?php

namespace App\Interfaces;

interface ChessTable
{
    public const COLUMNS = 8;
    public const ROWS = 8;

    public const UPPER_TABLE_PIECES = [1, 2];
    public const LOWER_TABLE_PIECES = [7, 8];
}
