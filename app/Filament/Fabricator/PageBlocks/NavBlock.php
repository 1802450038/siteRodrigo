<?php

namespace App\Filament\Fabricator\PageBlocks;


use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class NavBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('nav')
            ->label("Navegação")
            ->icon('heroicon-o-bars-3')
            ->schema([
                FileUpload::make('image')
                    ->label('Logo')
                    ->image()
                    ->required()
                    ->placeholder('Selecione uma imagem para o Logo'),
                Fieldset::make()->schema([
                    Repeater::make('menuItems')
                        ->schema([
                            TextInput::make('label')
                                ->label('Parte')
                                ->required(),
                            TextInput::make('link')
                                ->label('Link -> Deve ser o nome dos blocos')
                                ->placeholder('Ex: inicio, sobre, contato')
                        ])->label('Itens da Navegação')
                        ->collapsible()
                        ->minItems(1)
                        ->maxItems(10)
                ])->label("Adicione o nome do item no menu e para qual item ele deve navegar")->columns(1),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
