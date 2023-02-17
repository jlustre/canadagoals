<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Pages\Page;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Forms\Components\CheckboxList;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Filament\Resources\UserResource\RelationManagers\RolesRelationManager;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static?string $navigationGroup = 'Admin Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Username')
                    ->unique(ignoreRecord: true)
                    ->regex('/^[a-z0-9]+$/')
                    ->maxLength(255),
                Forms\Components\TextInput::make('sponsor')
                    ->required()
                    ->different('name')
                    ->exists(table:'users', column:'name')
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_admin')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->confirmed()
                    ->maxLength(255)
                    ->dehydrateStateUsing(static fn(null|string $state):
                    null|string => filled($state) ? Hash::make($state): null)
                    ->required(static fn(Page $livewire): string =>
                    $livewire instanceof CreateUser,
                    )->dehydrated(static fn (null|string $state): bool => filled($state),
                    )->label(static fn(Page $livewire): string  =>
                    ($livewire instanceof EditUser) ? 'New Password' : 'Password'
                ),
                Forms\Components\TextInput::make('password_confirmation')
                    ->password(),


                CheckboxList::make('roles')
                    ->relationship('roles', 'name')
                    ->columns(2)
                    ->helperText('Only Choose One!')
                    ->required(),
                // Forms\Components\TextInput::make('profile_photo_path')
                //     ->maxLength(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('profile_photo_path'),
                Tables\Columns\TextColumn::make('name')->label('Username')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('sponsor')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('is_admin')
                    ->boolean()->sortable()->searchable(),
                Tables\Columns\TextColumn::make('roles.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->sortable()->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->sortable()->searchable(),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    public static function getRelations(): array
    {
        return [
            RolesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
