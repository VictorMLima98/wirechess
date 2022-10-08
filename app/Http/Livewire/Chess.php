<?php

namespace App\Http\Livewire;

use App\Interfaces\ChessTable;
use App\Traits\HasChessTable;
use Livewire\Component;

class Chess extends Component implements ChessTable
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
                $bgColor = "bg-black";
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
                    'piece' => $this->hasPiece($i, $j)
                ];
            }
        }
    }

    private function even(int $number): bool
    {
        return $number % 2 === 0;
    }

    private function hasPiece(int $x, int $y): bool
    {
        return (in_array($x, self::UPPER_TABLE_PIECES) || in_array($x, self::LOWER_TABLE_PIECES));
    }

    public function render()
    {
        return view('livewire.chess');
    }
}
