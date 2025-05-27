<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeaderBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('header')
            ->label("Cabeçalho")
            ->icon('heroicon-o-chevron-double-up')
            ->schema([
                Fieldset::make()->schema([
                    TextInput::make('title')
                        ->label('Titulo')
                        ->required()
                        ->placeholder('Enter the title'),
                ])->label("Não remover, carrega o design da pagina")
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
