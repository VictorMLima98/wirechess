<?php

namespace App\Http\Livewire;

use App\Interfaces\ChessPieces;
use App\Interfaces\ChessTable;
use App\Traits\HasChessTable;
use Livewire\Component;

class Chess extends Component implements ChessTable, ChessPieces
{
    use HasChessTable;

    public function mount(): void
    {
        $this->setChessTable();
    }

    public function setChessTable(): void
    {
        for ($i = 1; $i <= self::ROWS; $i++) {
            for ($j = 1; $j <= self::COLUMNS; $j++) {
                $bgColor = "bg-gray-500";
                $hoverBgColor = "hover:bg-black/50";
                $textColor = "text-white";

                $shouldBeWhite = ($this->even($i) && $this->even($j))
                    || (!$this->even($i) && !$this->even($j));

                if ($shouldBeWhite) {
                    $bgColor = "bg-white";
                    $hoverBgColor = "hover:bg-white/50";
                    $textColor = "text-black";
                }

                $this->table[] = [
                    'bgColor' => $bgColor,
                    'hoverBgColor' => $hoverBgColor,
                    'textColor' => $textColor,
                    'piece' => $this->definePiece($i, $j)
                ];
            }
        }
    }

    private function even(int $number): bool
    {
        return $number % 2 === 0;
    }

    private function hasPiece(int $x): bool
    {
        return (in_array($x, self::UPPER_TABLE_PIECES) || in_array($x, self::LOWER_TABLE_PIECES));
    }

    private function shouldBeBlackPiece(int $x): bool
    {
        return in_array($x, self::UPPER_TABLE_PIECES);
    }

    private function definePiece(int $x, int $y): ?string
    {
        if (!$this->hasPiece($x)) {
            return null;
        }

        $pieceColor = $this->shouldBeBlackPiece($x) ? "black" : "white";

        foreach (self::COORDINATES as $component => $pieceCoordinates) {
            if ($this->shouldRenderPiece($pieceCoordinates, $x, $y)) {
                return "svg.pieces.{$pieceColor}.{$component}";
            }
        }

        return null;
    }

    private function shouldRenderPiece(array $coordinates, $x, $y): bool
    {
        foreach ($coordinates as $coordinate) {
            if (in_array($x, $coordinate) && in_array($y, $coordinate)
                && $x === $coordinate[0] && $y === $coordinate[1]) {
                return true;
            }
        }
        return false;
    }

    public function render()
    {
        return view('livewire.chess');
    }
}
