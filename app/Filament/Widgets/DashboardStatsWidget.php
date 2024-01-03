<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Filament\Facades\Filament;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total users',User::count())->url(route('filament.admin.resources.users.index')),
            Stat::make('Total posts',Post::count())->url(route('filament.admin.resources.posts.index')),
            Stat::make('Total categories',Category::count())->url(route('filament.admin.resources.categories.index')),
        ];
    }
}
