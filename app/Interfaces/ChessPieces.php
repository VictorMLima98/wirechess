<?php

namespace App\Interfaces;

interface ChessPieces
{
    public const COORDINATES = [
        'rook'      => self::ROOK_COORDINATES,
        'knight'    => self::KNIGHT_COORDINATES,
        'bishop'    => self::BISHOP_COORDINATES,
        'queen'     => self::QUEEN_COORDINATES,
        'king'      => self::KING_COORDINATES,
        'pawn '     => self::PAWN_COORDINATES
    ];

    public const ROOK_COORDINATES = [
        [1, 1],
        [1, 8],
        [8, 1],
        [8, 8]
    ];

    public const KNIGHT_COORDINATES = [
        [1, 2],
        [1, 7],
        [8, 2],
        [8, 7]
    ];

    public const BISHOP_COORDINATES = [
        [1, 3],
        [1, 6],
        [8, 3],
        [8, 6]
    ];

    public const QUEEN_COORDINATES = [
        [1, 4],
        [8, 4]
    ];

    public const KING_COORDINATES = [
        [1, 5],
        [8, 5]
    ];

    public const PAWN_COORDINATES = [
        [2, 1],
        [2, 2],
        [2, 3],
        [2, 4],
        [2, 5],
        [2, 6],
        [2, 7],
        [2, 8],
        [7, 1],
        [7, 2],
        [7, 3],
        [7, 4],
        [7, 5],
        [7, 6],
        [7, 7],
        [7, 8],
    ];
}
