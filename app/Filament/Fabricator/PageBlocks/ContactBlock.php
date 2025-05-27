<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContactBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('contact')
        ->label("Contato")
        ->icon('heroicon-o-phone')
            ->schema([
                TextInput::make('contactTitle')
                    ->label('Titulo contato'),
                TextInput::make('contactMessage')
                    ->label('Mensagem do contato'),

                Grid::make(2)->label('Informações de contato')
                    ->schema([
                        TextInput::make('phoneDD')
                            ->label('DDD do telefone'),
                        TextInput::make('contactPhone')
                            ->label('Telefone de contato'),
                        TextInput::make('contactMail')
                            ->label('E-mail de contato')->columnSpanFull(),
                    ]),
                TextInput::make('contactAddress')
                    ->label('Endereço de contato'),
                TextInput::make('mapCode')
                    ->label('Código do mapa'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
