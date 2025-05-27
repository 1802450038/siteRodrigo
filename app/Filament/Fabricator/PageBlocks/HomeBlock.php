<?php

namespace App\Filament\Fabricator\PageBlocks;

use Faker\Core\File;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HomeBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home')
            ->label("Inicio")
            ->icon('heroicon-o-home')
            ->schema([

                Fieldset::make()->schema([
                    Select::make('effecttType') // Eu sei q ta com 2 t`s
                        ->label('Tipo de Efeito')
                        ->options([
                            'circles' => 'Circulos',
                            'lines' => 'Linhas',
                        ])->default('lines')
                        ->required(false)
                        ->default('circles'),
                    TextInput::make('effectNumber')
                        ->label('Número de Elementos')
                        ->required(false)
                        ->default(10)
                        ->placeholder('Digite o número de elementos do efeito'),
                ])->label("Ajustes animação"),

                Fieldset::make()->schema([
                    TextInput::make('whatsApp')
                        ->label('WhatsApp')
                        ->required(false)
                        ->placeholder('Digite o número do WhatsApp'),
                    TextInput::make('instagram')
                        ->label('Instagram')
                        ->required(false)
                        ->placeholder('Digite o link do Instagram'),
                    TextInput::make('facebook')
                        ->label('Facebook')
                        ->required(false)
                        ->placeholder('Digite o link do Facebook'),
                ])->label("Links inicial")->columns(3),
                FileUpload::make('imageStart')
                    ->label('Imagem Inicial')
                    ->required(false)
                    ->placeholder('Selecione uma imagem'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
