<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Section::make('Main columns')->schema([
                    TextInput::make('title')->required()->minLength(5)->maxLength(200)->live()
                        ->afterStateUpdated(function (string $operation,$state,Forms\Set $set ){
                            if ($operation === 'edit') {
                                return;
                            }
                            $set('slug',Str::slug($state));
                        }),
                    TextInput::make('slug')->required()->unique(ignoreRecord:true)->minLength(3)->maxLength(150),
                   RichEditor::make('description')->required()->columnSpanFull(),

                ])->columns(2),
                Section::make('Additional columns')->schema([
                    FileUpload::make('image')->image()->directory('posts/thumbnails'),
                    DateTimePicker::make('created_at')->nullable(),
                    Checkbox::make('featured'),
                    Select::make('user_id')->relationship('author','first_name')
                        ->searchable()->required()->label('Author'),

                    Select::make('last-name')->relationship('author','last_name')
                        ->searchable()->required(),
                    Select::make('categories')->multiple()->relationship('categories','title')
                        ->searchable()->options(Category::all()->pluck('title')->toArray()),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('slug')->sortable()->searchable(),
                ImageColumn::make('image')->sortable()->searchable(),
                TextColumn::make('author.first_name')->sortable()->searchable()->label('Author first name'),
                TextColumn::make('author.last_name')->sortable()->searchable()->label('Author last name'),
                CheckboxColumn::make('featured'),
                TextColumn::make('created_at')->date()->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
