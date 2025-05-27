<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ServicesBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('services')
            ->label('Serviços')
            ->icon('heroicon-o-wrench-screwdriver')
            ->schema([
                Fieldset::make()->schema([
                    Repeater::make('services')
                        ->label('Serviços')
                        ->schema([
                            TextInput::make('title')
                                ->label('Serviço')
                                ->required(),
                            RichEditor::make('description')
                                ->label('Descrição')
                                ->required(),
                            Select::make('icon')
                                ->label('Ícone')
                                ->options([
                                    'fa-envelope' => 'Envelope',
                                    'fa-hand' => 'Mão',
                                    'fa-handshake' => 'Aperto de Mão',
                                    'fa-money' => 'Dinheiro',
                                    'fa-pen-to' => 'Caneta',
                                    'fa-user' => 'Usuário',
                                    'fa-book-o' => 'Livro (Contorno)',
                                    'fa-broom' => 'Vassoura',
                                    'fa-building-columns' => 'Colunas do Prédio',
                                    'fa-building-wheat' => 'Prédio de Trigo',
                                    'fa-bullhorn' => 'Megafone',
                                    'fa-circle-dollar-to-slot' => 'Círculo com Símbolo de Dólar',
                                    'fa-file-signature' => 'Arquivo com Assinatura',
                                    'fa-gavel' => 'Martelo de Juiz',
                                    'fa-marker' => 'Marcador',
                                    'fa-user-tie' => 'Usuário com Gravata',
                                ])
                                ->searchable()
                                ->required(),
                        ])
                        ->collapsible(true)
                        ->collapsed()
                        ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                        ->deleteAction(fn(Action $action) => $action->requiresConfirmation())
                        ->required(),
                ])->columns(1)
                
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
