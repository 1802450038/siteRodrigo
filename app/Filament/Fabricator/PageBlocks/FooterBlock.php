<?php

namespace App\Filament\Fabricator\PageBlocks;

use Dom\Text;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FooterBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('footer')
            ->label("Rodapé")
            ->icon('heroicon-o-chevron-double-down')
            ->schema([
                TextInput::make('copyright')
                    ->label('Direitos Autorais')
                    ->placeholder('Digite os direitos autorais')
                    ->required(false)
                    ->columnSpanFull(),
                TextInput::make('text')
                    ->label('Mensagem do Rodapé')
                    ->placeholder('Digite a mensagem do rodapé')
                    ->required(false)
                    ->columnSpanFull(),
        
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}