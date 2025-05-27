<?php

namespace App\Filament\Fabricator\PageBlocks;

use Doctrine\DBAL\Schema\Schema;
use Dom\Text;
use Faker\Core\File;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

use function Laravel\Prompts\select;

class AboutAndTeamBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('about-and-team')
            ->label("Sobre nós")
            ->icon('heroicon-o-users')
            ->schema([
                TextInput::make('aboutTitle')
                    ->label('Título Sobre')
                    ->placeholder('Título do bloco')
                    ->required(false),
                RichEditor::make('description')
                    ->label('Descrição')
                    ->placeholder('Descrição do bloco')
                    ->required(false),
                TextInput::make('partnersTitle')
                    ->label('Título dos Parceiros')
                    ->placeholder('Título do bloco')
                    ->required(false),

                Repeater::make('partners')
                    ->label('Parceiros')
                    ->schema([

                        Fieldset::make()->schema([
                            Toggle::make('active')
                                ->label('Ativo')
                                ->required(false),
                            Toggle::make('featured')
                                ->label('Destaque')
                                ->required(false),
                        ])->label('Visibilidade'),
                        FileUpload::make('image')
                            ->label('Imagem do Parceiro')
                            ->placeholder('Imagem do parceiro')
                            ->required(false),

                        Fieldset::make()->schema([
                            TextInput::make('name')
                                ->label('Nome do Parceiro')
                                ->placeholder('Nome do parceiro')
                                ->required(false),
                            TextInput::make('initials')
                                ->label('Iniciais do Parceiro')
                                ->placeholder('Iniciais do parceiro')
                                ->required(false),
                            TextInput::make('OAB')
                                ->label('OAB do Parceiro')
                                ->placeholder('OAB do parceiro')
                                ->required(false),
                            TextInput::make('descriptionPartner')
                                ->label('Descrição do Parceiro')
                                ->placeholder('Descrição do parceiro')
                                ->required(false),
                        ])->label('Dados do parceiro')->columns(2),
                        Fieldset::make()->schema([

                            Select::make('rolePartner')
                                ->label('Função do Parceiro')
                                ->placeholder('Função do parceiro')
                                ->options([
                                    'Sócio' => 'Sócio',
                                    'Advogado' => 'Advogado',
                                    'Atendente' => 'Atendente',
                                    'Assistente' => 'Assistente'
                                ])
                                ->required(false),
                            TextInput::make('link')
                                ->label('Link do Parceiro')
                                ->placeholder('Link do parceiro')
                                ->required(false),
                            Select::make('type')
                                ->label('Tipo de Link')
                                ->placeholder('Tipo do parceiro')
                                ->options([
                                    'Whats' => 'Whatsapp',
                                    'Facebook' => 'Facebook',
                                    'Email' => 'Email',
                                ])
                                ->default('email')
                                ->required(false),
                        ])->label('Cargo e contato')->columns(3)
                    ])->collapsible()
                    ->grid(1)
                    ->itemLabel(fn(array $state): ?string => $state['name'] ?? null)
                    ->orderable()
                    ->addActionLabel("Adicionar parceiro")
                    ->addAction(fn($action) => $action->color('success'))
                    ->required(false)
                    ->deleteAction(fn(Action $action) => $action->requiresConfirmation(),
                    ),

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
