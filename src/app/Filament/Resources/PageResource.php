<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PageResource extends Resource
{
    protected static ?string $model             = Page::class;
    protected static ?string $navigationIcon    = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup   = 'CMS';
    protected static ?string $label             = 'Página';
    protected static ?string $pluralLabel       = 'Páginas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->unique(Page::class, 'slug', ignoreRecord: true)
                    ->maxLength(255),

                Select::make('sections')
                    ->label('Seções da Página')
                    ->multiple()
                    ->preload()
                    ->relationship('sections', 'id')
                    ->options(function () {
                        return PageSection::query()
                            ->pluck('title', 'id')
                            ->filter()
                            ->toArray();
                    })
                    ->searchable(),

                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title')->searchable(),
            TextColumn::make('slug'),
            IconColumn::make('is_active')
                ->boolean()
                ->label('Ativa'),
            TextColumn::make('updated_at')
                ->label('Atualizada em')
                ->dateTime('d/m/Y H:i'),
        ])
        ->actions([
            EditAction::make(),
        ])
        ->bulkActions([
            DeleteBulkAction::make(),
        ])
        ->defaultSort('title');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'     => Pages\ListPages::route('/'),
            'create'    => Pages\CreatePage::route('/create'),
            'edit'      => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('sections');
    }
}
