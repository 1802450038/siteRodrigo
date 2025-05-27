<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ArticlesBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('articles')
            ->icon('heroicon-o-newspaper')
            ->label("Artigos")
            ->schema([
                Repeater::make('articles')
                    ->label('Artigos')
                    ->schema([
                        TextInput::make('title')
                            ->label('Título')
                            ->required(false),
                        TextInput::make('description')
                            ->label('Descrição do artigo')
                            ->placeholder('Digite a descrição do arquivo')
                            ->required(false),
                        TextInput::make('author')
                            ->label('Autor')
                            ->required(false),
                        TextInput::make('date')
                            ->label('Data')
                            ->required(false),
                        FileUpload::make('file')
                            ->label('Arquivo do Artigo')
                            ->disk('public')
                            ->directory('artigos')
                            ->preserveFilenames()
                            ->enableOpen()
                            ->enableDownload()
                            ->required(false),
                    ])
                    ->collapsible(true)
                    ->collapsed()
                    ->grid(2)
                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                    ->deleteAction(
                        fn(Action $action) => $action->requiresConfirmation(),
                    )
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
