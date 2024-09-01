<?php

namespace App\Filament\Resources;

use App\Models\Cv;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CvResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CvResource\RelationManagers;

class CvResource extends Resource
{
    protected static ?string $model = cv::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $breadcrumb = 'Curiculum Vitae';
    protected static ?string $pluralLabel = 'Curiculum Vitae';
    protected static ?string $label = 'Curiculum Vitae';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        FileUpload::make('cv')
                            ->required()
                            ->preserveFilenames(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cv')
                    ->label('PDF Document'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListCvs::route('/'),
            'create' => Pages\CreateCv::route('/create'),
            'edit' => Pages\EditCv::route('/{record}/edit'),
        ];
    }
}
