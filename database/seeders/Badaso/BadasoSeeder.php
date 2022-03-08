<?php

namespace Database\Seeders\Badaso;

use Database\Seeders\Badaso\ManualGenerate\BadasoManualGenerateSeeder;
use Illuminate\Database\Seeder;
use Uasoft\Badaso\Module\LMSModule\Seeders\BadasoLMSModuleSeeder;

class BadasoSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(RolePermissionsSeeder::class);
        $this->call(MenusSeeder::class);
        $this->call(FixedMenuItemSeeder::class);
        $this->call(ConfigurationsSeeder::class);

        $this->call(BadasoManualGenerateSeeder::class);
        $this->call(BadasoLMSModuleSeeder::class);
    }
}
