<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageSectionResource\Pages;
use App\Models\PageSection;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageSectionResource extends Resource
{
    protected static ?string $model             = PageSection::class;
    protected static ?string $navigationIcon    = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup   = 'CMS';
    protected static ?string $label             = 'Seção';
    protected static ?string $pluralLabel       = 'Seções de Página';

    public static function form(Form $form): Form
    {
        return $form->schema([ 
                Select::make('type')
                    ->label('Tipo da Seção')
                    ->options([
                        'hero'              => 'Hero',
                        'audience'          => 'Públicos',
                        'benefits'          => 'Benefícios',
                        'impact'            => 'Impacto',
                        'plans'             => 'Planos',
                        'app_download'      => 'App',
                        'functionalities'   => 'Funcionalidades',
                        'cta'               => 'Chamada final',
                        'footer'            => 'Rodapé',
                    ])
                    ->required()
                    ->live(),

                TextInput::make('title')
                    ->label('Título da Sessão')
                    ->required()
                    ->maxLength(255),

                TextInput::make('data.title')
                    ->label('Título')
                    ->visible(fn ($get) => in_array($get('type'), ['hero', 'benefits', 'impact'])),

                // HERO
                Textarea::make('data.subtitle')
                    ->label('Subtítulo')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'hero'),

                FileUpload::make('data.image')
                    ->label('Imagem')
                    ->image()
                    ->directory('sections')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'hero'),

                TextInput::make('data.button_text')
                    ->label('Texto do botão')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'hero'),
        
                TextInput::make('data.button_link')
                    ->label('Link do botão')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'hero'),
                
                // AUDIENCE
                Repeater::make('data.items')
                    ->label('Públicos')
                    ->schema([
                        TextInput::make('title')->label('Público')->required(),
                        Textarea::make('description')->label('Descrição'),
                        FileUpload::make('icon')
                            ->image()
                            ->directory('sections/publicos')
                            ->label('Imagem')
                            ->imageEditor()
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeTargetWidth('100')
                            ->imageResizeTargetHeight('100')
                    ])
                    ->visible(fn (Forms\Get $get) => $get('type') === 'audience'),

                // BENEFITS
                FileUpload::make('data.image')
                    ->label('Imagem')
                    ->image()
                    ->directory('sections')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'benefits'),

                Repeater::make('data.benefits')
                    ->label('Benefícios')
                    ->schema([
                        TextInput::make('text')->required(),
                    ])
                    ->visible(fn (Forms\Get $get) => $get('type') === 'benefits'),

                // IMPACT
                FileUpload::make('data.image')
                    ->image()
                    ->directory('sections/impacto')
                    ->label('Imagem')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'impact'),

                TextInput::make('data.button_text')
                    ->label('Texto do botão')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'impact'),
        
                TextInput::make('data.button_link')
                    ->label('Link do botão')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'impact'),

                // PLANS
                Repeater::make('data.plans')
                    ->label('Planos')
                    ->schema([
                        TextInput::make('title')
                            ->label('Título do Plano')
                            ->required(),

                        Repeater::make('features')
                            ->label('Funcionalidades')
                            ->schema([
                                TextInput::make('feature')
                                    ->label('Funcionalidade')
                                    ->required(),
                            ])
                            ->minItems(1)
                            ->reorderable()
                            ->collapsible(),

                        TextInput::make('button')
                            ->label('Texto do Botão'),

                        TextInput::make('link')
                            ->label('Link do Botão')
                            ->url()
                            ->nullable(),

                        Forms\Components\Toggle::make('is_featured')
                            ->label('Plano Recomendado')
                            ->default(false),
                    ])
                    ->visible(fn (Forms\Get $get) => $get('type') === 'plans')
                    ->reorderable()
                    ->collapsible()
                    ->grid(1),
        
                // APP DOWNLOAD
                FileUpload::make('data.image')
                    ->label('Imagem')
                    ->image()
                    ->directory('sections')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'app_download'),
                
                TextInput::make('data.title')->label('Título'),

                Textarea::make('data.text')
                    ->label('Texto')
                    ->visible(fn (Forms\Get $get) => in_array($get('type'), ['app_download', 'footer'])),

                TextInput::make('data.button_web')
                    ->label('Link Web')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'app_download'),
        
                TextInput::make('data.button_google')
                    ->label('Link Google Play')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'app_download'),
                    
                TextInput::make('data.button_apple')
                    ->label('Link App Store')
                    ->visible(fn (Forms\Get $get) => $get('type') === 'app_download'),
        

                Repeater::make('data.functionalities')
                    ->label('Funcionalidades')
                    ->schema([
                        TextInput::make('title')->required(),
                        FileUpload::make('icon')->image()->directory('sections/icons'),
                    ])
                    ->visible(fn (Forms\Get $get) => $get('type') === 'functionalities'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('page.title')->label('Página'),
            Tables\Columns\TextColumn::make('type')->label('Tipo'),
            Tables\Columns\TextColumn::make('title')->label('Título Interno'),
            Tables\Columns\TextColumn::make('sort_order')->label('Ordem')->sortable(),
            Tables\Columns\TextColumn::make('updated_at')->label('Atualizado')->dateTime('d/m/Y H:i'),
        ])
        ->defaultSort('sort_order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'     => Pages\ListPageSections::route('/'),
            'create'    => Pages\CreatePageSection::route('/create'),
            'edit'      => Pages\EditPageSection::route('/{record}/edit'),
        ];
    }
}
