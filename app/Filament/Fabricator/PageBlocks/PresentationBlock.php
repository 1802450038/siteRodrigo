<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PresentationBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('presentation')
        ->label("Apresentação")
        ->icon('heroicon-o-presentation-chart-bar')
            ->schema([
                TextInput::make('presentationTitle')
                ->label('Título da Apresentação')
                    ->placeholder('Digite o título da apresentação'),
                RichEditor::make('presentationText')
                    ->label('Texto da Apresentação')
                    ->placeholder('Digite o texto da apresentação')
                    ->columnSpanFull(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}